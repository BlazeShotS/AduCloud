<div>
    <!-- Favicon Icon -->
    <link rel="icon" href="assets/img/favicon.png">
    <link rel="stylesheet" href="{{ asset('css/inicio.css') }}"> <!--ese asset sirve para cargar archivos estaticos que estan dentro del public-->
    <script></script>

    <header class="main-header">
        <div class="header-content">
            <div class="logo">
                <a href="{{ route('inicio') }}" class="logo-link">
                    <div class="logo-icon-container">
                        <img src="{{ asset('img/LogoAduCloud.png') }}" alt="AduCloud Logo">
                    </div>
                    <span class="logo-text-adu">Adu</span><span class="logo-text-cloud">Cloud</span>
                </a>
            </div>

            <nav class="main-nav" id="main-nav">
                <ul class="nav-list">
                    <li class="nav-item"><a href="{{ route('inicio') }}" class="nav-link">INICIO </a></li>
                    <li class="nav-item"><a href="{{ route('acerca') }}" class="nav-link">ACERCA DE </a></li>
                    <li class="nav-item"><a href="#" class="nav-link">SERVICIOS </a></li>
                    <li class="nav-item"><a href="#" class="nav-link">DEMO </a></li>
                    <li class="nav-item"><a href="#" class="nav-link">CONTACTANOS </a></li>
                </ul>
            </nav>

            <!--Barra lateral lateral-->
            <div class="menu-toggle" id="menu-toggle">
                <div class="menu-icon">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                </div>
            </div>
        </div>
    </header>

    <!--PARA LA BARRA LATERAL--->
    <div class="contact-sidebar" id="contact-sidebar">
        <div class="sidebar-content">
            <button class="close-btn" id="close-sidebar-btn">&times;</button>

            <h2 class="sidebar-title">¿Tienes un proyecto en mente?</h2>
            <p class="sidebar-subtitle">Mantente conectado con nosotros.</p>

            <h3 class="contact-heading">Contacta con AduCloud</h3>
            <ul class="contact-list">
                <li><span class="icon-map">📍</span> 50 Wall Street Suite, 44150 Ohio, United States</li>
                <li><span class="icon-phone">📞</span> +44 454 7800 112</li>
                <li><span class="icon-mail">📧</span> info@aducloud.com</li>
            </ul>

            <div class="subscribe-form">
                <input type="email" placeholder="ejemplo@gmail.com">
                <button class="send-btn" type="submit">Enviar</button>
            </div>

            <div class="social-links">
                <a href="#" class="social-icon">in</a>
                <a href="#" class="social-icon">tw</a>
                <a href="#" class="social-icon">yt</a>
            </div>
        </div>
    </div>

    <body>
        <div class="container">
            {{ $slot }}
        </div>
    </body>

    <script src="{{ asset('js/barraLateral.js') }}"></script>

    <footer>

    </footer>

</div>
