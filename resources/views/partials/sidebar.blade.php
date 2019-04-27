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
        Sistema
    </div>       

    <li class="nav-item">
        <a class="nav-link" href="{{ route('dashboard.listar') }}">
            <i class="fas fa-chart-bar"></i>
            <span>Dashboard</span>
        </a>
    </li>   

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseControle" aria-expanded="true" aria-controls="collapseControle">
            <i class="fas fa-file-invoice"></i>
            <span>Relatórios</span>
        </a>
        <div id="collapseControle" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Controle</h6> 
                <a class="collapse-item" href="#">Relatório de acessos</a>
                <a class="collapse-item" href="#">Relatório de bloqueio</a>
                <a class="collapse-item" href="#">Relatório de liberação</a>
                <a class="collapse-item" href="#">Relatório de dispositivos</a>
                <a class="collapse-item" href="#">Relatório de grupos</a>
            </div>
        </div>
    </li> 

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseGerenciamento" aria-expanded="true" aria-controls="collapseGerenciamento">
            <i class="fas fa-fw fa-folder"></i>
            <span>Gerenciamento</span>
        </a>
        <div id="collapseGerenciamento" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Gerenciamento</h6>
                <a class="collapse-item" href="#">Dispositivos</a>
                <a class="collapse-item" href="#">Grupos</a>
            </div>
        </div>
    </li>  

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBloqueio" aria-expanded="true" aria-controls="collapseBloqueio">
            <i class="fas fa-eye-slash"></i>
            <span>Bloqueio de sites</span>
        </a>
        <div id="collapseBloqueio" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Bloqueio de sites</h6>
                <a class="collapse-item" href="#">Endereço MAC</a>
                <a class="collapse-item" href="#">Endereço IP</a>
                <a class="collapse-item" href="#">Palavras-chave</a>
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
                <h6 class="collapse-header">Liberação de sites</h6>
                <a class="collapse-item" href="#">Endereço MAC</a>
                <a class="collapse-item" href="#">Endereço IP</a>
                <a class="collapse-item" href="#">Palavras-chave</a>
            </div>
        </div>
    </li>   

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseMonitoramento" aria-expanded="true" aria-controls="collapseMonitoramento">
            <i class="fas fa-th-large"></i>
            <span>Monitoramento</span>
        </a>
        <div id="collapseMonitoramento" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Monitoramento</h6>                       
                <a class="collapse-item" href="#">Portas</a>
                <a class="collapse-item" href="#">HTTP/HTTPS</a>
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