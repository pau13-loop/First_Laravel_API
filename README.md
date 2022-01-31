# First_Laravel_API
First PHP API developed with Laravel Framework following the free course from the website https://aprendible.com/

# Quick Notes

### Create project 
`composer create-project laravel/laravel First_Laravel_API`

# To work with this project

###### Create project 
`composer create-project laravel/laravel First_Laravel_API`

###### To run the project 
> `php artisan serve`

##### To run the migrations and NOT the seeders
> `php artisan migrate:fresh`

###### To run the migrations and seeders
> `php artisan migrate:fresh --seed`

###### Make migrations and model
> `php artisan make:model Vehicle -a`

###### Make a controller
> `php artisan make:controller api_userController --api`

###### Create miration, model and seeder at the same time
```
php artisan make:model MODEL_PATH\MODEL_NAME -ms
  
-m, --migration Create a new migration file for the model.
-s, --seeder Create a new seeder file for the model.
```
`php artisan make:model Vehicle -ms`



## Route
Import from Facades !
> `use Illuminate\Support\Facades\Route;`


## DB Connection
Path: ./config/database.php
```
        'default' => env('DB_CONNECTION', 'test_simulacion_db'),

        //...

 'test_simulacion_db' => [
            'driver' => 'pgsql',
            'url' => env('DATABASE_URL'),
            'host' => 'g1.ifc33b.cifpfbmoll.eu',
//            'host' => '127.0.0.1',
            'port' => env('DB_PORT', '5432'),
            'database' => env('DB_DATABASE', 'simulacion_db'),
            'username' => env('DB_USERNAME', 'simulacion_usr'),
            'password' => env('DB_PASSWORD', 'abc123.'),
            'charset' => 'utf8',
            'prefix' => '',
            'prefix_indexes' => true,
            'schema' => 'public',
            'sslmode' => 'prefer',
        ],
```

Path: ./.env
```
DB_CONNECTION=pgsql
DB_HOST=g1.ifc33b.cifpfbmoll.eu
DB_PORT=5432
DB_DATABASE=pllinas_comunidades
DB_USERNAME=pllinas
DB_PASSWORD=abc123.
```


## DB Seeders

> https://stackoverflow.com/questions/23186234/tables-are-not-seeding-in-laravel
Acuerdate de incluirl cualquier seeder en el archivo `DatabaseSeeder.php`:
```
 public function run()
    {
        $this->call([
            VehicleSeeder::class
        ]);
    }
```

# Directory Strucutre

### app

Source code of application and classes of pur program

### bootstrap

Run