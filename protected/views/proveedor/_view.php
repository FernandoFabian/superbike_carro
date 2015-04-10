<?php
/* @var $this ProveedorController */
/* @var $data Proveedor */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('prov_codigo')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->prov_codigo), array('view', 'id'=>$data->prov_codigo)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('prov_nombre')); ?>:</b>
	<?php echo CHtml::encode($data->prov_nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('prov_giro')); ?>:</b>
	<?php echo CHtml::encode($data->prov_giro); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('prov_telefono')); ?>:</b>
	<?php echo CHtml::encode($data->prov_telefono); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('prov_email')); ?>:</b>
	<?php echo CHtml::encode($data->prov_email); ?>
	<br />


</div>