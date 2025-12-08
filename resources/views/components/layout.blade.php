<div>
    <!-- Favicon Icon -->
    <link rel="icon" href="assets/img/favicon.png">
    <link rel="stylesheet" href="{{ ('css/inicio.css') }}">

    <header class="main-header">
        <div class="logo">
            <a href="#" class="logo-link">
                <div class="logo-icon-container">
                    <img src="img/LogoAduCloud.png" alt="AduCloud Logo">
                </div>
                <span class="logo-text-adu">Adu</span><span class="logo-text-cloud">Cloud</span>
            </a>
        </div>

        <nav class="main-nav" id="main-nav">
            <ul class="nav-list">
                <li class="nav-item"><a href="{{url ('/')}}" class="nav-link">INICIO </a></li>
                <li class="nav-item"><a href="{{url ('/acerca-de')}}" class="nav-link">ACERCA DE </a></li>
                <li class="nav-item"><a href="#" class="nav-link">SERVICIOS </a></li>
                <li class="nav-item"><a href="#" class="nav-link">PORTFOLIO </a></li>
                <li class="nav-item"><a href="#" class="nav-link">CONTACTANOS </a></li>
                <li class="nav-item"><a href="#" class="nav-link">SHOP </a></li>
                <li class="nav-item"><a href="#" class="nav-link">PAGES </a></li>
            </ul>
        </nav>

        <div class="menu-toggle" id="menu-toggle">
            <div class="menu-icon">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
        </div>
    </header>

    <div class="container">
        {{ $slot }}
    </div>

    <footer>

    </footer>

</div>
