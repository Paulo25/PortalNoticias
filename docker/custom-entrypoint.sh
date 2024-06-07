#!/bin/bash

cd /var/www/html

# Instalar dependências do Composer e NPM
composer install
npm install

# Definir permissões para o diretório storage
chmod -R 777 storage/

# Copiar e configurar o arquivo .env
#cp /var/www/html/.env.example /var/www/html/.env
#php artisan key:generate

# Atualizar configurações do Redis no .env (caso necessário)
sed -i 's/REDIS_HOST=127.0.0.1/REDIS_HOST=redis/' .env
sed -i 's/REDIS_PORT=6379/REDIS_PORT=6379/' .env

# Rodar as migrações do banco de dados
php artisan migrate
# php artisan db:seed
#php artisan db:seed --class=NoticiaSeeder

# Definir permissões para o diretório storage novamente
chmod -R 777 /var/www/html/storage/

# Iniciar o servidor Apache em primeiro plano
apache2-foreground
