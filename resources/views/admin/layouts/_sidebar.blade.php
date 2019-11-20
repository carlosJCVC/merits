<div class="sidebar">
    <nav class="sidebar-nav">
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link active" href="{{ route('admin.dashboard') }}"><i class="icon-speedometer"></i> Escritorio</a>
            </li>
            <li class="nav-title">
                {{ Auth::user()->name }}
            </li>
            <li class="nav-item nav-dropdown">
                <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-people"></i> Acceso</a>
                <ul class="nav-dropdown-items">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.users.index') }}"><i class="icon-user"></i> Usuarios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.roles.index') }}"><i class="icon-user-following"></i> Roles</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item nav-dropdown">
                <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-pie-chart"></i> Convocatorias</a>
                <ul class="nav-dropdown-items">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.announcements.index') }}"><i class="icon-chart"></i> Lista</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.announcements.create') }}"><i class="icon-chart"></i> Nuevo</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item nav-dropdown">
                <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-pie-chart"></i> Postulantes</a>
                <ul class="nav-dropdown-items">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.postulants.index') }}"><i class="icon-chart"></i> Lista</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.postulants.create') }}"><i class="icon-chart"></i> Nuevo</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item nav-dropdown">
                <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-pie-chart"></i> Areas</a>
                <ul class="nav-dropdown-items">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.areas.index') }}"><i class="icon-chart"></i> Lista</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.areas.create') }}"><i class="icon-chart"></i> Nuevo</a>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>
    <button class="sidebar-minimizer brand-minimizer" type="button"></button>
</div>
