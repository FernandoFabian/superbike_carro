<?php
/* @var $this LugarTuristicoController */
/* @var $model LugarTuristico */

$this->breadcrumbs=array(
	'Lugar Turisticos'=>array('index'),
	$model->lugar_codigo,
);

$this->menu=array(
	array('label'=>'List LugarTuristico', 'url'=>array('index')),
	array('label'=>'Create LugarTuristico', 'url'=>array('create')),
	array('label'=>'Update LugarTuristico', 'url'=>array('update', 'id'=>$model->lugar_codigo)),
	array('label'=>'Delete LugarTuristico', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->lugar_codigo),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage LugarTuristico', 'url'=>array('admin')),
);
?>

<h1>View LugarTuristico #<?php echo $model->lugar_codigo; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'lugar_codigo',
		'tipo_lugar_cod',
		'lugar_nombre',
		'lugar_descripcion',
	),
)); ?>
