<?php $__env->startSection('title','Productos'); ?>
<?php echo $__env->make('layouts.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->make('layouts.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php if(Auth::user()->hasRole('admin')): ?>
<div class="container">
    <div class="content">
        <div class="title m-b-md">
            <h1>Productos</h1>
        </div>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="<?php echo e(route('home')); ?>">Home</a>
            </li>
            <li class="breadcrumb-item active">Productos</li>
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
                    <?php echo $__env->make('productos.fragments.aside', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <h2>
                        Listado  de productos
                        <a href="<?php echo e(route('productos.create')); ?>" class="btn btn-info">Nuevo</a>
                    </h2>
                    <?php echo $__env->make('productos.fragments.info', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <table border="1" class="table table-striped table-dark">
                        <thead>
                            <tr>
                                <th>Image</th>
                                <th>Codigo</th>
                                <th>Nombre</th>
                                <th>Descripcion</th>
                                <th>Categoria</th>
                                <th colspan="4"></th>
                            </tr>    
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $productos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $prod): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                            <tr>
                                <td>
                                    <img src="<?php echo e(url('products/small',$prod->image)); ?>" width="50" class="rounded">
                                </td>
                                <td><?php echo e($prod->codigo); ?></td>
                                <td><?php echo e($prod->nombre); ?></td>
                                <td><?php echo e($prod->descripcion); ?></td>
                                <td><?php echo e($prod->categoria->nombre); ?></td>
                                <td>
                                    <a href="<?php echo e(route('productos.show',$prod->id)); ?>" class="btn btn-info">Ver</a>
                                </td>
                                <td>
                                    <a href="<?php echo e(route('productos.edit',$prod->id)); ?>"class="btn btn-info">Editar</a>
                                </td>
                                <td>
                                    <form action="<?php echo e(route('productos.destroy',$prod->id)); ?>" method="POST">
                                        <?php echo e(csrf_field()); ?>

                                        <input type="hidden" name="_method" value="DELETE">
                                        <button class="btn btn-danger">Borrar</button>
                                    </form>
                                </td>
                                <td>
                                    <a href="<?php echo e(route('image-gallery.show',$prod->id)); ?>" class="btn btn-info">Añadir Imagenes</a>
                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
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
