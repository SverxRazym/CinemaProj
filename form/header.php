<nav class="navbar navbar-light navbar-expand-md bg-light sticky-top">
    <header class="container-fluid">
        <a href="#" class="navbar-brand col-lg-4 col-md-6 col-6">
            <img src="https://vectr.com/tmp/b7p8bY6tXu/bL0iOs3XU.svg?width=359&height=132.93&select=bL0iOs3XUpage0"
                 alt="logo" class="col-lg-5 col-md-6  col-12">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto justify-content-end">
                <li class="nav-item">
                    <a href="/CinemaProj/index.php" class="nav-link">Главная</a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link">О сервисе</a>
                </li>
                <li class="nav-item" id="Vxod">
                    <?php if(!isset($_SESSION["login"])){ ?>
                    <button type="button" class="btn nav-link btn-light btn-Border" data-toggle="modal" data-target="#modalSignIn">Войти</button>
                    <?php } else{?>
                    <button type="button" class="nav-link btn btn-light btn-Border" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-offset="10,20">
                       dsa
                    </button>
                    <div id="drop" class="dropdown-menu dropdown-menu-right">
                        <button class="dropdown-item" type="button">Создать старинцу</button>
                        <button class="dropdown-item" type="button" id="exitOnThis">Выход</button>
                    </div>
                    <?php }?>
                </li>
            </ul>
        </div>

    </header>
</nav>



