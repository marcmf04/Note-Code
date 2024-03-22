mysql -u root -p -e "DROP DATABASE IF EXISTS notecode; CREATE DATABASE notecode"
php artisan migrate:refresh
php artisan db:seed --class=UsersTableSeeder
php artisan db:seed --class=NotesTableSeeder