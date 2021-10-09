require('./bootstrap');
import Alpine from 'alpinejs';
window.Alpine = Alpine;
Alpine.start();

document.querySelectorAll(".setMode").forEach(item => 
    item.addEventListener("click", () => {
        let htmlClasses = document.querySelector('html').classList;
        if(localStorage.theme == 'dark') {
            htmlClasses.remove('dark');
            localStorage.theme = ''
        } else {
            htmlClasses.add('dark');
            localStorage.theme = 'dark';
        }
    })
);

// TailwindCSS Dark Mode
if (localStorage.theme === 'dark' || (!'theme' in localStorage && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
    document.querySelector('html').classList.add('dark')
} else if (localStorage.theme === 'dark') {
    document.querySelector('html').classList.add('dark')
}

// Toastr Event
window.addEventListener('alert', event => { 
    toastr[event.detail.type](event.detail.message, event.detail.title ?? '');
    toastr.options = {
        "closeButton": true,
        "progressBar": true,
    }
});