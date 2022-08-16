# API Marvel

## Inicializar o projeto:
Crie um arquivo .env , definindo os dados de acesso na API (chave pública e privada). Caso prefira, pode utilizar os dados que já estão no .env_example , com o comando abaixo:
```bash
cp .env_example .env
```
Instalar composer e as dependencias do projeto:
```bash
composer install
```
Gerar key do laravel:
```bash
php artisan key:generate
```

Caso queira, pode trocar os herois em app/Models/Config.php . Será iniciado por padrão com os heróis:
```php
$heroisFavoritos = ['wolverine', 'hulk', 'captain america'];
```

Iniciar projeto no navegador em ambiente local:
```bash
php artisan serve
```
Por padrão, será inicializado em http://localhost:8000

## Testes unitários:

Na raiz do projeto, rodar o comando:
```bash
vendor/bin/phpunit 
```

app/Models/Config.php

## API utilizada:

https://developer.marvel.com/

## Licença:

Não se aplica.

## Site publicado:

http://kmr.dev.br/api-marvel