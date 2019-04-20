
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-fire"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Firewall</div>
    </a>

    <hr class="sidebar-divider my-0">
    <hr class="sidebar-divider">
    <div class="sidebar-heading">
        Controle
    </div>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('dashboard.listar') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
    </li>   

    <li class="nav-item">
        <a class="nav-link" href="{{ route('relatorios.listar') }}">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Relatórios</span>
        </a>
    </li>  

    <hr class="sidebar-divider my-0">
    <hr class="sidebar-divider">
    <div class="sidebar-heading">
        Sistema
    </div>       

    <li class="nav-item">
        <a class="nav-link" href="{{ route('firewall.listar') }}">
            <i class="fas fa-fire"></i>
            <span>Firewall</span>
        </a>
    </li> 

    <hr class="sidebar-divider my-0">
    <hr class="sidebar-divider">
    <div class="sidebar-heading">
        Manutenção
    </div>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('usuarios.listar') }}">
            <i class="fas fa-user"></i>
            <span>Usuários</span>
        </a>
    </li> 

    <li class="nav-item">
        <a class="nav-link" href="{{ route('permissoes.listar') }}">
            <i class="fas fa-shield-alt"></i>
            <span>Permissões</span>
        </a>
    </li>     

    <hr class="sidebar-divider my-0">
    <hr class="sidebar-divider d-none d-md-block">

    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>