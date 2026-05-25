


<?php

include ("./inc/data.inc.php");
include ("./inc/header.inc.php");

?>
<div class="max-w-3xl mx-auto py-6">
<div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 justify-center gap-6 px-2">
        <?php foreach($beachImages AS $key=>$value) : ?>
        <div class="border border-2 border-slate-900/80 rounded-md px-1 py-2 cursor-pointer shadow shadow-slate-500/70 hover:shadow-xl transition-all duration-300">
            <a href="<?php echo ("details.php?name=".rawurldecode($key)) ?>">
                <h1 class="text-md text-center md:text-lg xl:text-xl font-semibold my-2"><?php echo $key ?></h1>
            </a>
            <img src="<?php echo ("./images/".rawurldecode($value)) ?>" alt="<?php echo($key) ?>" class="w-full h-34 object-cover rounded-md">
        </div>
    <?php endforeach ; ?>
</div>
</div>
