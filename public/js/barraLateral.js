// En public/js/barraLateral.js
const sidebar = document.getElementById('contact-sidebar');
const openBtn = document.getElementById('menu-toggle'); // o el disparador que desees
const closeBtn = document.getElementById('close-sidebar-btn');

// Si quieres que el logo o algún botón la abra:
if(openBtn) {
    openBtn.addEventListener('click', () => {
        sidebar.classList.add('active');
    });
}

if(closeBtn) {
    closeBtn.addEventListener('click', () => {
        sidebar.classList.remove('active');
    });
}
