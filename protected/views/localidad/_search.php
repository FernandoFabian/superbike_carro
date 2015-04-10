<?php
/* @var $this LocalidadController */
/* @var $model Localidad */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'loc_codigo'); ?>
		<?php echo $form->textField($model,'loc_codigo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'loc_nombre'); ?>
		<?php echo $form->textField($model,'loc_nombre',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'loc_ubicación'); ?>
		<?php echo $form->textField($model,'loc_ubicación',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'loc_caracteristicas'); ?>
		<?php echo $form->textField($model,'loc_caracteristicas',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'loc_atractivos'); ?>
		<?php echo $form->textField($model,'loc_atractivos',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->