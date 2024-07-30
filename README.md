# BIENVENIDO AL REPOSITORIO DE HOTEL STARFISH

//Codigos para instalar la pagina web

composer install
npm install
copiar y pegar en la misma carpeta el .evn.example
a esta copia, llamarlo .evn 
Luego en la terminal poner: 
php artisan key:generate
php artisan migrate
php artisan db:seed
php artisan cache:clear;
php artisan config:clear;
php artisan route:clear;
php artisan view:clear;
php artisan vendor:publish --force --tag=livewire:assets
Livewire::setUpdateRoute(function($handle) {
    return Route::post('/ReservaHoteles/public/livewire/update', $handle);
});



//Todos estos codigos se utilizaran para que funcione correctamente el siti
