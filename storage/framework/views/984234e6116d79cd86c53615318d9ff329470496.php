
<link rel="stylesheet" href="/public/css/estilos.css">
<?php $__env->startSection('title', 'home'); ?>

<?php $__env->startSection('content'); ?>

<main id="main">
<div id="carousel" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="imagenes/ciudad.png" class="d-block w-100" alt="...">
        </div> 

        <div class="overlay">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6 offset-md-6 text-md-right text-center">
                        <!-- <h1>Proffesional Soccer</h1> -->
                        <p class="d-none d-md-block">
                            Preguntas y respuestas es un sitio web <br>
                            para el apoyo a programadores acerca de sus <br>
                            dudas en temas informaticos.
                            
                        </p>
                        <!-- <a href="#" class="btn btn-outline-light">Quiero ser alumno</a>
                        <button class="btn btn-tecnoeduca">Mas información</button> -->
                    </div>
                </div>
            </div>
        </div>

    </div>
  </div>
</main> <br>

<body>
    <section id="pantalla-dividida">
        <div class="izquierda">
            <h1>Etiquetas</h1>
            
            <a href=""><li>Preguntas</li></a>
            <a href=""><li>Etiquetas</li></a>
            <a href=""><li>C#</li></a>
            <a href=""><li>Programación Web</li></a>

        </div>
        <div class="derecha">
            <h1 align="center" background-color="black">Seccion de preguntas</h1>

            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                <br>
                    <div>
                          
                
                    
                </div>
                    <?php $__currentLoopData = $preguntas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pregunta): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="card" >
                        <div class="card-header"> <h5><?php echo e($pregunta->titulo); ?></h5>
            
                            
            
                        </div>
                        <div class="card-body">
                          <h5 class="card-title">Descripción <br></h5>
                          <p class="card-text"><?php echo e($pregunta->descripcion); ?></p>
            
                          <h5 class="card-title">Imagen <br></h5>
                          <img src="/public/imagenes/<?php echo e($pregunta->imagen); ?>" alt="" width="50%" height="50%">
                          
            
                          <h5 class="card-title">Etiqueta <br></h5>
                          <p class="card-text"><?php echo e($pregunta->etiqueta); ?></p>
                          
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
            
            
        </div>

    </section>
</body>

    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\PaginaPreguntasRespuestas\resources\views/user/mostrar.blade.php ENDPATH**/ ?>