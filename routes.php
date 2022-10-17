<?php
$router->get( '' ,'ContentController@home');

// media content
$router->get( 'media_content' ,'ContentController@index');
$router->post( 'media_content' ,'ContentController@add');
$router->get( 'media_content/update' ,'ContentController@updateMode');
$router->post( 'media_content/update' ,'ContentController@update');
$router->get( 'media_content/delete' ,'ContentController@deleteMode');
$router->post( 'media_content/delete' ,'ContentController@delete');


//authors
$router->get( 'authors' ,'ContentController@index');
$router->post( 'authors' ,'ContentController@addAuthor');
$router->get( 'authors/update' ,'ContentController@updateMode');
$router->post( 'authors/update' ,'ContentController@update');
$router->get( 'authors/delete' ,'ContentController@deleteMode');
$router->post( 'authors/delete' ,'ContentController@delete');

//media
$router->get( 'type_of_media' ,'ContentController@index');
$router->post( 'type_of_media' ,'ContentController@addMedia');
$router->get( 'type_of_media/update' ,'ContentController@updateMode');
$router->post( 'type_of_media/update' ,'ContentController@update');
$router->get( 'type_of_media/delete' ,'ContentController@deleteMode');
$router->post( 'type_of_media/delete' ,'ContentController@delete');




?>