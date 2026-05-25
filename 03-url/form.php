<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $name = $_GET["name"];
    if (!empty($name)) echo "<h1>my name is {$name}</h1>";
    ?>
    <form action="form.php" method="GET">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" value="<?php if (!empty($_GET["name"])) echo ($_GET["name"]) ?>">
        <input type="submit" value="Submit">
    </form>
</body>

</html>