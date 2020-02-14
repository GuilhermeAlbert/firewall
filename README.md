# Firewall Appliance with residential focus (IOT)

Academic project developed by students of the University Center UNA, in the Information Systems course, 6th period. Thinking about the growth of IOT (Internet Of Things), residential security is a palpable subject to deal with. Therefore, the objective of the project is to provide greater security for residential networks.

![Firewall screenshot](https://raw.githubusercontent.com/GuilhermeAlbert/firewall/master/screenshots/firewall-settings.png)

## Requirements
```
PHP >= 7.2 
Composer
MySql ou Postgres 9.2
Laravel 5.8.8
```
### Linux: Ubuntu 16.04LTS
Install Apache, PHP and PHP Modules
```
sudo apt-get update
sudo apt-get install php7.2 php7.2-cli php7.2-common php7.2-xml php7.2-mbstring php7.2-pgsql php7.2-mysql php7.2-curl php7.2-gd php7.2-json curl -y
```
Ahead, check the php version running on console `php -v`
Must apear something like this:
```
PHP 7.2.17-1+ubuntu16.04.1+deb.sury.org+3 (cli) (built: Apr 10 2019 10:50:19) ( NTS )
Copyright (c) 1997-2018 The PHP Group
Zend Engine v3.2.0, Copyright (c) 1998-2018 Zend Technologies
    with Zend OPcache v7.2.17-1+ubuntu16.04.1+deb.sury.org+3, Copyright (c) 1999-2018, by Zend Technologies
```
start apache `sudo systemctl start apache2 && systemctl status apache2`

After this let's to install Composer
```
sudo curl -s https://getcomposer.org/installer | php
sudo mv composer.phar /usr/local/bin/composer
composer -v
```
Run `composer install` to install the dependecies of project, as Laravel.
When it finish
You've to create a Database with a user and password credentials.
WIll be necessary to configure `.env` file, setting the credentials access, this way the application will can connect

If all is right until here, when run `php artisan serve` on terminal, must apear something like this
```
Laravel development server started: <http://127.0.0.1:8000>
```
now press `Ctrl+C` to cancel, we need to apply the migrations to create all tables and structe of the Database.
Run `php artisan migrate`
After this, run `php artisan db:seed` on terminal
it will load a dataset with a user and permissions.