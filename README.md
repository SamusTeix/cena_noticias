CenaZERO Notícias

Sobre:
Sistema de notícias para a seleção da CenaZERO;

Requerimentos:
PHP 7.2.15
Composer
Laravel 5.7
MySQL Server
Git

Instalação:
Clone o projeto:

$ git clone https://github.com/SamusTeix/cena_noticias.git

Instale os componentes:

$ cd laravel-eventos
$ composer install

Adicione as permissões:

$ chmod -R 775 bootstrap/cache
$ chmod -R 775 storage

* Ajuste as configurações do DB no arquivo .env

Rode a criação do banco de dados:

$ php artisan migrate
Inicialização local do projeto:

$ php artisan key:generate
$ php artisan serve
Obs: após iniciado localmente, acesse http://127.0.0.1:8000/ apartir de qualquer navegador.