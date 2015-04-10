<?php
/* @var $this ProveedorController */
/* @var $model Proveedor */

$this->breadcrumbs=array(
	'Proveedors'=>array('index'),
	$model->prov_codigo=>array('view','id'=>$model->prov_codigo),
	'Update',
);

$this->menu=array(
	array('label'=>'List Proveedor', 'url'=>array('index')),
	array('label'=>'Create Proveedor', 'url'=>array('create')),
	array('label'=>'View Proveedor', 'url'=>array('view', 'id'=>$model->prov_codigo)),
	array('label'=>'Manage Proveedor', 'url'=>array('admin')),
);
?>

<h1>Update Proveedor <?php echo $model->prov_codigo; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>