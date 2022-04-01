<?php $__env->startSection('title','Nuevo producto'); ?>
<?php echo $__env->make('layouts.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->make('layouts.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php if(Auth::user()->hasRole('admin')): ?>
<div class="container">
  <div class="content">
    <div class="title m-b-md">
      <h1>Nuevo Producto</h1>
    </div>
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="<?php echo e(route('productos.index')); ?>">Productos</a>
      </li>
      <li class="breadcrumb-item active">Nuevo Producto</li>
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
        <br>
        <form method="POST" action="<?php echo e(route('productos.store')); ?>" enctype="multipart/form-data"> 
          <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
        <?php echo e(csrf_field()); ?>

          <div class="form-group">
              <label>Codigo</label>
              <br>
              <input type="text" class="form-control" placeholder="codigo" name="codigo">
          </div>  
          <div class="form-group">
              <label>Nombre</label>
              <br>
              <input type="text" class="form-control" placeholder="Nombre" name="nombre">
          </div>
          <div class="form-group">
              <label>descripcion</label>
              <br>
              <input type="text" class="form-control" placeholder="descripcion" name="descripcion">
          </div>
          <div class="form-group">
              <label>modelo</label>
              <br>
              <input type="text" class="form-control" placeholder="modelo" name="modelo">
          </div>
          <div class="form-group">
              <label>stock</label>
              <br>
              <input type="text" class="form-control" placeholder="stock" name="stock">
          </div>
          <div class="form-group">
              <label>Precio</label>
              <br>
              <input type="text" class="form-control" placeholder="precio" name="precio">
          </div> 
          <div class="form-group">
              <label>categoria</label>
              <br>
              <select name="categoria_id" id="categoria_id" class="form-control">
                <option value="">-- escoja categoria --</option>
                <?php $__currentLoopData = $categoria; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categoria): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <option value="<?php echo e($categoria['id']); ?>"><?php echo e($categoria['nombre']); ?></option>                
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </select>
          </div>         
                    <div class="form-group">
                        <label class="control-label">Image upload</label>
                        <div class="controls">
                            <input type="file" name="image" id="image"/>
                            <span class="text-danger"><?php echo e($errors->first('image')); ?></span>
                        </div>
                    </div>
          <div class="form-group">
              <button type="submit" class="btn btn-dark">Guardar</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<?php else: ?> 
<!--user-->

<META HTTP-EQUIV="REFRESH" CONTENT="0;URL=<?php echo e(url('/')); ?>">
<?php endif; ?>
<?php echo $__env->make('layouts.fin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>