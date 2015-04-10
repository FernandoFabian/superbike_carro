<?php
/* @var $this PersonalController */
/* @var $model Personal */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'personal-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'per_rut'); ?>
		<?php echo $form->textField($model,'per_rut',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'per_rut'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'per_nombre'); ?>
		<?php echo $form->textField($model,'per_nombre',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'per_nombre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'per_direccion'); ?>
		<?php echo $form->textField($model,'per_direccion',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'per_direccion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'per_telefono'); ?>
		<?php echo $form->textField($model,'per_telefono'); ?>
		<?php echo $form->error($model,'per_telefono'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'per_fecha_nac'); ?>
		<?php echo $form->textField($model,'per_fecha_nac'); ?>
		<?php echo $form->error($model,'per_fecha_nac'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'usu_email'); ?>
		<?php echo $form->textField($model,'usu_email',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'usu_email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'usu_pass'); ?>
		<?php echo $form->textField($model,'usu_pass',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'usu_pass'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->