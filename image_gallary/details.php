<?php


include ("./inc/data.inc.php");



$key = $_GET['name'];
$beach = "";
if(array_key_exists($key,$beachImages) && array_key_exists($key,$beachDescriptions)){
    $beach = $key;
}


include ("./inc/header.inc.php");

?>

<div class="max-w-3xl mx-auto py-6  px-3">
    <?php if(!empty($beach)) : ?>
      <img src="<?php echo ("./images/".rawurldecode($beachImages[$beach])) ?>" alt="<?php echo($beach) ?>" class="w-full h-64 object-cover rounded-md">
      <p class="indent-8 my-3"><?php echo($beachDescriptions[$beach]) ?></p>
      <a href="index.php" class="italic text-blue-500 underline">Back to Home</a>
<?php else : ?>
    <h1 class="text-xl italic w-64 h-12 border border-2 border-slate-200/90 bg-slate-200/80 flex justify-center items-center mx-auto"> There is no data !! </h1>
<?php endif ; ?>
</div>