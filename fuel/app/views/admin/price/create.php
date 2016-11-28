<h2>New Price</h2>
<br>
<?php echo Form::open(array("class"=>"form-horizontal")); ?>

<fieldset>

	<div class="form-group">
		<?php echo Form::label('San pham', 'product_id', array('class'=>'control-label')); ?>
		<div class="input">
			<?php echo Form::select('product_id', Input::post('product_id', isset($price) ? $price->product_id : ""), $sanphams, array('class' => 'col-md-8 form-control')); ?>
			
		</div>
	</div>

	<div class="form-group">
		<?php echo Form::label('Price', 'price', array('class'=>'control-label')); ?>

		<?php echo Form::input('price', Input::post('price', isset($price) ? $price->price : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Price')); ?>

	</div>
	<div class="form-group">
		<?php echo Form::label('Number quantity', 'quantity', array('class'=>'control-label')); ?>

		<?php echo Form::input('quantity', Input::post('quantity', isset($price) ? $price->quantity : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'quantity')); ?>

	</div>
	<div class="form-group">
		<?php echo Form::label('Time start', 'time_start', array('class'=>'control-label')); ?>

		<?php echo Form::input('time_start', Input::post('time_start', isset($price) ? $price->time_start : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Time start')); ?>

	</div>
	<div class="form-group">
		<?php echo Form::label('Time end', 'time_end', array('class'=>'control-label')); ?>

		<?php echo Form::input('time_end', Input::post('time_end', isset($price) ? $price->time_end : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Time end')); ?>

	</div>

	<div class="form-group">
		<label class='control-label'>&nbsp;</label>
		<?php echo Form::submit('submit', 'Save', array('class' => 'btn btn-primary')); ?>		
	</div>
</fieldset>
<?php echo Form::close(); ?>



<p><?php echo Html::anchor('admin/price', 'Back'); ?></p>

