<?php $__env->startSection('title','Detalles del producto'); ?>
<?php echo $__env->make('layouts.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->make('layouts.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php if(Auth::user()->hasRole('admin')): ?>

<div class="container">
    <div class="content">
        <h2>
            Detalles del producto 
        </h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="<?php echo e(route('productos.index')); ?>">Productos</a>
            </li>
            <li class="breadcrumb-item active">Detalles del producto</li>
        </ol>
        <div class="row">
            <div class="col-lg-3 mb-4">
                <div class="btn-group-vertical w-100">
                    <a href="<?php echo e(route('home')); ?>" class="btn btn-secondary">Home</a>
                    <div class="btn-group" role="group">
                        <a class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Productos</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="<?php echo e(route('productos.create')); ?>">añadir producto</a>
                            <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="<?php echo e(route('productos.index')); ?>">ver productos</a>
                            </div>
                        </div>
                        <div class="btn-group" role="group">
                            <a class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Categoria</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="<?php echo e(route('categoria.create')); ?>">añadir Categoria</a>
                                <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="<?php echo e(route('categoria.index')); ?>">ver Categoria</a>
                                </div>
                            </div>
                        </div>
                    </div>
            <div class="col-lg-9 mb-4">
                <div>
                    <h3>
                        <?php echo e($productos->nombre); ?>

                    </h3>
                    <div class="col-md-8" >
                        <img class="img-fluid rounded" src="<?php echo e(url('products/medium',$productos->image)); ?>" alt="" width="50%" height="50%">
                    </div>
                    <p><?php echo e($productos->descripcion); ?></p>
                    <table border="1" width="100%" height="100%" class="table table-striped table-dark">
                        <tr>
                            <td>codigo</td>
                            <td>modelo</td>
                            <td>stock</td>
                            <td>precio</td>
                            <td>categoria</td>
                        </tr>
                        <tr>
                            <td><?php echo e($productos->codigo); ?></td>
                            <td><?php echo e($productos->modelo); ?></td>
                            <td><?php echo e($productos->stock); ?></td>
                            <td><?php echo e($productos->precio); ?></td>
                            <td><?php echo e($productos->categoria->nombre); ?></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<br>        
<?php else: ?> 
<!--user-->

<META HTTP-EQUIV="REFRESH" CONTENT="0;URL=<?php echo e(url('/')); ?>">
<?php endif; ?>
<?php echo $__env->make('layouts.fin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>