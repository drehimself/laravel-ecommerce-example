![Laravel Ecommerce Example](https://user-images.githubusercontent.com/4316355/36414878-d41987b2-15f1-11e8-9f2c-6c3a68e4a14b.gif)

# لاراول فارسی شده ی وبلاگ دار فروشگاه اینترنتی اوپن سورس ترجمه شده ی راست به چپ

# فروشگاه باشگاه هواداران فدراسیون فوتبال جمهوری اسلامی

# Laravel Ecommerce Example

Code for YouTube video series: [https://www.youtube.com/watch?v=o5PWIuDTgxg&list=PLEhEHUEU3x5oPTli631ZX9cxl6cU_sDaR](https://www.youtube.com/watch?v=o5PWIuDTgxg&list=PLEhEHUEU3x5oPTli631ZX9cxl6cU_sDaR)

Website Demo: [https://laravelecommerceexample.ca](https://laravelecommerceexample.ca). The demo has limited permissions. Install locally for full access.

## Installation

You have 2 options for installation:

### OPTION#1: installing as docker containers
#### PreRequirements
- If you are using Windows or MacOS You must install `Docker Desktop` on your system
- If you are using Linux or MacOS You must have `Docker Engine` and `Docker Compose` on your system
- visit [docker documents](https://docs.docker.com/get-docker/) for more information
#### Installation
1. make an empty directory everywhere you want => `mkdir -p shop`
1. Clone the repo => run   `git clone https://github.com/saber13812002/laravel-ecommerce-example.git`
1. go to project directory => run `cd laravel-ecommerce-example`
1. make .env file and review its variables => `cp .env.example .env`
1. run `docker-compose up -d`
1. wait for minutes to initializing databse (only at firsttime)
#### Usage
1. enter `http://localhost:8000` to see the shop's homepage
1. enter `http://localhost:8080` to see the shop's database
   - you can use `DB_DATABASE`, `DB_USERNAME` and `DB_PASSWORD` for login to phpmyadmin
1. enter http://localhost:8000/admin if you want to access the `Laravel-Admin.org admin backend`.
   - Admin User/Password: `admin/admin`
1. enter http://localhost:8000/admin2 if you want to access the `Voyager admin backend`.
   - Admin email/password: `admin@admin.com/password`.
   - Admin Web email/password: `adminweb@adminweb.com/password`
### OPTION#2: traditional approach
1. Clone the repo and `cd` into it   `git clone https://github.com/saber13812002/laravel-ecommerce-example.git`
1. `composer install`
1. Rename or copy `.env.example` file to `.env`  =>  `cp .env.example .env`
1. `php artisan key:generate`
1. Set your database credentials in your `.env` file
1. Set your Stripe credentials in your `.env` file. Specifically `STRIPE_KEY` and `STRIPE_SECRET`
1. Set your Algolia credentials in your `.env` file. Specifically `ALGOLIA_APP_ID` and `ALGOLIA_SECRET`. See [this episode](https://www.youtube.com/watch?v=Sa0R_2aHICw&index=22&list=PLEhEHUEU3x5oPTli631ZX9cxl6cU_sDaR).
1. Set your Braintree credentials in your `.env` file if you want to use PayPal. Specifically `BT_MERCHANT_ID`, `BT_PUBLIC_KEY`, `BT_PRIVATE_KEY`. See [this episode](https://www.youtube.com/watch?v=pv8pxwBxfA4). If you don't, it should still work but won't show the paypal payment at checkout.
1. Set your `APP_URL` in your `.env` file. This is needed for Voyager to correctly resolve asset URLs.
1. Set `ADMIN_PASSWORD` forvoyager admin panel in your `.env` file if you want to specify an admin password. If not, the default password is 'password'
1. `php artisan ecommerce:install`. This will migrate the database and run any seeders necessary. See [this episode](https://www.youtube.com/watch?v=L3EbWJmmyjo&index=18&list=PLEhEHUEU3x5oPTli631ZX9cxl6cU_sDaR).'
1. `php artisan admin:install`. for laravel-admin.org admin panel ... 
1. `npm install`
1. `npm run dev`
1. `php artisan serve` or use Laravel Valet or Laravel Homestead
1. Visit `localhost:8000` in your browser
1. Visit `/admin2` if you want to access the Voyager admin backend. Admin User/Password: `admin@admin.com/password`. Admin Web User/Password: `adminweb@adminweb.com/password`
1. Visit `/admin` if you want to access the Laravel-Admin.org admin backend. Admin User/Password: `username:admin/password:admin`

## storage folders

1. voyager using config/voyager.php file
   ```
   'storage' => [
   'disk' => env('FILESYSTEM_DRIVER', 'public'),
   ],
   ```
1. https://gist.github.com/saber13812002/75db95cc2ce47067e8730f3ff8e9def5

## Shopping Cart Package

I originally used the [Crinsane/LaravelShoppingcart](https://github.com/Crinsane/LaravelShoppingcart) package but it is slow to update to the latest versions of Laravel. I now use [hardevine/LaravelShoppingcart](https://github.com/hardevine/LaravelShoppingcart) which is a forked version that updates quicker.

## Windows Users - money_format() issue

The `money_format` function does not work in Windows. Take a look at [this thread](https://stackoverflow.com/questions/6369887/alternative-to-money-format-function-in-php-on-windows-platform/18990145). As an alternative, just use the `number_format` function instead.

1. In `app/helpers.php` replace `money_format` line with `return '$'.number_format($price / 100, 2);`
1. In `app/Product.php` replace `money_format` line with `return '$'.number_format($this->price / 100, 2);`
1. In `config/cart.php` set the `thousand_seperator` to an empty string or you might get a 'non well formed numeric value encountered' error. It conflicts with `number_format`.

## Starting from a particular point

If you would like to follow along from a particular point, follow these instructions. I'm going to be starting from my starting point in the first video of the series. You can choose any point by replacing the hash with [any particular commit](https://github.com/drehimself/laravel-ecommerce-example/commits/master).

1. Clone the repo and `cd` into it
1. `git checkout f4f651a8a35ebb2ff38ba15771fd65c93051f942`
1. Follow the rest of the steps above. Instead of `php artisan ecommerce:install`, migrate and seed the normal way with `php artisan migrate --seed`


## npm run prod
when you run npm run prod
1. git move all your changes in public into server
1. but your results in public_html and you need to copy them when you changes vuejs files
1. so you need to overwrite them with laravel.bat
1. by running  ./laravel.bat

##  fork
You can Fork this project and modify files

...