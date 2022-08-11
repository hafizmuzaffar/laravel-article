<?php

namespace App\Http\Controllers;

use App\Models\Users;
use App\Models\Articles;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\str_random;
use Illuminate\Support\Facades\Validator;

class UsersController extends Controller
{
    public function login_form()
    {
        return view('login');
    }
    public function login_action(Request $request)
    {
        //variabel penampung username
        $users = Users::where('username', $request->username)->first();
        //pengecekan jika tidak ada back to login
        if ($users == null) {
            return redirect()->back()->with('error', 'username tidak ditemukan 🤦‍♂️');
        }
        //ambil password
        // echo $users->password;

        //generate db password hash
        $db_password = $users->password;
        $hased_password = Hash::check($request->password, $db_password);

        if ($hased_password) {
            //masukan token random
            $users->token = Str::random(20);
            $users->save();
            //simpan sesion user token
            $request->session()->put('token', $users->token);
            return to_route('dashboard_index');
        } else {
            return redirect()->back()->with('error', 'Maaf Data anda tidak cocok 😯');
        }
    }
    public function dashboard_logout(Request $request)
    {
        Users::where('token', $request->token)->update([
            'token' => null,
        ]);

        Session::pull('token');
        return to_route('login_form');
    }

    public function dashboard_index()
    {
        if (Session::has('token')) {
            // server akan memberikan data kalau ada token nya sesuai dengan yang ada di database tidak bisa multi device
            $users = Users::where('token', Session::get('token'))->first();
            $articles = Articles::get();

            return view('Dashboard.index', [
                'title' => 'Dashboard Admin',
                'users' => $users,
                'articles' => $articles,
            ]);
        } else {
            return redirect()->back();
        }
    }
    public function article_add_action(Request $request)
    {
        $request->validate([
            'title' => ['required', 'max:255', 'min:10'],
            'description' => ['required'],
            'tag' => ['nullable'],
        ]);
        $created = Articles::create([
            'title' => $request->title,
            'description' => $request->description,
            'tag' => $request->tag,
        ]);
        if ($created) {
            return redirect()->back()->with('message', 'Artikel berhasil di Ditambah');
        } else {
            return redirect()->back()->with('message', 'Artikel Gagal di Tambah');
        }
    }
    public function article_delete_action(Request $request)
    {
        Articles::find($request->id)->delete();
        return redirect()->back()->with('message', 'Artikel berhasil di hapus');
    }
    public function users_index()
    {
        if (Session::has('token')) {
            $users = Users::where('token', Session::get('token'))->first();
            return view('users.index', [
                'users' => $users,
                'user' => Users::all(),
            ]);
        } else {
            return redirect()->back();
        }
    }
    public function users_add_action(Request $request)
    {
        $created['password'] = Hash::make($request['password']);
        $request->validate([
            'username' => ['required'],
            'password' => ['required'],
            'token' => ['nullable'],
        ]);
        $created = Users::create([
            'username' => $request->username,
            'password' => $created['password'],
            'token' => $request->token,
        ]);
        // dd($created);
        if ($created) {
            return redirect()->back()->with('message', 'User berhasil di Ditambah');
        } else {
            return redirect()->back()->with('message', 'User Gagal di Tambah');
        }
    }
    public function users_edit()
    {
        // dd('SUkses edit');
        // return view('users.edit');
        if (Session::has('token')) {
            $users = Users::where('token', Session::get('token'))->first();
            return view('users.edit', [
                'users' => $users,
            ]);
        } else {
            return redirect()->back();
        }
    }
    public function users_edit_action(Request $request)
    {
        $request->validate([
            'username' => ['required'],
            'password' => ['required'],
            'token' => ['nullable'],
        ]);
        $updated = Users::where('id', $request->id)->update([
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'token' => $request->token,
        ]);
        if ($updated) {
            return redirect()->back()->with('message', 'User berhasil di Edit');
        } else {
            return redirect()->back()->with('message', 'User Gagal di Edit');
        }
    }
}
