<?php

use App\Core\App;



App::bind('config', require 'config.php');

$config = App::get('config');


App::bind('database', new QueryBuilder(
    Connection::make(App::get('config')['database'])
));

function view($link, $data=[]){

    extract($data);

    return require "views/$link.view.php";

}

function redirect($path){

    header("Location: /{$path}");


}

?>