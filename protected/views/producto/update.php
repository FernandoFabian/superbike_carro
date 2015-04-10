<?php
/* @var $this ProductoController */
/* @var $model Producto */

$this->breadcrumbs=array(
	'Productos'=>array('index'),
	$model->prd_codigo=>array('view','id'=>$model->prd_codigo),
	'Update',
);

$this->menu=array(
	array('label'=>'List Producto', 'url'=>array('index')),
	array('label'=>'Create Producto', 'url'=>array('create')),
	array('label'=>'View Producto', 'url'=>array('view', 'id'=>$model->prd_codigo)),
	array('label'=>'Manage Producto', 'url'=>array('admin')),
);
?>

<h1>Update Producto <?php echo $model->prd_codigo; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>