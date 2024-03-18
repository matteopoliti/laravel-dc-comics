# Comandi da lanciare da terminale, una volta importato il template e in VS Code:

1. Scaricare le dipendenze per Laravel e per Vite:
``
composer install
``
e 
``
npm install
``


2. Creare nella root folder un file senza nome .env con questo comando:
``
cp .env.example .env
``
e generare la chiave univoca per il .env:
``
php artisan key:generate
``


3. Avviare prima il server Laravel:
``
php artisan serve
``
e a seguire avviare il server Vite e consentire la compilazione dei file SASS (in un terminale a parte appena splittato):
``
npm run dev
``
