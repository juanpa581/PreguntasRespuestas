

<?php $__env->startSection('title', 'Editar Respuesta'); ?>

<?php $__env->startSection('content'); ?>

<form action="<?php echo e(route('respuestas.update', $respuesta->id)); ?>" method="POST" 

class="bg-white w-1/3 p-4 border-gray-100 shadow-xl rounded-lg">
<?php echo csrf_field(); ?>
<?php echo method_field('put'); ?>
<h2 class="text-2xl text-center py-4 mb-4 font-semibold">
    Editar Respuesta <?php echo e($respuesta->id); ?>

</h2>

<input class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-900" placeholder="Respuesta" name="respuesta" value="<?php echo e($respuesta->respuesta); ?>">
<input class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-900" placeholder="Usuario" name="usuario" value="<?php echo e($respuesta->usuarop); ?>">

<button type="submit" class="my-3 w-full bg-green-500 p-2 font-semibold rounded text-white hover:bg-green-400">Enviar</button>

</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.appt', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\PaginaPreguntasRespuestas\resources\views/user/editarres.blade.php ENDPATH**/ ?>