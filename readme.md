## Laravel MongoDB CRUD Tutorial
Laravel MongoDB CRUD Tutorial With Example is the topic, we will discuss today. In this example, we will use jenssegers/mongodb Package. If You need to get more information, then Go To Github. If you are connecting MongoDB database to Laravel or any PHP application then you might face one issue and that is PHP MongoDB driver. The package, we will install in Laravel requires php mongodb driver installs on our machine. But if you try to download a direct package without installing the driver then you will face an error says that you have one extension missing in your PHP extension files or other errors depending on your configured environment. It is the most famous issue in this scenario. Luckily I have a best possible solution for you. So I will help you to connect your Laravel application to MongoDB database. So first, you need to go to this Link. I am assuming that you are using Windows.

##  Step 1: Install Laravel Project
Download New Laravel Project by the writing following command.
composer create-project --prefer-dist laravel/laravel laravelmongodb

##  Step 2: Configure MongoDB Database
//.env

MONGO_DB_HOST=127.0.0.1
MONGO_DB_PORT=27017
MONGO_DB_DATABASE=mongocrud
MONGO_DB_USERNAME=
MONGO_DB_PASSWORD=
Next, we want to add a new mongodb connection on config >> database.php file.
//database.php

'connections' => [


        ......
     'mongodb' => [
            'driver'   => 'mongodb',
            'host'     => env('MONGO_DB_HOST', 'localhost'),
            'port'     => env('MONGO_DB_PORT', 27017),
            'database' => env('MONGO_DB_DATABASE'),
            'username' => env('MONGO_DB_USERNAME'),
            'password' => env('MONGO_DB_PASSWORD'),
            'options'  => []
        ],
    ]
    
##  Step 3: Install Laravel MongoDB Package
        composer require jenssegers/mongodb
##  Step 4: Define providers
Find the providers in config >> app.php file and register the MongodbServiceProvider.

'providers' => [
        Jenssegers\Mongodb\MongodbServiceProvider::class,
           ]
           
 ##  Quick Configuration
    -- clone Repository
    -- composer require jenssegers/mongodb
    -- composer update
    -- php artisan serve
   
    
