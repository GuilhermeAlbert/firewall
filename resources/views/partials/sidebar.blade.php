<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-fire"></i>
        </div>
        <div class="sidebar-brand-text mx-3">{{ __('sidebar.app_name') }}</div>
    </a>

    <hr class="sidebar-divider my-0">
    <hr class="sidebar-divider">
    <div class="sidebar-heading">
        {{ __('sidebar.system') }}
    </div>       

    <li class="nav-item">
        <a class="nav-link" href="{{ route('dashboard.listar') }}">
            <i class="fas fa-chart-bar"></i>
            <span>{{ __('sidebar.dashboard') }}</span>
        </a>
    </li>   

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseControle" aria-expanded="true" aria-controls="collapseControle">
            <i class="fas fa-file-invoice"></i>
            <span>{{ __('sidebar.report') }}</span>
        </a>
        <div id="collapseControle" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">{{ __('sidebar.control') }}</h6> 
                <a class="collapse-item" href="#">{{ __('sidebar.report_access') }}</a>
                <a class="collapse-item" href="#">{{ __('sidebar.report_deny') }}</a>
                <a class="collapse-item" href="#">{{ __('sidebar.report_allow') }}</a>
                <a class="collapse-item" href="#">{{ __('sidebar.report_devices') }}</a>
                <a class="collapse-item" href="#">{{ __('sidebar.report_group') }}</a>
            </div>
        </div>
    </li> 

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseGerenciamento" aria-expanded="true" aria-controls="collapseGerenciamento">
            <i class="fas fa-fw fa-folder"></i>
            <span>{{ __('sidebar.management') }}</span>
        </a>
        <div id="collapseGerenciamento" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">{{ __('sidebar.control') }}</h6>
                <a class="collapse-item" href="#">{{ __('sidebar.devices') }}</a>
                <a class="collapse-item" href="#">{{ __('sidebar.groups') }}</a>
            </div>
        </div>
    </li>  

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBloqueio" aria-expanded="true" aria-controls="collapseBloqueio">
            <i class="fas fa-eye-slash"></i>
            <span>{{ __('sidebar.websites_deny') }}</span>
        </a>
        <div id="collapseBloqueio" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">{{ __('sidebar.websites_deny') }}</h6>
                <a class="collapse-item" href="#">{{ __('sidebar.deny_by_mac') }}</a>
                <a class="collapse-item" href="#">{{ __('sidebar.deny_by_ip') }}</a>
                <a class="collapse-item" href="#">{{ __('sidebar.deny_by_keywords') }}</a>
            </div>
        </div>
    </li>  

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLiberacao" aria-expanded="true" aria-controls="collapseLiberacao">
            <i class="fas fa-eye"></i>
            <span>Liberação de sites</span>
        </a>
        <div id="collapseLiberacao" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">{{ __('sidebar.websites_allow') }}</h6>
                <a class="collapse-item" href="#">{{ __('sidebar.allow_by_mac') }}</a>
                <a class="collapse-item" href="#">{{ __('sidebar.allow_by_ip') }}</a>
                <a class="collapse-item" href="#">{{ __('sidebar.allow_by_keywords') }}</a>
            </div>
        </div>
    </li>   

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseMonitoramento" aria-expanded="true" aria-controls="collapseMonitoramento">
            <i class="fas fa-th-large"></i>
            <span>{{ __('sidebar.monitoring') }}</span>
        </a>
        <div id="collapseMonitoramento" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">{{ __('sidebar.monitoring') }}</h6>                       
                <a class="collapse-item" href="#">{{ __('sidebar.doors') }}</a>
                <a class="collapse-item" href="#">{{ __('sidebar.http') }}/{{ __('sidebar.https') }}</a>
            </div>
        </div>
    </li> 
                   
    <hr class="sidebar-divider my-0">
    <hr class="sidebar-divider">
    <div class="sidebar-heading">
        Manutenção
    </div>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('usuarios.listar') }}">
            <i class="fas fa-user"></i>
            <span>{{ __('sidebar.users') }}</span>
        </a>
    </li> 

    <li class="nav-item">
        <a class="nav-link" href="{{ route('permissoes.listar') }}">
            <i class="fas fa-shield-alt"></i>
            <span>{{ __('sidebar.permission') }}</span>
        </a>
    </li>     

    <hr class="sidebar-divider my-0">
    <hr class="sidebar-divider d-none d-md-block">

    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>