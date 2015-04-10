<?php
/* @var $this RutaController */
/* @var $model Ruta */

$this->breadcrumbs=array(
	'Rutas'=>array('index'),
	$model->ruta_codigo=>array('view','id'=>$model->ruta_codigo),
	'Update',
);

$this->menu=array(
	array('label'=>'List Ruta', 'url'=>array('index')),
	array('label'=>'Create Ruta', 'url'=>array('create')),
	array('label'=>'View Ruta', 'url'=>array('view', 'id'=>$model->ruta_codigo)),
	array('label'=>'Manage Ruta', 'url'=>array('admin')),
);
?>

<h1>Update Ruta <?php echo $model->ruta_codigo; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>