

<?php $__env->startSection('title', 'Index'); ?>

<?php $__env->startSection('content'); ?>

<body class="cuerpo" background="gray">
    




<div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

    
          
          
          
        </tr>
      </thead>
      
        <?php $__currentLoopData = $respuestas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $respuesta): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="card">
            <div class="card-header"> <h5><?php echo e($respuesta->usuario); ?></h5>

                <form align="right" action="<?php echo e(route('respuestas.destroy', $respuesta->id)); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('delete'); ?>
                <button class="bg-red-500 text-white px-3 py-1 rounded-sm mx-1">
                <i class="fas fa-trash"></i></button>

                <a href="<?php echo e(route('respuestas.edit', $respuesta->id)); ?>" class="bg-green-500 text-white px-3 py-1 rounded-sm">
                    <i class="fas fa-pen"></i></a>
                </form>

            </div>
            <div class="card-body">
              <h5 class="card-title">Descripción <br></h5>
              <p class="card-text"><?php echo e($respuesta->respuesta); ?></p>

              

              
              

              
            </div>
          </div>
          <br>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        

      
    

    <!-- FOOTER -->
<footer id="footer" class="pb-4 pt-4">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-lg">
                <div class="row">
                    <div class="col-12 col-lg-12 col-med-12">
                        <h2> <i class="material-icons">domain</i> Preguntas y respuestas</h2>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 col-lg-12 col-med-12">
                        <small> 
                            <li>Preguntas</li>
                            <li>Respuestas</li>
                            <li>Trabajos</li>
                            <li>Ayuda</li>
                        </small>
                        <!-- <h5></h5> -->
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 col-lg-12 col-med-12">
                        <small> <i class="material-icons">contact_phone</i> Tel. 4747474747
                        
                        </small>
                        <!-- <h5></h5> -->
                    </div>
                </div>
            </div>

            

            
            <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
            
        </div>

            <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        </div>
        
    </div>
<!-- </footer> -->

<!-- <div id="footerDivider" class="pt-3">
    <div class="container">
    <div class="row">
        <div class="col-12 col-lg-6">
            <p>CopyRight@ 2021 Professional Soccer</p>
            <p>Derechos reservados</p>
        </div>

        <div class="col-12 col-lg-6 text-right">
            <a href="#">Noticias de privacidad</a>
        </div> -->
</div>
</div>
</div>
</footer>
<!-- END FOOTER -->


</div>

<?php $__env->stopSection(); ?>
</body>
<?php echo $__env->make('layouts.appt', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\PaginaPreguntasRespuestas\resources\views/user/indexr.blade.php ENDPATH**/ ?>