<?php
/* @var $this RutaController */
/* @var $model Ruta */

$this->breadcrumbs=array(
	'Rutas'=>array('index'),
	$model->ruta_codigo,
);

$this->menu=array(
	array('label'=>'List Ruta', 'url'=>array('index')),
	array('label'=>'Create Ruta', 'url'=>array('create')),
	array('label'=>'Update Ruta', 'url'=>array('update', 'id'=>$model->ruta_codigo)),
	array('label'=>'Delete Ruta', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ruta_codigo),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Ruta', 'url'=>array('admin')),
);
?>

<h1>View Ruta #<?php echo $model->ruta_codigo; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ruta_codigo',
		'ruta_nombre',
		'ruta_kms',
		'ruta_complejidad',
		'ruta_dias',
	),
)); ?>
