<?php
/* @var $this LugarTuristicoController */
/* @var $model LugarTuristico */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'lugar_codigo'); ?>
		<?php echo $form->textField($model,'lugar_codigo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tipo_lugar_cod'); ?>
		<?php echo $form->textField($model,'tipo_lugar_cod'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'lugar_nombre'); ?>
		<?php echo $form->textField($model,'lugar_nombre',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'lugar_descripcion'); ?>
		<?php echo $form->textField($model,'lugar_descripcion',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->