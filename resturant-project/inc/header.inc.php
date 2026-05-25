<?php
$default_image = "images/our-mission.jpg"
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>Our Restaurant &bull; <?php echo $title; ?></title>
</head>

<body>

    <!-- hero section  -->
    <section>
        <div class="bg-[url('<?php if (!empty($image))  echo "$image";
                                else echo $default_image ?>')]
                                bg-cover bg-center h-96 bg-no-repeat bg-blend-multiply  bg-gray-900/80">
            <div class="flex flex-col items-center justify-center  h-full">
                <h1 class="text-2xl md:text-4xl lg:text-6xl font-bold text-white tracking-widest"><?php echo $title; ?></h1>
                <div class="flex gap-2 mt-4">
                    <a href="our-mission.php" class="text-white border-2 border-white px-4 py-2 rounded hover:bg-gray-900/80 transition duration-300 <?php if (!empty($page) && $page === "our-mission") echo "bg-blue-400" ?> ">Our Mission</a>
                    <a href="our-vision.php" class="text-white border-2 border-white px-4 py-2 rounded hover:bg-gray-900/80 transition duration-300 <?php if (!empty($page) && $page === "our-vission") echo "bg-blue-400" ?>">Our Vision</a>
                </div>
            </div>
        </div>
    </section>