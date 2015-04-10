<?php
/* @var $this ProveedorController */
/* @var $model Proveedor */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'prov_codigo'); ?>
		<?php echo $form->textField($model,'prov_codigo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'prov_nombre'); ?>
		<?php echo $form->textField($model,'prov_nombre',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'prov_giro'); ?>
		<?php echo $form->textField($model,'prov_giro',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'prov_telefono'); ?>
		<?php echo $form->textField($model,'prov_telefono'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'prov_email'); ?>
		<?php echo $form->textField($model,'prov_email',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->