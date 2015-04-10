<?php
/* @var $this RutaController */
/* @var $model Ruta */

$this->breadcrumbs=array(
	'Rutas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Ruta', 'url'=>array('index')),
	array('label'=>'Manage Ruta', 'url'=>array('admin')),
);
?>

<h1>Create Ruta</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>