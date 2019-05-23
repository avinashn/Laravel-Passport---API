# Laravel-Passport---API
A tutorial on how to integrate Passport package and protect API's created in Laravel

## Prerequisites
<ul>
<li>After cloning this repository, go to the root folder, run the following command/s,
<pre>
    composer install
    composer update</pre>
</li>
<li>Rename .env.example to .env and provide your database details there.</li>
<li>Passport creates few database tables. Run <code>php artisan migrate</code> to import the tables.</li>
<li>Run <pre>php artisan key:generate</pre> </li>
<li> Now follow the tutorial at https://justlaravel.com/integrate-passport-laravel-api/ </li>
</ul>
