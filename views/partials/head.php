<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="/public/css/style.css">
</head>
<body>

    <div class="container">

    <nav>
 <!-- <?= $table= explode('/',$_SERVER['REQUEST_URI']);?>  -->

    <a href="/">Home</a>

    <a href="/<?= $table[1];?>">Create content</a>

   <a href="/<?= $table[1];?>/update">Update content</a>

    <a href="/<?= $table[1];?>/delete">Delete content</a>
    </nav>


    <h1>All <?= $table[1];?></h1>

    <?php foreach($contents as $content):?>


        <div>
            <span><?= $content->id; ?></span>
            <span><?= $content->name; ?></span>
        </div>


    <?php endforeach;?>

  



