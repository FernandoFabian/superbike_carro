<?php
/* @var $this TipsController */
/* @var $data Tips */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('tip_codigo')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->tip_codigo), array('view', 'id'=>$data->tip_codigo)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tip_nombre')); ?>:</b>
	<?php echo CHtml::encode($data->tip_nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tip_descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->tip_descripcion); ?>
	<br />


</div>