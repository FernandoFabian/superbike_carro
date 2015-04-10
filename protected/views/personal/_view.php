<?php
/* @var $this PersonalController */
/* @var $data Personal */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('per_codigo')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->per_codigo), array('view', 'id'=>$data->per_codigo)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('per_rut')); ?>:</b>
	<?php echo CHtml::encode($data->per_rut); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('per_nombre')); ?>:</b>
	<?php echo CHtml::encode($data->per_nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('per_direccion')); ?>:</b>
	<?php echo CHtml::encode($data->per_direccion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('per_telefono')); ?>:</b>
	<?php echo CHtml::encode($data->per_telefono); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('per_fecha_nac')); ?>:</b>
	<?php echo CHtml::encode($data->per_fecha_nac); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('usu_email')); ?>:</b>
	<?php echo CHtml::encode($data->usu_email); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('usu_pass')); ?>:</b>
	<?php echo CHtml::encode($data->usu_pass); ?>
	<br />

	*/ ?>

</div>