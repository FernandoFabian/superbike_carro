<?php
/* @var $this ProductoController */
/* @var $model Producto */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'producto-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'tip_prd_codigo'); ?>
		<?php echo $form->textField($model,'tip_prd_codigo'); ?>
		<?php echo $form->error($model,'tip_prd_codigo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'prov_codigo'); ?>
		<?php echo $form->textField($model,'prov_codigo'); ?>
		<?php echo $form->error($model,'prov_codigo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'prd_descripcion'); ?>
		<?php echo $form->textField($model,'prd_descripcion',array('size'=>40,'maxlength'=>40)); ?>
		<?php echo $form->error($model,'prd_descripcion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'prd_marca'); ?>
		<?php echo $form->textField($model,'prd_marca',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'prd_marca'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'prd_precio'); ?>
		<?php echo $form->textField($model,'prd_precio'); ?>
		<?php echo $form->error($model,'prd_precio'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->