# Local Development

 - For local development I recommend using laravel [homestead](https://laravel.com/docs/7.x/homestead). 
 - If you want to use docker, I recommend using [vessel](https://vessel.shippingdocker.com/). 
 - If you are developing without virtualization or containers, you will need all of these [requirements](https://laravel.com/docs/7.x#installation), [redis](https://redis.io/), and [mysql](https://www.mysql.com/) installed.

Get the application source
```
$ git clone https://github.com/abeatrice/contacts.git
$ cd contacts
```

Install php dependencies
```
$ composer install
```

Create the .env file
```
$ cp .env.example .env
$ php artisan key:generate
```

Update the .env file's keys
```
APP_NAME=Contacts

DB_DATABASE=<database_name_here>
DB_USERNAME=<database_username_here>
DB_PASSWORD=<database_password_here>

QUEUE_CONNECTION=redis

KLAVIYO_PUBLIC_KEY=<klaviyo_public_key>
KLAVIYO_PRIVATE_KEY=<klaviyo_private_key>
```

Migrate the database
```
$ php artisan migrate --seed
```

Install & Build front end
```
$ npm install && npm run dev
```

Start the queue workers
```
$ php artisan horizon
```

Visit the application in the web browser
