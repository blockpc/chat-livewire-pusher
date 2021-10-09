# Chat en Tiempo Real  

## Instalaciones

- TailwindCSS from [here](https://tailwindcss.com/docs/guides/laravel)  

`npm install -D tailwindcss@latest postcss@latest autoprefixer@latest`  
`npx tailwindcss init`  

- Livewire form [here](https://laravel-livewire.com/docs/2.x/quickstart)  

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

- Install AlpineJS from [here](https://alpinejs.dev/essentials/installation)

`npm install alpinejs`  

```js
// Add to resources/js/app.js 
import Alpine from 'alpinejs';
window.Alpine = Alpine;
Alpine.start();
```

`npm run dev`

- Crear HomeController  

`php artisan make:controller HomeController`  

