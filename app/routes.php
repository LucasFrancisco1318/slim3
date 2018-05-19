<?php

// ADMINISTRAÇÃO

$app->get('/admin/login', 'App\Action\Admin\LoginAction:index');

$app->get('/admin', 'App\Action\Admin\HomeAction:index')->add(App\Middleware\Admin\AuthMiddleware::class);

//SITE
$app->get('/', 'App\Action\HomeAction:index');
$app->get('/sobre', 'App\Action\HomeAction:sobre');
$app->get('/contato', 'App\Action\HomeAction:contato');

?>