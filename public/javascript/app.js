document.addEventListener('DOMContentLoaded', () => {
    const darkModeButtons = document.querySelectorAll('[data-toggle="darkMode"]'); // Selecciona todos los botones
    const htmlElement = document.documentElement;
    const darkModeIcon = document.getElementById('darkModeIcon');

    // Sincroniza el estado inicial con localStorage
    if (localStorage.getItem('darkMode') === 'enabled') {
        htmlElement.classList.add('dark');
        updateDarkModeIcon(true); // Actualiza el ícono al estado inicial
    } else {
        htmlElement.classList.remove('dark');
        updateDarkModeIcon(false); // Actualiza el ícono al estado inicial
    }

    // Agrega el evento a cada botón
    darkModeButtons.forEach(button => {
        button.addEventListener('click', () => {
            const isDarkMode = htmlElement.classList.toggle('dark'); // Alterna la clase 'dark'
            localStorage.setItem('darkMode', isDarkMode ? 'enabled' : 'disabled'); // Guarda el estado en localStorage
            updateDarkModeIcon(isDarkMode); // Actualiza el ícono
        });
    });

    // Función para actualizar el ícono del modo oscuro
    function updateDarkModeIcon(isDarkMode) {
        if (isDarkMode) {
            darkModeIcon.innerHTML = `
                <!-- Ícono de luna para modo oscuro -->
                <i class="fa-solid fa-moon fa-xl hidden dark:block" style="color: #f9f9fb;"></i>
            `;
        } else {
            darkModeIcon.innerHTML = `
                <!-- Ícono de sol para modo claro -->
                <i class="fa-solid fa-sun fa-xl block dark:hidden" style="color: #f9f9fb;"></i>
            `;
        }
    }
});

document.addEventListener('DOMContentLoaded', function () {
    const modal1 = document.getElementById('modal1');
    const modal2 = document.getElementById('modal2');
    const modal3 = document.getElementById('modal3');
    const modal4 = document.getElementById('modal4');
    const modal5 = document.getElementById('modal5');
    const modal6 = document.getElementById('modal6');
    const modal7 = document.getElementById('modal7');
    const modal8 = document.getElementById('modal8');
    if (modal1) {
        modal1.addEventListener('hidden.bs.modal', function () {
        const iframe = modal1.querySelector('iframe');
        if (iframe) {
            iframe.src = iframe.src;
        }
    });
    }
    if (modal2) {
        modal2.addEventListener('hidden.bs.modal', function () {
        const iframe = modal2.querySelector('iframe');
        if (iframe) {
            iframe.src = iframe.src;
        }
    });
    }
    if (modal3) {
        modal3.addEventListener('hidden.bs.modal', function () {
        const iframe = modal3.querySelector('iframe');
        if (iframe) {
            iframe.src = iframe.src;
        }
    });
    }
    if (modal4) {
        modal4.addEventListener('hidden.bs.modal', function () {
        const iframe = modal4.querySelector('iframe');
        if (iframe) {
            iframe.src = iframe.src;
        }
    });
    }
    if (modal5) {
        modal5.addEventListener('hidden.bs.modal', function () {
        const iframe = modal5.querySelector('iframe');
        if (iframe) {
            iframe.src = iframe.src;
        }
    });
    }
    if (modal6) {
        modal6.addEventListener('hidden.bs.modal', function () {
        const iframe = modal6.querySelector('iframe');
        if (iframe) {
            iframe.src = iframe.src;
        }
    });
    }
    if (modal7) {
        modal7.addEventListener('hidden.bs.modal', function () {
        const iframe = modal7.querySelector('iframe');
        if (iframe) {
            iframe.src = iframe.src;
        }
    });
    }
    if (modal8) {
        modal8.addEventListener('hidden.bs.modal', function () {
        const iframe = modal8.querySelector('iframe');
        if (iframe) {
            iframe.src = iframe.src;
        }
    });
    }
});