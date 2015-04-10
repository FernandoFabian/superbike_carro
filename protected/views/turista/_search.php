<?php
/* @var $this TuristaController */
/* @var $model Turista */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'tur_codigo'); ?>
		<?php echo $form->textField($model,'tur_codigo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tur_alias'); ?>
		<?php echo $form->textField($model,'tur_alias',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tur_nombre'); ?>
		<?php echo $form->textField($model,'tur_nombre',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tur_direccion'); ?>
		<?php echo $form->textField($model,'tur_direccion',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tur_telefono'); ?>
		<?php echo $form->textField($model,'tur_telefono'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tur_fecha_nac'); ?>
		<?php echo $form->textField($model,'tur_fecha_nac'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tur_email'); ?>
		<?php echo $form->textField($model,'tur_email',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tur_pass'); ?>
		<?php echo $form->textField($model,'tur_pass',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tur_nacionalidad'); ?>
		<?php echo $form->textField($model,'tur_nacionalidad',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->