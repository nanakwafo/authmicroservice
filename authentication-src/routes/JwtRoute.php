<?php
/**
 * Created by PhpStorm.
 * User: nanakwafo
 * Date: 18/02/2020
 * Time: 16:55
 */
$router->group (['prefix' => 'api/v1'], function () use ($router) {

    $router->post ('token', ['uses' => 'JwtController@tokenGenerate']);

    

});