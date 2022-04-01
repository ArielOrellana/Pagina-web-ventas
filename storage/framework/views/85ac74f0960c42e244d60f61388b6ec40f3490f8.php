<?php $__env->startSection('title','Zontal+Admin'); ?>
<?php echo $__env->make('layouts.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->make('layouts.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <section>
        <?php echo $__env->make('index.barra', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <header>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <!-- Slide One - Set the background image for this slide in the line below -->
        <div class="carousel-item active">
            <a href="<?php echo e(url('/cat/1')); ?>"><img src="<?php echo e(asset('img/bancar.jpg')); ?>" class="d-block w-100 h-100" alt="...">
            </a>

        </div>
        <!-- Slide Two - Set the background image for this slide in the line below -->
        <div class="carousel-item">
            <a href="<?php echo e(url('/cat/5')); ?>"><img src="<?php echo e(asset('img/ban.jpg')); ?>" class="d-block w-100 h-100" alt="...">
                </a>
        </div>
        <!-- Slide Three - Set the background image for this slide in the line below -->
        <div class="carousel-item">
            <a href="<?php echo e(url('/cat/3')); ?>"><img src="<?php echo e(asset('img/banro.jpg')); ?>" class="d-block w-100 h-100" alt="...">
                </a>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </header>
 <div class="container">
    <div class="row">
        <div class="col-lg-3 mb-4">
            <?php echo $__env->make('index.categoria', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
        <div class="col-lg-9 mb-4">
            <h1 class="my-4">Productos</h1>
            <div class="row">
                        <?php $__currentLoopData = $productos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $producto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($producto->categoria->status==1): ?>
              <div class="col-lg-4 col-sm-6 portfolio-item">
                <div class="card h-100">
                  <a href="<?php echo e(url('/detalleprod',$producto->id)); ?>"><img class="card-img-top" src="<?php echo e(url('products/small/',$producto->image)); ?>" alt=""></a>
                  <div class="card-body">
                    <h4 class="card-title">
                      <a href="<?php echo e(url('/detalleprod',$producto->id)); ?>"><?php echo e($producto->nombre); ?></a>
                    </h4>
                    <p>$<?php echo e($producto->precio); ?></p>
                    <a href="<?php echo e(url('/detalleprod',$producto->id)); ?>" class="btn btn-dark">ver producto</a>
                  </div>
                </div>
            </div>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div><!--features_items-->

                </div>
            </div>
        </div>
    </section>

<?php echo $__env->make('layouts.fin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>