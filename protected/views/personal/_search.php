<?php
/* @var $this PersonalController */
/* @var $model Personal */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'per_codigo'); ?>
		<?php echo $form->textField($model,'per_codigo',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'per_rut'); ?>
		<?php echo $form->textField($model,'per_rut',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'per_nombre'); ?>
		<?php echo $form->textField($model,'per_nombre',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'per_direccion'); ?>
		<?php echo $form->textField($model,'per_direccion',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'per_telefono'); ?>
		<?php echo $form->textField($model,'per_telefono'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'per_fecha_nac'); ?>
		<?php echo $form->textField($model,'per_fecha_nac'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'usu_email'); ?>
		<?php echo $form->textField($model,'usu_email',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'usu_pass'); ?>
		<?php echo $form->textField($model,'usu_pass',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->