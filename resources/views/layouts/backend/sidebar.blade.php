<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="{{ url('/home') }}" class="brand-link">
        <img src="{{ asset('/backend/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image    elevation-3"
        style="opacity: .8">
        <span class="brand-text font-weight-light">Accounts</span>
    </a>

    <?php $currentUser = Auth::user();?>
    <!-- Sidebar -->
    <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <!--img src="{ { $currentUser->gravatar() } }" class="img-circle elevation-2" alt="{{ $currentUser->name }}"-->
            </div>
            <div class="info">
                <a href="#" class="d-block">{{ $currentUser->name }}</a>
            </div>
        </div>

        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="/home" class="nav-link">
                        <i class="nav-icon fa fa-dashboard"></i>
                        <p>Dashboard</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="/users" class="nav-link">
                        <i class="nav-icon fa fa-user"></i>
                        <p>Usuarios</p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>