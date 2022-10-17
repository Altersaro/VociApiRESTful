<?php require('./views/partials/head.php');?>



<h1>Update <?= $table[1];?></h1>


<form method="POST" action="<?php $_SERVER['REQUEST_URI'];?>">

<label for="id">Insert ID</label>
    
    <input type="text" name = "id" required>
    
    <label for="category">Insert category</label>
        
    <input type="text"  name = "category" required>
    
    <label for="element">Insert new content</label>
    
        
    <input type="text"  name="element" required>
    
    
    <button type="submit">Update</button>

</form>


<?php require('./views/partials/footer.php');?>
