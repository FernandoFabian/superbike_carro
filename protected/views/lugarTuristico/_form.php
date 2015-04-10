<?php
/* @var $this LugarTuristicoController */
/* @var $model LugarTuristico */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'lugar-turistico-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'tipo_lugar_cod'); ?>
		<?php echo $form->textField($model,'tipo_lugar_cod'); ?>
		<?php echo $form->error($model,'tipo_lugar_cod'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'lugar_nombre'); ?>
		<?php echo $form->textField($model,'lugar_nombre',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'lugar_nombre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'lugar_descripcion'); ?>
		<?php echo $form->textField($model,'lugar_descripcion',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'lugar_descripcion'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->