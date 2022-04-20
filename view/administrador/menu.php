<nav class="navbar navbar-top navbar-expand-lg orange-background">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse ml-3" id="navbarSupportedContent">
        <ul class="navbar-nav ml-md-auto">
            <li class="nav-item">
                <a href="dashboard.php" class="nav-link text-white mr-4"><i class="fas fa-home"></i> Volver a inicio</a>
            </li>
            <li class="nav-item ml-sm-3">
                <a href="?globalUsers" class="nav-link text-white mr-4"><i class="fas fa-search"></i> Buscador</a>
            </li>
            <li class="nav-item ml-sm-3">
                <a href="?schools" class="nav-link text-white mr-4"><i class="fas fa-school"></i> Gestión de Instituciones</a>
            </li>
            <!-- 
                <li class="nav-item ml-sm-3">
                <a href="dashboard.php?userManage" class="nav-link text-white"><i class="fas fa-users-cog"></i> Gestión de Usuarios</a>
            </li>
            -->
            <li class="nav-item ml-sm-3">
                <a href="dashboard.php?createFAQ" class="nav-link text-white"><i class="fas fa-question-circle"></i> Preguntas Frecuentes</a>
            </li>
            <li class="nav-item mr-3 dropdown">
                <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="media align-items-center">
                        <div class="media-body ml-2 text-white">
                            <span class="mb-0 font-weight-bold"><i class="fas fa-chevron-down"></i>
                                Acciones</span>
                        </div>
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                    <div class="dropdown-header noti-title">
                        <h6 class="text-overflow m-0">¿Que deseas hacer?</h6>
                    </div>
                    <div class="dropdown-divider"></div>
                    <a href="dashboard.php?settings" class="dropdown-item">
                        <i class="fas fa-cogs"></i>
                        <span>Configuración</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="../../controller/logout.php?logout" class="dropdown-item">
                        <i class="fas fa-sign-out-alt"></i>
                        <span>Cerrar sesión</span>
                    </a>
                </div>
            </li>
        </ul>

    </div>
</nav>