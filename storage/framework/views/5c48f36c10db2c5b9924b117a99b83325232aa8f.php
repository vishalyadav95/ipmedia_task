<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2 style="padding-top:10px;">Add New Product</h2>
            </div>
            <div style="padding-top:10px;" class="pull-right">
                <a class="btn btn-primary" href="<?php echo e(route('productCRUD.index')); ?>"> Back</a>
            </div>
        </div>
    </div>
    <?php if(count($errors) > 0): ?>
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                <?php foreach($errors->all() as $error): ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php endif; ?>
    <?php echo Form::open(array('route' => 'productCRUD.store','method'=>'POST')); ?>

         <?php echo $__env->make('ProductCRUD.form', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>