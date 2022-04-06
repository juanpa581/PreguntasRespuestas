

<?php $__env->startSection('title', 'Crear'); ?>

<?php $__env->startSection('content'); ?>

<form action="<?php echo e(route('user.store')); ?>" method="POST" 
class="bg-white w-1/3 p-4 border-gray-100 shadow-xl rounded-lg">
<?php echo csrf_field(); ?>


    
<h1 class="text-2xl text-center py-4 mb-4 font-semibold">Crear Pregunta</h1>

<input class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-900" placeholder="Titulo" name="titulo">
<input class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-900" placeholder="Descripción" name="descripcion">
<input class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-900" placeholder="Imagen" name="imagen">
<input class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-900" placeholder="Etiqueta" name="etiqueta">

<button type="submit" class="my-3 w-full bg-green-500 p-2 font-semibold rounded text-white hover:bg-green-400">Enviar</button>

</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.appd', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\PaginaPreguntasRespuestas\resources\views/user/crear.blade.php ENDPATH**/ ?>