<p align="center"><a href="" target="_blank"><img src="public/assets/img/logo-DishDiscover/DishDiscover.jpg" width="400" height="400px" alt="DishDiscover Logo"></a></p>

## Front-End : 
En production : https://dishdiscover.vercel.app/

## Back-End :

Clone repo

```
git clone https://github.com/AmineMazza/Dish-Discover.git
```

composer install  

```
composer install
```

composer update 

```
composer update
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
