<div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                <?php echo Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')); ?>

            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Amazon Product Link:</strong>
                <?php echo Form::text('Amazon_Product_Link', null, array('placeholder' => 'Amazon Product Link','class' => 'form-control')); ?>

            </div>
        </div>
		<div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Flipkart Product Link:</strong>
                <?php echo Form::text('Flipkart_Product_Link', null, array('placeholder' => 'Flipkart Product Link','class' => 'form-control')); ?>

            </div>
        </div>
		
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>