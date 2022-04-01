<?php if(Session::has('info')): ?>
<div class="alert alert-info">
	<button type="button" class="close" data-dimiss="alert">
		
	</button>
	<?php echo e(Session::get('info')); ?>

</div>
<?php endif; ?>