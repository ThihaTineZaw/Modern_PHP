<!-- if  -->
<?php

echo "<pre>";

$statement = true;

if ($statement) {
    echo "Statement is true";
    echo "<br>";
} else {
    echo "Statement is not true";
}

$serverStatus = 'ok';
if ($serverStatus === "ok") {
    echo "Welcome to our website! Browse and enjoy our content";
    echo "<br>";
} else {
    echo "We're currently undergoing maintenance. Please check back later";
}

// if else

$name = "as";

try {
    if ($name === "Jack") {
        echo "Name is Jack";
    } else if ($name === "John") {
        echo "Name is John";
    } else {
        throw new Exception("Unknown name: " . $name);
    }
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}

echo "</pre>";


?>