document.addEventListener('DOMContentLoaded', function () {
            const menuToggle = document.getElementById('menu-toggle');
            const mainNav = document.getElementById('main-nav');
            const contactSidebar = document.getElementById('contact-sidebar');
            const closeBtn = document.getElementById('close-sidebar-btn');

            // 1. Controlar la barra lateral de contacto (Hamburguesa)
            menuToggle.addEventListener('click', function() {
                contactSidebar.classList.toggle('active');

                // Opcional: Ocultar el menú de navegación principal en móvil si está abierto
                if (window.innerWidth <= 900) {
                     mainNav.classList.remove('active');
                }
            });

            // 2. Controlar el botón de cerrar la barra lateral
            closeBtn.addEventListener('click', function() {
                contactSidebar.classList.remove('active');
            });

            // 3. Controlar la navegación principal (solo para el menú móvil clásico, si lo usas)
            // Ya que el menu-toggle ahora abre la sidebar de contacto, la navegación
            // principal solo se controlaría si usaras un toggle distinto para móvil.

            // Si el menú-toggle en móvil también debe abrir la navegación:
            // if (window.innerWidth <= 900) {
            //      menuToggle.addEventListener('click', function() {
            //          mainNav.classList.toggle('active');
            //      });
            // }

        });
