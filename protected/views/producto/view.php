<?php
/* @var $this ProductoController */
/* @var $model Producto */

$this->breadcrumbs=array(
	'Productos'=>array('index'),
	$model->prd_codigo,
);

$this->menu=array(
	array('label'=>'List Producto', 'url'=>array('index')),
	array('label'=>'Create Producto', 'url'=>array('create')),
	array('label'=>'Update Producto', 'url'=>array('update', 'id'=>$model->prd_codigo)),
	array('label'=>'Delete Producto', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->prd_codigo),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Producto', 'url'=>array('admin')),
);
?>

<h1>View Producto #<?php echo $model->prd_codigo; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'prd_codigo',
		'tip_prd_codigo',
		'prov_codigo',
		'prd_descripcion',
		'prd_marca',
		'prd_precio',
	),
)); ?>
