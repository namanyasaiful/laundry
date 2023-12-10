<link rel="stylesheet" href="{{ asset('template/assets/modules/bootstrap/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('template/assets/modules/fontawesome/css/all.min.css') }}">
<link rel="stylesheet" href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css')}}">

<!-- CSS Libraries -->
<link rel="stylesheet" href="{{ asset('template/assets/modules/jqvmap/dist/jqvmap.min.css') }}">
<link rel="stylesheet" href="{{ asset('template/assets/modules/summernote/summernote-bs4.css') }}">
<link rel="stylesheet" href="{{ asset('template/assets/modules/owlcarousel2/dist/assets/owl.carousel.min.css') }}">
<link rel="stylesheet" href="{{ asset('template/assets/modules/owlcarousel2/dist/assets/owl.theme.default.min.css') }}">

<!-- Template CSS -->
<link rel="stylesheet" href="{{ asset('template/assets/css/style.min.css') }}">
<link rel="stylesheet" href="{{ asset('template/assets/css/components.min.css') }}">
@stack('css')

<div class="main-sidebar sidebar-style-3">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a>Washly.co</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="">WL</a>
        </div>
        <ul class="sidebar-menu">
            @can('Admin')
            <a href="{{route('dashboard')}}" type="submit" class="btn btn-success btn-lg btn-block btn-icon-split" style="align-content: center; font-size: 16px;">
                <i class="fas fa-home"></i>
                Dashboard
            </a>
            <li class="menu-header">User</li>
            <li class="has-dropdown dropdown">
                <a class="has-dropdown"><i class="fa fa-user"></i><span>Menu User</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="/user/create">Create User</a></li>
                    <li><a class="nav-link" href="/user">Data User</a></li>
                </ul>
            </li>
            <li class="has-dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fa fa-shipping-fast"></i><span>Menu Paket</span></a>
                <ul class="dropdown-menu">
                    <li ><a href="/paket/create">Create Paket</a></li>
                    <li><a href="/paket">Data Paket</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fa fa-city"></i><span>Outlet</span></a>
                <ul class="dropdown-menu">
                    <li ><a href="/outlet/create">Outlet</a></li>
                    <li><a class="nav-link" href="/outlet">Data Outlet</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fa fa-users" ></i><span>Menu Member</span></a>
                <ul class="dropdown-menu">
                    <li ><a href="/member/create">Create Member</a></li>
                    <li><a href="/member">Data Member</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fa fa-cart-plus" style="font-size: 18px"></i><span>Transaksi</span></a>
                <ul class="dropdown-menu">
                    <li ><a href="/transaksi/create">Transaksi</a></li>
                    <li><a class="nav-link" href="/transaksi">Data Transaksi</a></li>
                </ul>
            </li>
            <br><br><br><br>
            <li class="nav-item">
                <form action="{{ route('auth.logout') }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-danger btn-lg btn-block btn-icon-split" style="align-content: center; font-size: 16px;">
                    <i class="fas fa-rocket"></i>
                    Logout
                </button>
                </form>
            </li>
            @endcan

            @can('Kasir')
            <ul class="sidebar-menu">
                <a href="{{route('dashboard')}}" type="submit" class="btn btn-success btn-lg btn-block btn-icon-split" style="align-content: center; font-size: 16px;">
                    <i class="fas fa-home"></i>
                    Dashboard
                </a>
                <br>
                <li class="dropdown">
                    <a href="#" class="nav-link has-dropdown"><i class="fa fa-cart-plus" style="font-size: 18px"></i><span>Transaksi</span></a>
                    <ul class="dropdown-menu">
                        <li ><a href="/transaksi/create">Transaksi</a></li>
                        <li><a class="nav-link" href="/transaksi">Data Transaksi</a></li>
                    </ul>
                </li>
                <br><br><br><br>
                <li class="nav-item">
                    <form action="{{ route('auth.logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-danger btn-lg btn-block btn-icon-split" style="align-content: center; font-size: 16px;">
                        <i class="fas fa-rocket"></i>
                        Logout
                    </button>
                    </form>
                </li>
                @endcan
            </ul>

            @can('Owner')
            <ul class="sidebar-menu">
                <a href="{{route('dashboard')}}" type="submit" class="btn btn-success btn-lg btn-block btn-icon-split" style="align-content: center; font-size: 16px;">
                    <i class="fas fa-home"></i>
                    Dashboard
                </a>
                <li class="dropdown">
                    <a href="#" class="nav-link has-dropdown"><i class="fa fa-cart-plus" style="font-size: 18px"></i><span>Transaksi</span></a>
                    <ul class="dropdown-menu">
                        <li><a class="nav-link" href="/transaksi">Data Transaksi</a></li>
                    </ul>
                </li>
                <br><br><br><br>
                <li class="nav-item">
                    <form action="{{ route('auth.logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-danger btn-lg btn-block btn-icon-split" style="align-content: center; font-size: 16px;">
                        <i class="fas fa-rocket"></i>
                        Logout
                    </button>
                    </form>
                </li>
            </ul>
            @endcan
        </ul>
        </aside>
</div>



<script src="{{ asset('template/assets/bundles/lib.vendor.bundle.js') }}"></script>
<script src="{{ asset('template/js/CodiePie.js') }}"></script>

<!-- JS Libraies -->
<script src="{{ asset('template/assets/modules/jquery.sparkline.min.js') }}"></script>
<script src="{{ asset('template/assets/modules/chart.min.js') }}"></script>
<script src="{{ asset('template/assets/modules/owlcarousel2/dist/owl.carousel.min.js') }}"></script>
<script src="{{ asset('template/assets/modules/summernote/summernote-bs4.js') }}"></script>
<script src="{{ asset('template/assets/modules/chocolat/dist/js/jquery.chocolat.min.js') }}"></script>

<!-- Page Specific JS File -->
<script src="{{ asset('template/js/page/index.js') }}"></script>

<!-- Template JS File -->
<script src="{{ asset('template/js/scripts.js') }}"></script>
<script src="{{ asset('template/js/custom.js') }}"></script>
@stack('script')