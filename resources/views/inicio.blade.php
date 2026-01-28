<x-layout>
    <section class="relative h-screen flex items-center justify-center hero-image">

        <!-- VIDEO DE FONDO -->
        <video
            class="absolute inset-0 w-full h-full object-cover"
            autoplay
            muted
            loop
            playsinline>
            <source src="/img/video.mp4" type="video/mp4">
        </video>

        <!-- OVERLAY OSCURO -->
        <div class="absolute inset-0 bg-black/75"></div>

        <!-- CONTENIDO -->
        <div class="relative z-10 text-center px-4 max-w-4xl">
            <h1 class="text-5xl md:text-7xl font-extrabold mb-6 tracking-tight">
                Impulsamos tu <span class="text-accent">Futuro Digital</span>
            </h1>
            <p class="text-xl text-gray-300 mb-8 max-w-2xl mx-auto">
                Desarrollo de aplicaciones, despliegue escalable y consultoría estratégica de datos para empresas que no se detienen.
            </p>
            <div class="flex flex-col md:flex-row gap-4 justify-center">
                <a href="#servicios" class="btn-primary">Ver Soluciones</a>
                <a href="#contacto"
                    class="border border-accent text-accent px-6 py-3 rounded-lg font-bold hover:bg-accent/10 transition">
                    Hablar con un experto
                </a>
            </div>
        </div>
    </section>


    <section class="section about">
        <div class="about-container">

            <div class="about-text">
                <h2 class="section-title">Acerca de Nosotros</h2>
                <p class="section-text">
                    Somos una empresa especializada en soluciones digitales modernas,
                    enfocadas en innovación, calidad y resultados. Creamos tecnología que
                    impulsa el crecimiento de negocios en un entorno digital competitivo.
                </p>
            </div>

            <div class="about-image">
                <img src="https://img.freepik.com/foto-gratis/hombre-tiro-medio-gafas-vr_23-2149126949.jpg?semt=ais_hybrid&w=740&q=80" alt="Tecnología e innovación">
            </div>

        </div>
    </section>


    <section class="section team">
        <div class="team-container">

            <div class="team-image">
                <img src="{{ asset('img/Equipo.webp') }}"
                    alt="Tecnología e innovación">
            </div>

            <div class="team-text">
                <h2 class="section-title">Nuestro Equipo</h2>
                <p class="section-text">
                    Nuestro equipo está altamente capacitado en el desarrollo de aplicaciones web modernas,
                    consultoría tecnológica y diseño de arquitecturas en la nube. Contamos con especialistas
                    en programación full stack y servicios cloud, enfocados en brindar soluciones eficientes,
                    escalables y alineadas a los objetivos de cada negocio.
                </p>
            </div>

        </div>
    </section>

    <!-- SERVICIOS -->
    <section class="section bg-servicios" id="servicios">
        <div class="text-center mb-16">
            <h2 class="section-title inline-block">Servicios Especializados</h2>
            <p class="text-white mt-4 opacity-80">Soluciones de alto impacto tecnológico.</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="service-card">
                <i data-lucide="layout" class="mx-auto mb-4 text-accent w-12 h-12"></i>
                <h3 class="text-xl font-bold mb-3 text-white">Aplicaciones Web</h3>
                <p class="text-white text-sm opacity-80">Desarrollo robusto con Laravel, React y arquitecturas modernas.</p>
            </div>
            <div class="service-card">
                <i data-lucide="cloud" class="mx-auto mb-4 text-accent w-12 h-12"></i>
                <h3 class="text-xl font-bold mb-3 text-white">Despliegues Cloud</h3>
                <p class="text-white text-sm opacity-80">Escalabilidad garantizada en AWS, Azure y Google Cloud.</p>
            </div>
            <div class="service-card">
                <i data-lucide="database" class="mx-auto mb-4 text-accent w-12 h-12"></i>
                <h3 class="text-xl font-bold mb-3 text-white">Bases de Datos SQL</h3>
                <p class="text-white text-sm opacity-80">Optimización de consultas y gestión eficiente de grandes volúmenes.</p>
            </div>
            <div class="service-card">
                <i data-lucide="bar-chart-3" class="mx-auto mb-4 text-accent w-12 h-12"></i>
                <h3 class="text-xl font-bold mb-3 text-white">Análisis de Datos</h3>
                <p class="text-white text-sm opacity-80">BI y analítica avanzada para decisiones basadas en evidencia.</p>
            </div>
            <div class="service-card">
                <i data-lucide="shield-check" class="mx-auto mb-4 text-accent w-12 h-12"></i>
                <h3 class="text-xl font-bold mb-3 text-white">Ciberseguridad</h3>
                <p class="text-white text-sm opacity-80">Protección de activos críticos y auditorías de seguridad.</p>
            </div>
            <div class="service-card">
                <i data-lucide="code-2" class="mx-auto mb-4 text-accent w-12 h-12"></i>
                <h3 class="text-xl font-bold mb-3 text-white">Consultoría TI</h3>
                <p class="text-white text-sm opacity-80">Estrategia tecnológica personalizada para tu empresa.</p>
            </div>
        </div>
    </section>


    <section class="section  bg-equipo">
        <div class="text-center mb-16">
            <h2 class="section-title inline-block">Nuestro Equipo</h2>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
            <div class="member-card text-center">
                <div class="member-img-container">
                    <img src="https://i.pravatar.cc/300?u=carlos" alt="Carlos">
                </div>
                <h4 class="text-lg font-bold text-white">Carlos Mendoza</h4>
                <p class="text-accent text-sm">Cloud Architect</p>
            </div>
            <div class="member-card text-center">
                <div class="member-img-container">
                    <img src="/img/abel.png" alt="abel">
                </div>
                <h4 class="text-lg font-bold text-white">Abel Durand</h4>
                <p class="text-accent text-sm">Full Stack Dev</p>
            </div>
            <div class="member-card text-center">
                <div class="member-img-container">
                    <img src="https://i.pravatar.cc/300?u=luis" alt="Luis">
                </div>
                <h4 class="text-lg font-bold text-white">Luis Duarte</h4>
                <p class="text-accent text-sm">Data Specialist</p>
            </div>
        </div>
    </section>


    <section class="section bg-black" id="contacto">
        <div class="max-w-2xl mx-auto">
            <div class="text-center mb-10">
                <h2 class="section-title inline-block">Contacto</h2>
                <p class="text-white mt-4 opacity-80">¿Listo para transformar tu empresa?</p>
            </div>
            <form class="contact-form space-y-4">
                <input type="text" placeholder="Nombre completo">
                <input type="email" placeholder="Correo electrónico">
                <textarea rows="4" placeholder="Cuéntanos sobre tu proyecto..."></textarea>
                <button type="submit" class="btn-primary w-full border-none cursor-pointer mt-4">Enviar Mensaje</button>
            </form>
        </div>
    </section>

</x-layout>
