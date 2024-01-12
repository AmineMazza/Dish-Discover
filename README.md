<p align="center"><a href="" target="_blank"><img src="public/assets/img/logo-DishDiscover/DishDiscover.jpg" width="400" height="400px" alt="KoulHeaulthy Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Install

Clone repo

```
git clone https://github.com/AmineMazza/Dish-Discover.git
```

composer update/install

```
composer install
```

Générez une nouvelle clé de cryptage

```
php artisan key:generate
```

Copy le fichier .env

```
copy .env.example .env
```

Configurez votre base de données

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=Dish-Discover
DB_USERNAME=root
DB_PASSWORD=
```

Exécutez les migrations

```
php artisan migrate
```
Exécuter seeders dans la BD
```
php artisan db:seed --class=UserSeeder
php artisan db:seed --class=RestaurantSeeder
php artisan db:seed --class=OffreSeeder
php artisan db:seed --class=DemandesSeeder
```

Lancer le serveur

```
php artisan serve
```
