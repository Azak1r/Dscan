# Dscan
EVE Online D-Scan Parser for sharing to the correct intel channels. This package is made for the Leviathan suite. Based on <a href="https://github.com/shibdib/Shib-D-Scan-Tool">Shib-D-Scan-Tool</a> but updated to the latest game version and moved over to laravel.

[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/Azak1r/Dscan/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/Azak1r/Dscan/?branch=master)
[![Build Status](https://scrutinizer-ci.com/g/Azak1r/Dscan/badges/build.png?b=master)](https://scrutinizer-ci.com/g/Azak1r/Dscan/build-status/master)
<a href="LICENSE"><img src="https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square" alt="Software License"></img></a>

## How to install

Start by grabbing the package using composer (Needs to be added to packagist first TBD)
```
composer require azak1r/dscan
```


#### Database
The tool comes with some preset database tables and data that require some work:


run the following commands in order
```
php artisan vendor:publish --tag=migrations // This moves the Migration files to the main App
php artisan vendor:publish --tag=seeds // This moves the Seeder files to the main App

php artisan migrate 
```

Follow that up by running the following commands
```
composer dump-autoload
php artisan db:seed --class=DScanDataSeeder 
```


#### Views
All views for the tool are made to extend the Leviathan suite templates, so in order to modify the views run:
```
php artisan vendor:publish --tag=views
```
This will add the views to your ```/resources/views/vendor/Dscan``` folder so you can then customize them for your own styling


