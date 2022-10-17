<?php require('./views/partials/head.php');?>





    <h1>Add new <?= $table[1];?></h1>

        <form method="POST" action="/authors">

            <label for="name">Insert name</label>

            <input type="text" name="name" required>

            <label for="surname">Insert surname</label>

            <input type="text" name="surname" required>

            <button type="submit">Create</button>
        </form>

<?php require('./views/partials/footer.php');?>