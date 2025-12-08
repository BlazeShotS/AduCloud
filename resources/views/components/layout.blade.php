<div>
    <!-- Favicon Icon -->
    <link rel="icon" href="assets/img/favicon.png">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <header class="main-header">
        <div class="logo">
            <a href="#" class="logo-link">AduCloud</a>
        </div>

        <nav class="main-nav">
            <ul class="nav-list">
                <li class="nav-item"><a href="#" class="nav-link">HOME <span class="dropdown-arrow"></span></a></li>
                <li class="nav-item"><a href="#" class="nav-link">ABOUT <span class="dropdown-arrow"></span></a></li>
                <li class="nav-item"><a href="#" class="nav-link">SERVICES <span class="dropdown-arrow"></span></a></li>
                <li class="nav-item"><a href="#" class="nav-link">PORTFOLIO <span class="dropdown-arrow"></span></a></li>
                <li class="nav-item"><a href="#" class="nav-link">BLOG <span class="dropdown-arrow"></span></a></li>
                <li class="nav-item"><a href="#" class="nav-link">SHOP <span class="dropdown-arrow"></span></a></li>
                <li class="nav-item"><a href="#" class="nav-link">PAGES <span class="dropdown-arrow"></span></a></li>
            </ul>
        </nav>

        <div class="menu-toggle">
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
