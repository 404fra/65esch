step installation, please run command below : 

php artisan migrate

php artisan db:seed --class=\Encore\Admin\Auth\Database\AdminTablesSeeder

php artisan admin:import helpers

php artisan admin:import backup

php artisan admin:import log-viewer
