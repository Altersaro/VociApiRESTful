<?php

namespace App\Controllers;

use App\Core\App;




class ContentController{


    public function home(){

        return view('index');
    }



    public function index(){

        $table = trim($_SERVER['REQUEST_URI'], '/');



        $contents = App::get('database')->selectAll($table);


        return view("$table", compact('contents'));
    }



    // add new media content
    public function add(){

        if(
            !empty($_POST['name'])||
            !empty($_POST['media_id'])||
            !empty($_POST['description'])||
            !empty($_POST['first_author'])||
            !empty($_POST['second_author'])||
            !empty($_POST['third_author'])
        ){
            if(App::get('database')->insert('media_content', [

            'name' => $_POST['name'],
            'media_id'=> $_POST['media_id'],
            'description' => $_POST['description'],
            'first_author' => $_POST['first_author'],
            'second_author' => $_POST['second_author'],
            'third_author' => $_POST['third_author'],
    
            ])){
                http_response_code(201);
            }else{
                http_response_code(503);
            }
        }else{
            http_response_code(400);
        }

        return redirect('media_content');
    }


    //add new Author
    public function addAuthor(){

        
        if(
            !empty($_POST['name'])||
            !empty($_POST['surname'])
        ){
        if(App::get('database')->insert('authors', [

            'name' => $_POST['name'],
            'surname'=> $_POST['surname']
    
            ])){
                 http_response_code(201);
            }else{
                http_response_code(503);
            }
        }else{
            http_response_code(400);
        }


        return redirect('authors');
    }


    //add new Type_of_media
    public function addMedia(){

        if(
            !empty($_POST['name'])        
        ){
            if(App::get('database')->insert('type_of_media', [

            'name' => $_POST['name']
    
            ])){
                http_response_code(201);
            }else{
                http_response_code(503);
            }
        }else{
            http_response_code(400);
        }

        return redirect('type_of_media');
    }

    

    public function updateMode(){

         $table = explode('/',$_SERVER['REQUEST_URI']);

        $contents = App::get('database')->selectAll($table[1]);


        return view("update", compact('contents'));
    }

    
    public function update(){

        

        $table = explode('/',$_SERVER['REQUEST_URI']);

        if(
            !empty($_POST['id'])||
            !empty($_POST['category'])||
            !empty($_POST['element'])

        ){
            if(App::get('database')->update("$table[1]", [
            
                'id' => $_POST['id'],
                $_POST['category']=> $_POST['element']
    
            ])){
                http_response_code(201);
            }else{
                http_response_code(503);
            }
            }else{
                http_response_code(400);
            };


        return redirect(trim($_SERVER['REQUEST_URI'], '/'));



    }

    
    public function deleteMode(){

        $table = explode('/',$_SERVER['REQUEST_URI']);

        $contents = App::get('database')->selectAll($table[1]);


        return view("delete", compact('contents'));

    }

    public function delete(){

        $table = explode('/',$_SERVER['REQUEST_URI']);

        if(
            !empty($_POST['id'])

        ){
            if(App::get('database')->delete("$table[1]", [
            
                'id' => $_POST['id']
    
            ])){
                http_response_code(201);
            }else{
                http_response_code(503);
            }
            }else{
                http_response_code(400);
            };

        return redirect(trim($_SERVER['REQUEST_URI'], '/'));



    }



}



?>