<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>Image Gallery</title>
    
</head>
<body>
    
<div class="max-w-7xl min-h-64 mx-auto flex flex-col justify-center items-center bg-yellow-400/40 gap-6">
    <h1 class="text-4xl font-semibold">Beach GALLERY &bull; By PHP</h1>
    <h2 class="text-2xl italic ">Let's Explore the <?php if(!empty($beach)) echo $beach ?> Beach</h2>
</div>
