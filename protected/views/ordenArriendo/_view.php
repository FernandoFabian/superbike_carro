<?php
/* @var $this OrdenArriendoController */
/* @var $data OrdenArriendo */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('oa_codigo')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->oa_codigo), array('view', 'id'=>$data->oa_codigo)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tur_codigo')); ?>:</b>
	<?php echo CHtml::encode($data->tur_codigo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('oa_fecha')); ?>:</b>
	<?php echo CHtml::encode($data->oa_fecha); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('oa_retiro')); ?>:</b>
	<?php echo CHtml::encode($data->oa_retiro); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('oa_monto_total')); ?>:</b>
	<?php echo CHtml::encode($data->oa_monto_total); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('oa_monto_anticipo')); ?>:</b>
	<?php echo CHtml::encode($data->oa_monto_anticipo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('oa_porc_anticipo')); ?>:</b>
	<?php echo CHtml::encode($data->oa_porc_anticipo); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('oa_fecha_ini')); ?>:</b>
	<?php echo CHtml::encode($data->oa_fecha_ini); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('oa_fecha_fin')); ?>:</b>
	<?php echo CHtml::encode($data->oa_fecha_fin); ?>
	<br />

	*/ ?>

</div>