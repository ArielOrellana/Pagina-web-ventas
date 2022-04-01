    <?php
        $categoria=DB::table('categoria')->where([['status',1],['codigo',0]])->get();
    ?> 			
 			<h1 class="my-4">Lista Categoria</h1>
 			<div class="btn-group-vertical w-100">

 			<?php $__currentLoopData = $categoria; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php
                $sub_categories=DB::table('categoria')->select('id','nombre')->where([['codigo',$category->id],['status',1]])->get();
            ?>

 				<a class="btn btn-secondary" href="<?php echo e(route('cats',$category->id)); ?>"><?php echo e($category->nombre); ?></a>
 			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
 			</div>