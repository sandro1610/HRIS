<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>BUKIT ASAM KREATIF DEPARTEMEN SDM</title>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" href="{{ asset('images/Indomarco_bg.png') }}">
    <link rel="stylesheet" href="{{ asset('vendor/chartist/css/chartist.min.css') }}">
    <link href="{{ asset('vendor/owl-carousel/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
@yield('style')
</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="" class="brand-logo">
                <img class="logo-abbr" src="{{ asset('images/bak2.png') }}" alt="">
                <img class="logo-compact" src="{{ asset('images/bak2.png') }}" alt="">
                <img class="brand-title" src="{{ asset('images/bak1.png') }}" alt="">
            </a>

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span>
                    <span class="line"></span>
                    <span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->
        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                            <div class="dashboard_bar">
                                @yield('title')
                            </div>
                        </div>
                        <ul class="navbar-nav header-right">
                            <li class="nav-item dropdown header-profile">
                                <a class="nav-link" href="javascript:void(0)" role="button"
                                    data-toggle="dropdown">
                                    <img src="{{ asset('images/profile/17.jpg') }}" width="20" alt="" />
                                    <div class="header-info">
                                        <span class="text-black"><strong>{{ Auth::user()->name }}</strong></span>
                                        <p class="fs-12 mb-0">{{ Auth::user()->email }}</p>
                                    </div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="./app-profile.html" class="dropdown-item ai-icon">
                                        <svg id="icon-user1" xmlns="http://www.w3.org/2000/svg" class="text-primary"
                                            width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                            <circle cx="12" cy="7" r="4"></circle>
                                        </svg>
                                        <span class="ml-2">Profile </span>
                                    </a>

                                    <a href="{{ route('logout') }}"
                                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        <div class="dropdown-item ai-icon" aria-labelledby="navbarDropdown">
                                            <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg"
                                                class="text-danger" width="18" height="18" viewBox="0 0 24 24"
                                                fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round">
                                                <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                                <polyline points="16 17 21 12 16 7"></polyline>
                                                <line x1="21" y1="12" x2="9" y2="12"></line>
                                            </svg>
                                            <span class="ml-2">Logout</span>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                class="d-none">
                                                @csrf
                                            </form>
                                        </div>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="deznav">
            <div class="deznav-scroll">
                <ul class="metismenu" id="menu">
                    @if (Auth::user()->level == 1)
                    <li><a class="ai-icon" href="{{ url('admin/dashboard') }}" aria-expanded="false">
                            <i class="flaticon-381-controls-3"></i>
                            <span class="nav-text">Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('admin/karyawan') }}" class="ai-icon" aria-expanded="false">
                            <i class="flaticon-381-layer-1"></i>
                            <span class="nav-text">Karyawan</span>
                        </a>
                    </li>
                    <li><a href="{{ url('admin/absen') }}" class="ai-icon" aria-expanded="false">
                            <i class="flaticon-381-notepad"></i>
                            <span class="nav-text">Absen</span>
                        </a>
                    </li>
                    <li><a href="{{ url('admin/slip') }}" class="ai-icon" aria-expanded="false">
                        <i class="flaticon-381-network"></i>
                            <span class="nav-text">Cetak Slip Gaji</span>
                        </a>
                    </li>
                    @endif
                    @if (Auth::user()->level == 2)
                    <li><a class="ai-icon" href="{{ url('user/dashboard') }}" aria-expanded="false">
                        <i class="flaticon-381-controls-3"></i>
                        <span class="nav-text">Dashboard</span>
                    </a>
                    </li>
                    <li>
                        <a href="{{ url('user/karyawan') }}" class="ai-icon" aria-expanded="false">
                            <i class="flaticon-381-network"></i>
                            <span class="nav-text">Karyawan</span>
                        </a>
                    <li><a href="{{ url('user/slip') }}" class="ai-icon" aria-expanded="false">
                            <i class="flaticon-381-layer-1"></i>
                            <span class="nav-text">Gaji</span>
                        </a>
                    </li>
                    @endif
                    @if (Auth::user()->level == 3)
                    <li><a class="ai-icon" href="{{ url('manager/dashboard') }}" aria-expanded="false">
                        <i class="flaticon-381-controls-3"></i>
                        <span class="nav-text">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('manager/karyawan') }}" class="ai-icon" aria-expanded="false">
                        <i class="flaticon-381-network"></i>
                        <span class="nav-text">Karyawan</span>
                    </a>
                <li><a href="{{ url('manager/gaji') }}" class="ai-icon" aria-expanded="false">
                        <i class="flaticon-381-layer-1"></i>
                        <span class="nav-text">Gaji</span>
                    </a>
                </li>
                <li><a href="{{ url('manager/absen') }}" class="ai-icon" aria-expanded="false">
                        <i class="flaticon-381-notepad"></i>
                        <span class="nav-text">Absen</span>
                    </a>
                </li>
                    @endif
                    @if (Auth::user()->level == 4)
                    <li><a class="ai-icon" href="{{ url('supervisor/dashboard') }}" aria-expanded="false">
                        <i class="flaticon-381-controls-3"></i>
                        <span class="nav-text">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('supervisor/karyawan') }}" class="ai-icon" aria-expanded="false">
                        <i class="flaticon-381-network"></i>
                        <span class="nav-text">Karyawan</span>
                    </a>
                <li><a href="{{ url('supervisor/gaji') }}" class="ai-icon" aria-expanded="false">
                        <i class="flaticon-381-layer-1"></i>
                        <span class="nav-text">Gaji</span>
                    </a>
                </li>
                <li><a href="{{ url('supervisor/slip') }}" class="ai-icon" aria-expanded="false">
                    <i class="flaticon-381-network"></i>
                        <span class="nav-text">Cetak Slip Gaji</span>
                    </a>
                </li>
                    @endif
                </ul>
            </div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->
            <div class="container-fluid">
                <div class="row">
                    @yield('content')
                </div>
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->

    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    <script src="{{ asset('vendor\jquery\jquery.min.js')}}"></script>
    <script src="{{ asset('vendor/global/global.min.js') }}"></script>
    <script src="{{ asset('js/custom.min.js') }}"></script>
    <script src="{{ asset('js/deznav-init.js') }}"></script>
    @yield('script')
</body>

</html>