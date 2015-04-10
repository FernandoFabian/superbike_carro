<?php
/* @var $this TuristaController */
/* @var $data Turista */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('tur_codigo')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->tur_codigo), array('view', 'id'=>$data->tur_codigo)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tur_alias')); ?>:</b>
	<?php echo CHtml::encode($data->tur_alias); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tur_nombre')); ?>:</b>
	<?php echo CHtml::encode($data->tur_nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tur_direccion')); ?>:</b>
	<?php echo CHtml::encode($data->tur_direccion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tur_telefono')); ?>:</b>
	<?php echo CHtml::encode($data->tur_telefono); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tur_fecha_nac')); ?>:</b>
	<?php echo CHtml::encode($data->tur_fecha_nac); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tur_email')); ?>:</b>
	<?php echo CHtml::encode($data->tur_email); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('tur_pass')); ?>:</b>
	<?php echo CHtml::encode($data->tur_pass); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tur_nacionalidad')); ?>:</b>
	<?php echo CHtml::encode($data->tur_nacionalidad); ?>
	<br />

	*/ ?>

</div>