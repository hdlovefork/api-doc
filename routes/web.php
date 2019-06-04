<?php
/**
 * Created by PhpStorm.
 * User: Dean
 * Email: 1602264241@qq.com
 * Date: 2019-06-04
 * Time: 08:32
 */
use Illuminate\Routing\Router;

Route::group([
    'namespace'     => 'Dean\\ApiDoc\\Controllers',
],function (Router $router){
    $router->get('/doc/{name?}', 'DocController@index')->name('doc');
});
