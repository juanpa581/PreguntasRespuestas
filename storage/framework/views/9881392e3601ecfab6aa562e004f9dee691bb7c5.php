<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="resources/css/estilos.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php echo $__env->yieldContent('title'); ?> - Laravel App</title>
    
    <!-- Tailwind CSS Link -->
    <link rel="stylesheet" 
    href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.1/tailwind.min.css">

    
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css">

    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilos.css">


    <!-- Fontawesome Link -->
    <link href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" rel="stylesheet">
 
  </head>
  <body class="bg-gray-100 text-gray-800">
  <nav class="flex py-5 bg-gray-400 text-white">
    <div class="w-1/2 px-12 mr-auto">
        <p class="text-2xl font-bold">Welcome</p>
    </div>

    <ul class="w-1/2 px-16 ml-auto flex justify-end pt-1">
      <?php if(auth()->check()): ?>
    <li class="mx-8">
      <p class="text-xl">Welcome <b><?php echo e(auth()->user()->name); ?></b></p>
    </li>
    <li>
        <a href="<?php echo e(route('login.destroy')); ?>" class="font-bold py-2 px-4 rounded-md bg-red-500 hover:bg-red-600 hover:text-indigo-700">Log Out</a>
    </li>
    <?php else: ?>
    <li class="mx-6">
        <a href="<?php echo e(route('login.index')); ?>" class="font-semibold border-2 border-white py-2 px-4 rounded-md hover:bg-white hover:text-indigo-700">Login</a>
    </li>
    <li>
        <a href="<?php echo e(route('register.index')); ?>" class="font-semibold border-2 border-white py-2 px-4 rounded-md hover:bg-white hover:text-indigo-700">Register</a>
    </li>
    <?php endif; ?>
    </ul>
  </nav>

    <?php echo $__env->yieldContent('content'); ?>

  </body>
</html><?php /**PATH C:\xampp\htdocs\PaginaPreguntasRespuestas\resources\views/home.blade.php ENDPATH**/ ?>