# Chat en Tiempo Real  

## Instalaciones Generales

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

- Instalar Pusher desde [aqui](https://www.pusher.com/) y crear cuenta gratuita

```
// Cambiar en .env

BROADCAST_DRIVER=pusher

PUSHER_APP_ID=tu_id
PUSHER_APP_KEY=tu_key
PUSHER_APP_SECRET=tu_secret
PUSHER_APP_CLUSTER=tu_cluste
```

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

- Crear componentes livewire para formulario y chst  

`php artisan make:livewire chat-form`  
`php artisan make:livewire chat-list`  

- Crear evento para mensajes  

`php artisan make:event SendMessageEvent`

