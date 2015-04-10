<?php
/* @var $this OrdenCompraController */
/* @var $model OrdenCompra */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'oc_codigo'); ?>
		<?php echo $form->textField($model,'oc_codigo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tur_codigo'); ?>
		<?php echo $form->textField($model,'tur_codigo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'oc_fecha'); ?>
		<?php echo $form->textField($model,'oc_fecha'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'oc_retiro'); ?>
		<?php echo $form->textField($model,'oc_retiro'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'oc_monto_total'); ?>
		<?php echo $form->textField($model,'oc_monto_total'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->