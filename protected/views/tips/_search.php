<?php
/* @var $this TipsController */
/* @var $model Tips */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'tip_codigo'); ?>
		<?php echo $form->textField($model,'tip_codigo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tip_nombre'); ?>
		<?php echo $form->textField($model,'tip_nombre',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tip_descripcion'); ?>
		<?php echo $form->textField($model,'tip_descripcion',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->