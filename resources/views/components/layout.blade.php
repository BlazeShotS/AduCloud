<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('img/LogoAduCloud.png') }}">
    <!-- Estilos -->
    <link rel="stylesheet" href="{{ asset('css/layout.css') }}">
    <link rel="stylesheet" href="{{ asset('css/inicio.css') }}">
     <!-- Fuentes y Tailwind -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/lucide@latest"></script>

</head>

<body class="bg-gradient-tech" >

    <!-- HEADER -->
    <header class="main-header">
        <div class="header-content">
            <div class="logo">
                <a href="{{ route('inicio') }}" class="logo-link">
                    <div class="logo-icon-container">
                        <img src="{{ asset('img/LogoAduCloud.png') }}" alt="AduCloud Logo">
                    </div>
                    <span class="logo-text-adu">Adu</span>
                    <span class="logo-text-cloud">Cloud</span>
                </a>
            </div>

            <nav class="main-nav" id="main-nav">
                <ul class="nav-list">
                    <li class="nav-item"><a href="{{ route('inicio') }}" class="nav-link">INICIO</a></li>
                    <li class="nav-item"><a href="{{ route('acerca') }}" class="nav-link">ACERCA DE</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">NUESTRO EQUIPO</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">SERVICIOS</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">CONTACTANOS</a></li>
                </ul>
            </nav>

            <!-- Botón menú hamburguesa -->
            <div class="menu-toggle" id="menu-toggle">
                <div class="menu-icon">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                </div>
            </div>
        </div>
    </header>



    <!-- CONTENIDO DE CADA PÁGINA -->
    <div>
        {{ $slot }} <!--slot es una palabra clave , que hace que dentro de aca este las paginas-->
    </div>

    <script src="{{ asset('js/barraLateral.js') }}"></script>

    <!-- FOOTER -->
    <footer class="main-footer">
        <p>&copy; 2026 ADUCLOUD Tech Solutions. Todos los derechos reservados.</p>
    </footer>

     <script>
        lucide.createIcons();
    </script>

</body>

</html>
