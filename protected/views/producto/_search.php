<?php
/* @var $this ProductoController */
/* @var $model Producto */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'prd_codigo'); ?>
		<?php echo $form->textField($model,'prd_codigo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tip_prd_codigo'); ?>
		<?php echo $form->textField($model,'tip_prd_codigo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'prov_codigo'); ?>
		<?php echo $form->textField($model,'prov_codigo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'prd_descripcion'); ?>
		<?php echo $form->textField($model,'prd_descripcion',array('size'=>40,'maxlength'=>40)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'prd_marca'); ?>
		<?php echo $form->textField($model,'prd_marca',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'prd_precio'); ?>
		<?php echo $form->textField($model,'prd_precio'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->