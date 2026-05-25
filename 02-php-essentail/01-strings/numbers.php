<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        pre {
            background-color: #f0f0f0;
            padding: 10px;
            border: 1px solid #ccc;
            font-family: monospace;
        }
    </style>
    <title>Document</title>
</head>

<body>
    <pre>
     <?php

        echo 42 * 42;
        echo "\n";
        $meaning = 12;
        echo $meaning * 2;
        echo "\n";
        echo $meaning / 2;
        echo "\n";
        echo $meaning + 2;
        echo "\n";
        echo $meaning - 2;
        echo "\n";
        echo $meaning % 2;
        echo "\n";
        echo '6' + '5'; // php understand as a number if there is no alpha.
        echo "\n";

        echo round(3.38, 1); // 3.4
        echo "\n";



        ?>
   </pre>
</body>

</html>