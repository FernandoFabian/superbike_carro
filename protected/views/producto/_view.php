<?php
/* @var $this ProductoController */
/* @var $data Producto */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('prd_codigo')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->prd_codigo), array('view', 'id'=>$data->prd_codigo)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tip_prd_codigo')); ?>:</b>
	<?php echo CHtml::encode($data->tip_prd_codigo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('prov_codigo')); ?>:</b>
	<?php echo CHtml::encode($data->prov_codigo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('prd_descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->prd_descripcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('prd_marca')); ?>:</b>
	<?php echo CHtml::encode($data->prd_marca); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('prd_precio')); ?>:</b>
	<?php echo CHtml::encode($data->prd_precio); ?>
	<br />


</div>