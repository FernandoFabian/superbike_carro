<?php
/* @var $this OrdenCompraController */
/* @var $model OrdenCompra */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'orden-compra-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'tur_codigo'); ?>
		<?php echo $form->textField($model,'tur_codigo'); ?>
		<?php echo $form->error($model,'tur_codigo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'oc_fecha'); ?>
		<?php echo $form->textField($model,'oc_fecha'); ?>
		<?php echo $form->error($model,'oc_fecha'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'oc_retiro'); ?>
		<?php echo $form->textField($model,'oc_retiro'); ?>
		<?php echo $form->error($model,'oc_retiro'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'oc_monto_total'); ?>
		<?php echo $form->textField($model,'oc_monto_total'); ?>
		<?php echo $form->error($model,'oc_monto_total'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->