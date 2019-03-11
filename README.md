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


$ cd cena_noticias

$ composer install


Adicione as permissões:


$ chmod -R 775 bootstrap/cache

$ chmod -R 775 storage


Crie o Banco de Dados:


$ mysql -u ?USER?

$ > create database cena_noticias;

$ > exit


Ou ajuste o arquivo .env para usar algum DB que já possua;


$ php artisan migrate


Crie o simbólico para a pasta de imagens:


$ php artisan storage:link


Inicialização local do projeto:


$ php artisan key:generate

$ php artisan serve


Obs: após iniciado localmente, acesse http://127.0.0.1:8000/ apartir de qualquer navegador.
