<?php
/* @var $this TuristaController */
/* @var $model Turista */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'turista-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'tur_alias'); ?>
		<?php echo $form->textField($model,'tur_alias',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'tur_alias'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tur_nombre'); ?>
		<?php echo $form->textField($model,'tur_nombre',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'tur_nombre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tur_direccion'); ?>
		<?php echo $form->textField($model,'tur_direccion',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'tur_direccion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tur_telefono'); ?>
		<?php echo $form->textField($model,'tur_telefono'); ?>
		<?php echo $form->error($model,'tur_telefono'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tur_fecha_nac'); ?>
		<?php echo $form->textField($model,'tur_fecha_nac'); ?>
		<?php echo $form->error($model,'tur_fecha_nac'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tur_email'); ?>
		<?php echo $form->textField($model,'tur_email',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'tur_email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tur_pass'); ?>
		<?php echo $form->textField($model,'tur_pass',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'tur_pass'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tur_nacionalidad'); ?>
		<?php echo $form->textField($model,'tur_nacionalidad',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'tur_nacionalidad'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->