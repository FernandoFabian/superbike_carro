<?php
/* @var $this RutaController */
/* @var $model Ruta */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'ruta_codigo'); ?>
		<?php echo $form->textField($model,'ruta_codigo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ruta_nombre'); ?>
		<?php echo $form->textField($model,'ruta_nombre',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ruta_kms'); ?>
		<?php echo $form->textField($model,'ruta_kms'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ruta_complejidad'); ?>
		<?php echo $form->textField($model,'ruta_complejidad',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ruta_dias'); ?>
		<?php echo $form->textField($model,'ruta_dias'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->