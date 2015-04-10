<?php
/* @var $this OrdenArriendoController */
/* @var $model OrdenArriendo */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'oa_codigo'); ?>
		<?php echo $form->textField($model,'oa_codigo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tur_codigo'); ?>
		<?php echo $form->textField($model,'tur_codigo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'oa_fecha'); ?>
		<?php echo $form->textField($model,'oa_fecha'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'oa_retiro'); ?>
		<?php echo $form->textField($model,'oa_retiro'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'oa_monto_total'); ?>
		<?php echo $form->textField($model,'oa_monto_total'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'oa_monto_anticipo'); ?>
		<?php echo $form->textField($model,'oa_monto_anticipo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'oa_porc_anticipo'); ?>
		<?php echo $form->textField($model,'oa_porc_anticipo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'oa_fecha_ini'); ?>
		<?php echo $form->textField($model,'oa_fecha_ini'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'oa_fecha_fin'); ?>
		<?php echo $form->textField($model,'oa_fecha_fin'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->