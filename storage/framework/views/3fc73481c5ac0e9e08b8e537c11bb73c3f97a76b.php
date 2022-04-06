<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php echo $__env->yieldContent('title'); ?> - Preguntas respuestas</title>
    
    <!-- Tailwind CSS Link -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Fontawesome Link -->
    <link href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    
    <link rel="stylesheet" href="estilos.css">
    <link rel="stylesheet" href="/public/css/estilos.css">
 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/a23e6feb03.js"></script>

  </head>
  <body class="bg-blue-100 text-gray-800">
    <!-- Document body -->

    <div style="text-align:center">
      <h2>Seccion de respuestas</h2>
    </div>

    <nav class="h-16 flex justify-end py-4 px-16">

        <a href="<?php echo e(route('user.indexr')); ?>" class="text-white rounded px-4 pt-1 h-10 bg-blue-500 font-semibold mx-2 hover:bg-blue-600">Respuestas</a>

        <a href="<?php echo e(route('user.crearres')); ?>" class="text-white rounded px-4 pt-1 h-10 bg-blue-500 font-semibold mx-2 hover:bg-blue-600">Crear</a>
    </nav>
    <br>
    
        <?php echo $__env->yieldContent('content'); ?>
    



  </body>
</html><?php /**PATH C:\xampp\htdocs\PaginaPreguntasRespuestas\resources\views/layouts/appt.blade.php ENDPATH**/ ?>