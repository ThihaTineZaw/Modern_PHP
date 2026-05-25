<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>



<body>
    <pre>
        <?php
        var_dump($_POST);
        ?>
    </pre>
    <form action="post.php" method="POST">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" value="<?php if (!empty($_POST['name'])) echo ($_POST['name']) ?>">
        <label for="password">Password</label>
        <input type="password" name="password" id="password">
        <input type="submit" value="Submit">

    </form>
</body>

</html>