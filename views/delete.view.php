<?php require('./views/partials/head.php');?>



<h1>Delete <?= $table[1];?> from id </h1>


<form method="POST" action="<?php $_SERVER['REQUEST_URI'];?>">

    <label for="id">Insert ID</label>
    
    <input type="text" name = "id" required>
    
    <button type="submit">Delete</button>

</form>

<?php require('./views/partials/footer.php');?>
