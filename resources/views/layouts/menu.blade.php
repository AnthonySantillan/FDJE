<li class="side-menus {{ Request::is('*') ? 'active' : '' }}">
    <a class="nav-link" href="/">
        <i class=" fas fa-building"></i><span>Dashboard</span>
    </a>
    @can('ver-user')
    <a class="nav-link" href="/users">
        <i class=" fas fa-users"></i><span>Usuarios</span>
    </a>
    @endcan
    @can('ver-rol')
    <a class="nav-link" href="/roles">
        <i class=" fas fa-user-lock"></i><span>Roles</span>
    </a>
    @endcan
    @can('ver-paper')
    <a class="nav-link" href="/papers">
        <i class=" fas fa-newspaper"></i><span>Hojas</span>
    </a>
    @endcan

</li>