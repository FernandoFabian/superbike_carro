<?php
/* @var $this OrdenCompraController */
/* @var $data OrdenCompra */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('oc_codigo')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->oc_codigo), array('view', 'id'=>$data->oc_codigo)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tur_codigo')); ?>:</b>
	<?php echo CHtml::encode($data->tur_codigo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('oc_fecha')); ?>:</b>
	<?php echo CHtml::encode($data->oc_fecha); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('oc_retiro')); ?>:</b>
	<?php echo CHtml::encode($data->oc_retiro); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('oc_monto_total')); ?>:</b>
	<?php echo CHtml::encode($data->oc_monto_total); ?>
	<br />


</div>