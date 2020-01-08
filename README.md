# Chat Real Time utilizando Laravel, Laravel-echo e Socket.io

### Objetivo
 - Projeto para nivel de estudo de aplicação.
 - entender o funcionamento de aplicações real time uilizando o Laravel como framework principal.
 - Projeto simples mas que possui as principais configurações para usar a funcionalidade em outras aplicações.

#### Alguns Comandos utilizados
```
    laravel new NomeDoProjeto
    composer require laravel/ui --dev
    php artisan ui vue --auth
    npm install && npm run dev

    php artisan migrate
    php artisan serve
```
#### Comandos para o realtime
```
    composer require pusher/pusher-php-server "~4.0"
    npm install --save socket.io-client
    npm install -g laravel-echo-server
    laravel-echo-server init

    laravel-echo-server start
    npm run watch
```

#### criar evento
```
    php artisan make:event NodeDoEvento
    
```
