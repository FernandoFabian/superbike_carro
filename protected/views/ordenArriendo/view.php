<?php
/* @var $this OrdenArriendoController */
/* @var $model OrdenArriendo */

$this->breadcrumbs=array(
	'Orden Arriendos'=>array('index'),
	$model->oa_codigo,
);

$this->menu=array(
	array('label'=>'List OrdenArriendo', 'url'=>array('index')),
	array('label'=>'Create OrdenArriendo', 'url'=>array('create')),
	array('label'=>'Update OrdenArriendo', 'url'=>array('update', 'id'=>$model->oa_codigo)),
	array('label'=>'Delete OrdenArriendo', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->oa_codigo),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage OrdenArriendo', 'url'=>array('admin')),
);
?>

<h1>View OrdenArriendo #<?php echo $model->oa_codigo; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'oa_codigo',
		'tur_codigo',
		'oa_fecha',
		'oa_retiro',
		'oa_monto_total',
		'oa_monto_anticipo',
		'oa_porc_anticipo',
		'oa_fecha_ini',
		'oa_fecha_fin',
	),
)); ?>
