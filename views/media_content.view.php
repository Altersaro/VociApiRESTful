<?php require('./views/partials/head.php');?>




    <h1>Add new <?= $table[1];?></h1>

    <form method="POST" action="<?= $table[1];?>" >

    <label for="name">Insert name</label>

    <input type="text" name="name" required>

    <label for="media_id">Insert media_id</label>

    <input type="text" name="media_id" required>

    <label for="description">Insert description</label>

    <input type="text" name="description" required>

    <label for="first_author">Insert first_author</label>

    <input type="text" name="first_author" required>

    <label for="second_author">Insert second_author</label>

    <input type="text" name="second_author">

    <label for="third_author">Insert third_author</label>

    <input type="text" name="third_author">


    <button type="submit">Create</button>





    </form>
    <?php require('./views/partials/footer.php');?>