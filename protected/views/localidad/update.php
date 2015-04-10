<?php
/* @var $this LocalidadController */
/* @var $model Localidad */

$this->breadcrumbs=array(
	'Localidads'=>array('index'),
	$model->loc_codigo=>array('view','id'=>$model->loc_codigo),
	'Update',
);

$this->menu=array(
	array('label'=>'List Localidad', 'url'=>array('index')),
	array('label'=>'Create Localidad', 'url'=>array('create')),
	array('label'=>'View Localidad', 'url'=>array('view', 'id'=>$model->loc_codigo)),
	array('label'=>'Manage Localidad', 'url'=>array('admin')),
);
?>

<h1>Update Localidad <?php echo $model->loc_codigo; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>