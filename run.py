from os import system

system('npm install')
system('composer install')
system('php artisan key:generate')
system("php artisan storage:link")