<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {


    //return $router->app->version();
    return response()->json([
        'Name:'=>'  Nana Kwafo Mensah',
        'ProjectName'=>'Authentication As a Microservice'
    ]);
});


$router->group(['prefix' => 'api'], function () use ($router) {

    $router->get('users', ['uses' => 'RegistrationController@showAllUsers']);
//    $router->get('users/{id}', ['uses' => 'RegistrationController@findById']);
    $router->post('createuserwithactivation', ['uses' => 'RegistrationController@createUserWithActivation']);
//    $router->post('users', ['uses' => 'RegistrationController@createUserWithOutActivation']);
    $router->post('deleteuser/', ['uses' => 'RegistrationController@deleteUser']);
    $router->put('users/{email}', ['uses' => 'RegistrationController@updateUser']);
    $router->post('userdetails', ['uses' => 'RegistrationController@findUserByEmail']);

   $router->post('activateuser', ['uses' => 'RegistrationController@activateUser']);

    $router->post('login', ['uses' => 'AuthenticationController@login']);
    $router->post('logout', ['uses' => 'AuthenticationController@logout']);
});