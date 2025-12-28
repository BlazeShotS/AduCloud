<x-layout>
    <section class="hero-section">
        <div class="hero-content">
            <h1>Desarrollo de Aplicaciones<br>A Tus Manos</h1>
            <p>
                Creamos soluciones tecnológicas modernas para empresas
                que buscan transformar sus ideas en productos digitales reales.
            </p>
            <a href="#" class="hero-btn">Solicitar Cotización</a>
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
                <img src="https://img.freepik.com/foto-gratis/hombre-tiro-medio-gafas-vr_23-2149126949.jpg?semt=ais_hybrid&w=740&q=80"
                    alt="Tecnología e innovación">
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

    <section class="especializados">
        <div class="titulo-servicios">
            <h2>Servicios especializados</h2>
            <p>Especialidad</p>
        </div>

        <div class="cards-servicios">

            <div class="card">
                <img src="https://picsum.photos/330/260?random=1">
                <span class="badge"></span>
                <p class="card-title">UI / UX Design</p>
            </div>

            <div class="card">
                <img src="https://picsum.photos/330/260?random=2">
                <span class="badge"></span>
                <p class="card-title">React.js Development</p>
            </div>

            <div class="card">
                <img src="https://picsum.photos/330/260?random=3">
                <span class="badge"></span>
                <p class="card-title">Digital Marketing</p>
            </div>

            <div class="card">
                <img src="https://picsum.photos/330/260?random=4">
                <span class="badge"></span>
                <p class="card-title">Technology</p>
            </div>

            <div class="card">
                <img src="https://picsum.photos/330/260?random=4">
                <span class="badge"></span>
                <p class="card-title">Technology</p>
            </div>

            <div class="card">
                <img src="https://picsum.photos/330/260?random=4">
                <span class="badge"></span>
                <p class="card-title">Technology</p>
            </div>

            <div class="card">
                <img src="https://picsum.photos/330/260?random=4">
                <span class="badge"></span>
                <p class="card-title">Technology</p>
            </div>

            <div class="card">
                <img src="https://picsum.photos/330/260?random=4">
                <span class="badge"></span>
                <p class="card-title">Technology</p>
            </div>

        </div>
    </section>

    <section class="section contact">
        <h2 class="section-title">Contáctanos</h2>

        <form class="contact-form">
            <input type="text" placeholder="Nombre completo" required>
            <input type="email" placeholder="Correo electrónico" required>
            <input type="tel" placeholder="Número de contacto" required>
            <textarea placeholder="Escribe tu mensaje..." required></textarea>
            <button type="submit">Enviar mensaje</button>
        </form>
    </section>

</x-layout>
