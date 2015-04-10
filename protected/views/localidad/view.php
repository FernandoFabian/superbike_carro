<?php
/* @var $this LocalidadController */
/* @var $model Localidad */

$this->breadcrumbs=array(
	'Localidads'=>array('index'),
	$model->loc_codigo,
);

$this->menu=array(
	array('label'=>'List Localidad', 'url'=>array('index')),
	array('label'=>'Create Localidad', 'url'=>array('create')),
	array('label'=>'Update Localidad', 'url'=>array('update', 'id'=>$model->loc_codigo)),
	array('label'=>'Delete Localidad', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->loc_codigo),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Localidad', 'url'=>array('admin')),
);
?>

<h1>View Localidad #<?php echo $model->loc_codigo; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'loc_codigo',
		'loc_nombre',
		'loc_ubicación',
		'loc_caracteristicas',
		'loc_atractivos',
	),
)); ?>
