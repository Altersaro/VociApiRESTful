<?php require('./views/partials/head.php');?>





    <h1>Add new <?= $table[1];?> </h1>

        <form method="POST" action="<?= $table[1];?>">

            <label for="name">Insert name of media</label>

            <input type="text" name="name" required>

            <button type="submit">Create</button>
        </form>

<?php require('./views/partials/footer.php');?>