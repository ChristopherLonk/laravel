cd /vagrant/web/product;
composer install;
npm install;
php artisan migrate:fresh;
php artisan db:seed;
php artisan db:seed product;
php artisan storage:link;
