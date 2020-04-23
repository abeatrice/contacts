# Contact SaaS

## Install

Install php dependencies
```
$ composer install
```

Create env file
```
$ cp .env.example .env
$ php artisan key:generate
```

Update .env file's keys
```
APP_NAME=Contacts
DB_DATABASE=launchcart
DB_USERNAME=homestead
DB_PASSWORD=secret
```

Migrate the database
```
$ php artisan migrate
```

Install & Build front end
```
$ npm install
$ npm run dev
```
