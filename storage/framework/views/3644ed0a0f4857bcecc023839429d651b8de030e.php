<?php $__env->startSection('title','Carrito'); ?>
<?php echo $__env->make('layouts.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('index.barra', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
 <div class="container">
  	<div class="row">
	    <div class="col-lg-3 mb-4">
	      <?php echo $__env->make('index.categoria', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	    </div>
	    <div class="col-lg-9 mb-4">
	    	<h1 class="my-4">Carrito</h1>
	    	<table border="1" class="table table-striped table-dark">
			  <thead>
			  	
			    <tr>
			    	
			      <th>id</th>
			      <th>Productos</th>
			      <th>Precio</th>
			      <th>cantidad</th>
			      <th colspan="1"></th>
			    </tr>
			  </thead>
			  <tbody>
			  	
			  	<?php $__currentLoopData = $product_id; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $prod): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			    <tr>
			      <td><?php echo e($prod->id); ?></td>
			      <td><?php echo e($prod->product_name); ?></td>
			      <td><?php echo e($prod->price); ?></td>
			      <td><?php echo e($prod->qty); ?></td>
			      <td>
					<a class="btn btn-danger" href="<?php echo e(url('/cart/destroy',$prod->id)); ?>">Borrar<i class="fa fa-times"></i></a>
				   </td>
			      
			    </tr>
			    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			  </tbody>
			</table>
			<div class="form-group">
				<div class="row">
					<div class="col-auto ml-auto">
						<button>comprar</button>
					</div>
				</div>
			</div>
	    </div>
	</div>
</div>
<?php echo $__env->make('layouts.fin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>