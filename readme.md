#Opis
Aplikacja umożliwia tworzenie, podglądanie, edytowanie oraz usuwanie książek z bazy danych.

#Instalacja
* po ściągnięciu repozytorium należy zainstalować [composer](https://getcomposer.org): "composer install"
* prawa do folderu "storage" oraz "bootstrap/cache/" muszą mieć 777
* należy skopiować plik .env.example do .env i ustawić w nim dostęp do swojej bazy danych
* następnie należy wejść w terminalu do aplikacji i wywołać "php artisan migrate --seed"