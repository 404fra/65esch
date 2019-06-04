step installation, please run command below : 

composer update

php artisan migrate

php artisan db:seed --class=\Encore\Admin\Auth\Database\AdminTablesSeeder

php artisan vendor:publish --tag=laravel-admin-chartjs --tag=laravel-admin-cropper --tag=laravel-admin-grid-lightbox --tag=laravel-admin-assets

php artisan admin:import helpers

php artisan admin:import log-viewer

url access : http://host/adm65

login : username/password => admin/admin
