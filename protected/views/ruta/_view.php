<?php
/* @var $this RutaController */
/* @var $data Ruta */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ruta_codigo')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ruta_codigo), array('view', 'id'=>$data->ruta_codigo)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ruta_nombre')); ?>:</b>
	<?php echo CHtml::encode($data->ruta_nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ruta_kms')); ?>:</b>
	<?php echo CHtml::encode($data->ruta_kms); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ruta_complejidad')); ?>:</b>
	<?php echo CHtml::encode($data->ruta_complejidad); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ruta_dias')); ?>:</b>
	<?php echo CHtml::encode($data->ruta_dias); ?>
	<br />


</div>