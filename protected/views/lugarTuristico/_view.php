<?php
/* @var $this LugarTuristicoController */
/* @var $data LugarTuristico */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('lugar_codigo')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->lugar_codigo), array('view', 'id'=>$data->lugar_codigo)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipo_lugar_cod')); ?>:</b>
	<?php echo CHtml::encode($data->tipo_lugar_cod); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lugar_nombre')); ?>:</b>
	<?php echo CHtml::encode($data->lugar_nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lugar_descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->lugar_descripcion); ?>
	<br />


</div>