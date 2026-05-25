<!-- isset  -->
<?php

echo "<pre>";

$name = "Aung Aung";
$age = null;

// Variable ကြေညာထားပြီး null မဟုတ်တဲ့အတွက် true ပြပါမယ်
echo 'isset($name): ';
var_dump(isset($name)); // bool(true)

// Variable ကြေညာထားပေမယ့် null ဖြစ်နေတဲ့အတွက် false ပြပါမယ်
echo 'isset($age): ';
var_dump(isset($age)); // bool(false)

// မကြေညာထားတဲ့ variable ဖြစ်တဲ့အတွက် false ပြပါမယ်
echo 'isset($address): ';
var_dump(isset($address)); // bool(false)

// Array တွေမှာ key ရှိမရှိစစ်ဆေးခြင်း
$user = [
    "username" => "admin",
    "email" => "admin@example.com"
];

echo 'isset($user["username"]): ';
var_dump(isset($user["username"])); // bool(true)

// empty() အသုံးပြုခြင်း
// variable ထဲတွင် တန်ဖိုးမရှိခြင်း (ဥပမာ- string အလွတ် '', 0, null, false) ကို စစ်ဆေးရန် သုံးပါသည်။

$name = 'Jame';
if (!empty($name)) { // တန်ဖိုးတစ်ခုခု ရှိနေမှသာ (!empty) အလုပ်လုပ်မည်ဖြစ်သည်
    echo "$name";
}

echo "</pre>";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>isset method</title>
</head>

<body>
    <?php
    if (isset($name)) {
        echo "$name";
        echo "<br>";
    }
    if (isset($address)) {
        echo "$address";
    } else {
        echo "Address not found !!";
        echo "<br>";
    }

    ?>

    <!-- alternative syntex of PHP -->

    <?php if (isset($name)) { ?>
        <h1>Hello, <?php echo $name; ?></h1>
    <?php } ?>

    <?php if (!empty($name)) : ?>
        <h1>Hello, <?php echo $name ?></h1>
    <?php endif ?>

    <?php

    $age = 26;
    // unset() ကိုအသုံးပြုပြီး ကြေညာထားသော variable ကို မှတ်ဉာဏ်(memory) ထဲမှ လုံးဝဖျက်ပစ်နိုင်ပါသည်။
    unset($age);
    if (!empty($age)) { // $age ကို ဖျက်လိုက်ပြီဖြစ်သောကြောင့် empty ဖြစ်သွားပြီး အောက်ပါကုဒ် အလုပ်လုပ်မည်မဟုတ်ပါ။
        echo "$age";
    }

    ?>


</body>

</html>