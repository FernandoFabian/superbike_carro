<?php
/* @var $this RutaController */
/* @var $model Ruta */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'ruta-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'ruta_nombre'); ?>
		<?php echo $form->textField($model,'ruta_nombre',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'ruta_nombre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ruta_kms'); ?>
		<?php echo $form->textField($model,'ruta_kms'); ?>
		<?php echo $form->error($model,'ruta_kms'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ruta_complejidad'); ?>
		<?php echo $form->textField($model,'ruta_complejidad',array('size'=>5,'maxlength'=>5)); ?>
		<?php echo $form->error($model,'ruta_complejidad'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ruta_dias'); ?>
		<?php echo $form->textField($model,'ruta_dias'); ?>
		<?php echo $form->error($model,'ruta_dias'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->