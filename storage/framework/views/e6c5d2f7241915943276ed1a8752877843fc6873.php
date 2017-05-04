<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div style="padding-top:10px;" class="pull-left">
                <h2>Products CRUD</h2>
            </div>
            <div style="padding-top:10px;" class="pull-right">
                <a class="btn btn-success" href="<?php echo e(route('productCRUD.create')); ?>"> Create New Product</a>
            </div>
        </div>
    </div>
    <?php if($message = Session::get('success')): ?>
        <div class="alert alert-success">
            <p><?php echo e($message); ?></p>
        </div>
    <?php endif; ?>
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Amazon Product Link</th>
			<th>Amazon Price</th>
			<th>Flipkart Product Link</th>
			<th>Flipkart Price</th>
            <th width="280px">Action</th>
        </tr>
    <?php foreach($products as $product): ?>
    <tr>
        <td><?php echo e(++$i); ?></td>
        <td><?php echo e($product->name); ?></td>
        <td><?php echo e($product->Amazon_Product_Link); ?></td>
		<td><?php echo e($product->Amazon_Price); ?></td>
		<td><?php echo e($product->Flipkart_Product_Link); ?></td>
		<td><?php echo e($product->Flipkart_Price); ?></td>
        <td>
            <a class="btn btn-info" href="<?php echo e(route('productCRUD.show',$product->id)); ?>">Show</a>
            <a class="btn btn-primary" href="<?php echo e(route('productCRUD.edit',$product->id)); ?>">Edit</a>
            <?php echo Form::open(['method' => 'DELETE','route' => ['productCRUD.destroy', $product->id],'style'=>'display:inline']); ?>

            <?php echo Form::submit('Delete', ['class' => 'btn btn-danger']); ?>

            <?php echo Form::close(); ?>

        </td>
    </tr>
    <?php endforeach; ?>
    </table>
    <?php echo $products->render(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>