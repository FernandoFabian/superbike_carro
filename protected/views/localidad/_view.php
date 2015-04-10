<?php
/* @var $this LocalidadController */
/* @var $data Localidad */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('loc_codigo')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->loc_codigo), array('view', 'id'=>$data->loc_codigo)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('loc_nombre')); ?>:</b>
	<?php echo CHtml::encode($data->loc_nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('loc_ubicación')); ?>:</b>
	<?php echo CHtml::encode($data->loc_ubicación); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('loc_caracteristicas')); ?>:</b>
	<?php echo CHtml::encode($data->loc_caracteristicas); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('loc_atractivos')); ?>:</b>
	<?php echo CHtml::encode($data->loc_atractivos); ?>
	<br />


</div>