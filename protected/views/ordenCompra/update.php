<?php
/* @var $this OrdenCompraController */
/* @var $model OrdenCompra */

$this->breadcrumbs=array(
	'Orden Compras'=>array('index'),
	$model->oc_codigo=>array('view','id'=>$model->oc_codigo),
	'Update',
);

$this->menu=array(
	array('label'=>'List OrdenCompra', 'url'=>array('index')),
	array('label'=>'Create OrdenCompra', 'url'=>array('create')),
	array('label'=>'View OrdenCompra', 'url'=>array('view', 'id'=>$model->oc_codigo)),
	array('label'=>'Manage OrdenCompra', 'url'=>array('admin')),
);
?>

<h1>Update OrdenCompra <?php echo $model->oc_codigo; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>