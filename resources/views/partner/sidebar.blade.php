<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="{{asset('gambar/logo.png')}}" alt="MyRealEstate Logo" class="brand-image elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">v.1.0</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

        <!-- Sidebar Menu -->
        <nav class="mt-5">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                <li class="nav-item">
                    <a href="{{url('/beranda')}}" class="nav-link <?= ($nav == 'beranda') ? 'active' : ''; ?> ">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard

                        </p>
                    </a>
                    <!--  -->
                <li class="nav-item">
                    <a href="{{url('/unit')}}" class="nav-link <?= ($nav == 'unit') ? 'active' : ''; ?>">
                        <i class="nav-icon fas fa-bullhorn"></i>
                        <p>
                            Unit Rumah
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{url('/inbox')}}" class="nav-link <?= ($nav == 'inbox') ? 'active' : ''; ?>">
                        <i class="nav-icon fas fa-envelope"></i>
                        <p>
                            Inbox
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{url('/setting')}}" class="nav-link <?= ($nav == 'setting') ? 'active' : ''; ?>">
                        <i class="nav-icon fas fa-cog"></i>
                        <p>
                            Setting
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>