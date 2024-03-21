mysql -u root -p -e "DROP DATABASE IF EXISTS notecode; CREATE DATABASE notecode"
php artisan migrate:refresh
