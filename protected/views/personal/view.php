<?php
/* @var $this PersonalController */
/* @var $model Personal */

$this->breadcrumbs=array(
	'Personals'=>array('index'),
	$model->per_codigo,
);

$this->menu=array(
	array('label'=>'List Personal', 'url'=>array('index')),
	array('label'=>'Create Personal', 'url'=>array('create')),
	array('label'=>'Update Personal', 'url'=>array('update', 'id'=>$model->per_codigo)),
	array('label'=>'Delete Personal', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->per_codigo),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Personal', 'url'=>array('admin')),
);
?>

<h1>View Personal #<?php echo $model->per_codigo; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'per_codigo',
		'per_rut',
		'per_nombre',
		'per_direccion',
		'per_telefono',
		'per_fecha_nac',
		'usu_email',
		'usu_pass',
	),
)); ?>
