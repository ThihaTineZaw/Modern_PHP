<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    if (!empty($_GET["name"])) echo "<h1> book name is {$_GET["name"]}</h1>"
    ?>
    <a href="get.php?name=Harry Potter">Harry Potter</a>
    <br>
    <a href="get.php?name=Beauty and the Beast">Beauty and the Beast</a>
    <br>
    <a href="get.php?<?php echo http_build_query(['name' => 'Beauty & the Beast']) ?>">Beauty & the Beast</a>

</body>

</html>