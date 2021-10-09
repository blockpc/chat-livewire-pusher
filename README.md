# Chat en Tiempo Real  

## Instalaciones

- Instalar TailwindCSS desde [aqui](https://tailwindcss.com/docs/guides/laravel)  

`npm install -D tailwindcss@latest postcss@latest autoprefixer@latest`  
`npx tailwindcss init`  

- Instalar Livewire desde [aqui](https://laravel-livewire.com/docs/2.x/quickstart)  

`composer require livewire/livewire`

```html
...
    @livewireStyles
</head>
<body>
    ...
 
    @livewireScripts
</body>
</html>
```

- Instalar AlpineJS desde [aqui](https://alpinejs.dev/essentials/installation)

`npm install alpinejs`  

```js
// Add to resources/js/app.js 
import Alpine from 'alpinejs';
window.Alpine = Alpine;
Alpine.start();
```

`npm run dev`

- Instalar yoeunes/toastr desde [aqui]()

`composer require yoeunes/toastr`

```html
...
    @livewireStyles
    @toastr_css
</head>
<body>
    ...
 
    @livewireScripts
    @jquery
    @toastr_js
</body>
</html>
```

Add to app.js  

```js
// Toastr Event
window.addEventListener('alert', event => { 
    toastr[event.detail.type](event.detail.message, event.detail.title ?? '');
    toastr.options = {
        "closeButton": true,
        "progressBar": true,
    }
});
```

`npm run dev`

- Crear HomeController  

`php artisan make:controller HomeController`  

```php
class HomeController extends Controller
{
    public function home()
    {
        return view('home');
    }
}
```

## Primeros pasos

- Crear componente livewire para formulario  

`php artisan make:livewire chat-form`  

