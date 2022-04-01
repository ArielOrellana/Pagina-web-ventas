<?php $__env->startSection('title','Detalles de Productos'); ?>
<?php echo $__env->make('layouts.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('index.barra', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> 
    <div class="container">
        <div class="row">
        <div class="col-lg-3 mb-4">
                <?php echo $__env->make('index.categoria', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
        <div class="col-lg-9 mb-4 my-4">
                        <?php if(Session::has('message')): ?>
                    <div class="alert alert-success text-center" role="alert">
                        <?php echo e(Session::get('message')); ?>

                    </div>
                <?php endif; ?>
    <div class="row"><!--product-details-->
      <div class="col-md-5">
<button type="button" class="btn btn-light" data-toggle="modal" data-target=".bd-example-modal-lg"><img src="<?php echo e(url('products/small',$detalleprod->image)); ?>"></button>
<?php $__currentLoopData = $imagesGalleries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $imagesGallery): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<button type="button" class="btn btn-light" data-toggle="modal" data-target=".bd-example-modal-lg"><img src="<?php echo e(url('products/small',$imagesGallery->image)); ?>" width="75" style="padding: 8px;"></button>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">

  <div class="modal-dialog modal-lg my-slydes">
    <div class="modal-content">
      <img src="<?php echo e(url('products/medium',$detalleprod->image)); ?>">
  </div>
</div>
      <?php $__currentLoopData = $imagesGalleries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $imagesGallery): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          
        <div class="modal-dialog modal-lg my-slides">
    <div class="modal-content">
        <img src="<?php echo e(url('products/medium',$imagesGallery->image)); ?>">
    </div>
</div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</div>



                       <!-- <?php $__currentLoopData = $imagesGalleries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $imagesGallery): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <button type="button" class="btn btn-light" data-toggle="modal" data-target=".bd-example-modal-sm"><img src="<?php echo e(url('products/small',$imagesGallery->image)); ?>" width="75" style="padding: 8px;"></button>

                            <div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                              <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                  <img src="<?php echo e(url('products/large',$imagesGallery->image)); ?>">
                                </div>
                              </div>
                            </div>
                            <a href="<?php echo e(url('products/large',$imagesGallery->image)); ?>" data-standard="<?php echo e(url('products/small',$imagesGallery->image)); ?>">
                                <img src="<?php echo e(url('products/small',$imagesGallery->image)); ?>" alt="" width="75" style="padding: 8px;">
                            </a>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>-->

            </div>
      <div class="col-md-4 my-4">
             <!-- -->
             <form method="POST" action="<?php echo e(route('cart.show')); ?>" enctype="multipart/form-data"> 
                          <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
        <?php echo e(csrf_field()); ?>

                    <div class="product-information"><!--/product-information-->
                        <img src="<?php echo e(asset('frontEnd/images/product-details/new.jpg')); ?>" class="newarrival" alt="" />
                        <h2><?php echo e($detalleprod->nombre); ?></h2>
                        <p>Code ID: <?php echo e($detalleprod->codigo); ?></p>

                            <span id="dynamic_price">US $<?php echo e($detalleprod->precio); ?></span>
                        <p><b>Availability:</b>
                            <?php if($totalStock>0): ?>
                                <span id="Stock">Hay Stock</span>
                            <?php else: ?>
                                <span id="Stock">No hay Stock</span>
                            <?php endif; ?>
                        </p>
                        <p><b>Condition:</b> Nuevo</p>
                        <a href=""><img src="<?php echo e(asset('frontEnd/images/product-details/share.png')); ?>" class="share img-responsive"  alt="" /></a>
                        <br>
                        <br>
                        <a href="<?php echo e(route('cart.add', $detalleprod->id)); ?>" class="btn btn-primary">añadir carrito</a>
                    </div><!--/product-information-->
                </form>

            </div>
        </div><!--/product-details-->

        <div class="category-tab shop-details-tab"><!--category-tab-->
            <div class="col-sm-12">
                <ul class="nav nav-tabs">
                    <li class="active btn btn-dark"><a href="#details" data-toggle="tab">Detalles</a></li>
                </ul>
            </div>
            <div class="tab-content">
                <div class="tab-pane fade active in" id="details" >
                    <?php echo e($detalleprod->descripcion); ?>

                </div>

                

            </div>
        </div><!--/category-tab-->

        <div class="recommended_items"><!--recommended_items-->
            <h2 class="title text-center">recommended items</h2>

            <div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <?php $countChunk=0;?>
                    <?php $__currentLoopData = $reprod->chunk(3); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $chunk): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php $countChunk++; ?>
                        <div class="row<?php if($countChunk==1){ echo' active';} ?>">
                            <?php $__currentLoopData = $chunk; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="col-md-3 col-sm-6 mb-4">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <a href="<?php echo e(url('/detalleprod',$item->id)); ?>"><img src="<?php echo e(url('/products/small',$item->image)); ?>" alt="" style="width: 150px;"/></a>
                                                <h2>$<?php echo e($item->precio); ?></h2>
                                                <p><?php echo e($item->nombre); ?></p>
                                                        <a class="btn btn-primary" href="<?php echo e(url('/detalleprod',$item->id)); ?>">Ver Producto
          <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
                    <i class="fa fa-angle-left"></i>
                </a>
                <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
                    <i class="fa fa-angle-right"></i>
                </a>
            </div>
        </div><!--/recommended_items-->

    </div>
        </div>
    </div>
        <?php echo $__env->make('layouts.fin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>