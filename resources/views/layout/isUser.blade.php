<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Dashboard for ShoSo Marketplace" />
    <meta name="author" content="Rachma | @rachmadzii" />

    <title>Dashboard</title>

    <link rel="stylesheet" href="{{ asset('./css/styles.css') }}" />
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous" />
    <script src="https://kit.fontawesome.com/32f82e1dca.js" crossorigin="anonymous"></script>
</head>

<body>
    <aside class="sidebar offcanvas-lg offcanvas-start">
        <div class="d-flex justify-content-end m-4 d-block d-lg-none">
            <button data-bs-dismiss="offcanvas" data-bs-target=".sidebar" class="btn p-0 border-0 fs-4"
                aria-label="Button Close">
                <i class="fas fa-close"></i>
            </button>
        </div>
        <div class="logo-brand mt-lg-5">
            <img src="{{ asset('assets/images/logo.png') }}" alt="Logo Shoso" width="52" height="50" />
            <div>
                <h6 class="title-store">Admin Page</h6>
                <p class="tagline-store">Comfortable on the feet</p>
            </div>
        </div>
        <hr />
        <nav class="menu flex-fill">
            <div class="section-menu">
                <a href="/dashboard" class="item-menu active" onclick="handleClickMenu(this)">
                    <svg fill="currentColor">
                        <path
                            d="M6 2.5C3.79086 2.5 2 4.29086 2 6.5V10.5C2 11.6046 2.89543 12.5 4 12.5H5.5C6.32843 12.5 7 11.8284 7 11V10.5C7 9.94772 7.44772 9.5 8 9.5C8.55228 9.5 9 9.94772 9 10.5V10.8333C9 11.7538 9.74619 12.5 10.6667 12.5H12.3333C13.2538 12.5 14 11.7538 14 10.8333V10.5C14 9.94772 14.4477 9.5 15 9.5C15.5523 9.5 16 9.94772 16 10.5V11C16 11.8284 16.6716 12.5 17.5 12.5H19C20.1046 12.5 21 11.6046 21 10.5V6.5C21 4.29086 19.2091 2.5 17 2.5H6ZM3 14.75C3.41421 14.75 3.75 15.0858 3.75 15.5V18.5C3.75 20.2949 5.20507 21.75 7 21.75H16C17.7949 21.75 19.25 20.2949 19.25 18.5V15.5C19.25 15.0858 19.5858 14.75 20 14.75C20.4142 14.75 20.75 15.0858 20.75 15.5V18.5C20.75 21.1234 18.6234 23.25 16 23.25H7C4.37665 23.25 2.25 21.1234 2.25 18.5V15.5C2.25 15.0858 2.58579 14.75 3 14.75ZM9 16.75C9 16.3358 9.33579 16 9.75 16H13.25C13.6642 16 14 16.3358 14 16.75C14 17.1642 13.6642 17.5 13.25 17.5H9.75C9.33579 17.5 9 17.1642 9 16.75Z"
                            fill="currentColor" />
                    </svg>
                    <p>Dashboard</p>
                </a>
                <a href="/users" class="item-menu" onclick="handleClickMenu(this)">
                    <i class="nav-icon fas fa-chart-bar"></i>
                    <p class="flex-fill">Data Users</p>
                </a>
            </div>

        </nav>
        <footer>
            <div class="d-flex gap-3 align-items-center mb-4">
                <img src="{{ asset('assets/icons/ic_mode.svg') }}" alt="Mode Display" />
                <p id="label-mode" class="flex-fill label-mode">Light Mode</p>
                <div>
                    <input id="checkbox" type="checkbox" class="toggle-theme" aria-label="Toggle Theme" />
                    <label for="checkbox" class="label-toggle">
                        <img src="{{ asset('assets/icons/ic_moon.svg') }}" width="50%" class="ic-theme"
                            id="ic-dark" alt="Icon Dark" />
                        <img src="{{ asset('assets/icons/ic_sun.svg') }}" width="50%" class="ic-theme" id="ic-light"
                            alt="Icon Light" />
                    </label>
                </div>
            </div>
            <p>©2022 Admin</p>
        </footer>
    </aside>

    <main class="content flex-fill">
        <section>
            <button aria-controls="sidebar" data-bs-toggle="offcanvas" data-bs-target=".sidebar"
                aria-label="Button Hamburger" class="sidebarOffcanvas mb-5 btn p-0 border-0 d-flex d-lg-none">
                <i class="fa-solid fa-bars"></i>
            </button>
            <nav class="nav-content gap-5">
                <div class="d-flex gap-3 align-items-center">
                    <img src="{{ asset('assets/images/photo.webp') }}" alt="Photo Profile" class="photo-profile" />
                    <div>
                        <p class="title-content mb-2">Welcome Back, {{ $users->username }} </p>

                        <p class="subtitle-content">

                        <form action="{{ route('dashboard_logout') }}" method="POST">
                            @csrf
                            <input type="hidden" name="token" value="{{ $users->token }}" />
                            <button type="submit" class="btn btn-primary btn-sm" class="form-control"> <i
                                    class="nav-icon fa-solid fa-arrow-right-from-bracket"></i> Sign Out</button>
                        </form>
                        </p>
                    </div>
                </div>

            </nav>
        </section>


        @yield('content')


    </main>

    <script src="{{ asset('js/index.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
    <!-- jQuery -->
    <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="{{ asset('plugins/jquery-ui/jquery-ui.min.js') }}"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- ChartJS -->
    <script src="{{ asset('plugins/chart.js/Chart.min.js') }}"></script>
    <!-- Sparkline -->
    <script src="{{ asset('plugins/sparklines/sparkline.js') }}"></script>
    <!-- JQVMap -->
    <script src="{{ asset('plugins/jqvmap/jquery.vmap.min.js') }}"></script>
    <script src="{{ asset('plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
    <!-- jQuery Knob Chart -->
    <script src="{{ asset('plugins/jquery-knob/jquery.knob.min.js') }}"></script>
    <!-- daterangepicker -->
    <script src="{{ asset('plugins/moment/moment.min.js') }}"></script>
    <script src="{{ asset('plugins/daterangepicker/daterangepicker.js') }}"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="{{ asset('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
    <!-- Summernote -->
    <script src="{{ asset('plugins/summernote/summernote-bs4.min.js') }}"></script>
    <!-- overlayScrollbars -->
    <script src="{{ asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('dist/js/adminlte.js') }}"></script>
    <!-- AdminLTE for demo purposes -->
    {{-- <script src="{{ asset('dist/js/demo.js') }}"></script> --}}
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="{{ asset('dist/js/pages/dashboard.js') }}"></script>
</body>

</html>
