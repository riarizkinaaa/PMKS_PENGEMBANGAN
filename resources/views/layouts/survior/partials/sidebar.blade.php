<header class="main-nav">
    <div class="sidebar-user text-center">
        <a href="user-profile.html">
            <h6 class="mt-3 f-14 f-w-600 text-uppercase">{{ Auth::user()->username }}</h6>
        </a>
        @if(Auth::user()->id_role ==1)
        <p class="mb-0 font-roboto">Superadmin</p>
        @elseif (Auth::User()->id_role ==2)
        <p class="mb-0 font-roboto">Pimpinan</p>
        @elseif (Auth::User()->id_role ==3)
        <p class="mb-0 font-roboto">Verifikator</p>
        @elseif (Auth::User()->id_role ==4)
        <p class="mb-0 font-roboto">Pendata</p>
        @endif
    </div>
    <nav class="mt-3">
        <div class="main-navbar">
            <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
            <div id="mainnav">

                <ul class="nav-menu custom-scrollbar">
                    <li class="back-btn">
                        <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
                    </li>
                    <li class="dropdown">
                        <a class="nav-link link-nav menu-title {{routeActive('dashboard_survior')}}" href="{{route('dashboard_survior')}}"><i data-feather="home"></i><span>Dashboard</span></a>
                    </li>
                    <!-- <li class="sidebar-main-title">
                        <div>
                            <h6>Anak</h6>
                        </div>
                    </li> -->
                    <li class="dropdown">
                        <a class="nav-link link-nav menu-title {{routeActive('anak_pendata.index')}}" href="{{route('anak_pendata.index')}}"><i data-feather="user"></i><span>Data Anak</span></a>
                    </li>
                    <li class="dropdown">
                        <a class="nav-link link-nav menu-title {{routeActive('index')}}" href="{{route('kontak')}}"><i data-feather="phone-call"></i><span>Kontak</span></a>
                    </li>
                    <li class="dropdown">
                        <a class="nav-link link-nav menu-title  {{routeActive('data_survior.index')}}" href="{{route('data_survior.index')}}"><i data-feather="user"></i><span>Profile</span></a>
                    </li>
                </ul>
            </div>
            <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
        </div>
    </nav>
</header>