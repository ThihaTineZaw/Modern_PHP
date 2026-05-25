<!-- cross side scripting (XSS) -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $name = htmlspecialchars($_POST['name'] ?? '', ENT_QUOTES, 'UTF-8');
    $password = $_POST["password"] ?? '';

    ?>

    <!-- <script>alert('hello')</script> Inject with js code -->
    <?php
    if (!empty($name)) echo "<h1>Hello {$name}</h1>"
    ?>
    <form action="xss.php" method="POST">
        <label for="name">Name</label>
        <input type="text" name="name" id="name"
            value="<?php echo $name ?>">
        <label for="password">Password</label>
        <input type="password" name="password" id="password">
        <input type="submit" value="Submit">

    </form>
</body>

</html>