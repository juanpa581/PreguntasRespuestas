

<?php $__env->startSection('title', 'Editar'); ?>

<?php $__env->startSection('content'); ?>

<form action="<?php echo e(route('preguntas.update', $pregunta->id)); ?>" method="POST" 

class="bg-white w-1/3 p-4 border-gray-100 shadow-xl rounded-lg">
<?php echo csrf_field(); ?>
<?php echo method_field('put'); ?>
<h2 class="text-2xl text-center py-4 mb-4 font-semibold">
    Editar Preguntas <?php echo e($pregunta->id); ?>

</h2>

<input class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-900" placeholder="Titulo" name="titulo" value="<?php echo e($pregunta->titulo); ?>">
<input class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-900" placeholder="Descripcion" name="descripcion" value="<?php echo e($pregunta->descripcion); ?>">
<input class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-900" placeholder="Imagen" name="imagen" value="<?php echo e($pregunta->imagen); ?>">
<input class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-900" placeholder="Etiqueta" name="etiqueta" value="<?php echo e($pregunta->etiqueta); ?>">

<button type="submit" class="my-3 w-full bg-green-500 p-2 font-semibold rounded text-white hover:bg-green-400">Enviar</button>

</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.appd', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\PaginaPreguntasRespuestas\resources\views/user/editar.blade.php ENDPATH**/ ?>