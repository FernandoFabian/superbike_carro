<?php
/* @var $this TuristaController */
/* @var $model Turista */

$this->breadcrumbs=array(
	'Turistas'=>array('index'),
	$model->tur_codigo=>array('view','id'=>$model->tur_codigo),
	'Update',
);

$this->menu=array(
	array('label'=>'List Turista', 'url'=>array('index')),
	array('label'=>'Create Turista', 'url'=>array('create')),
	array('label'=>'View Turista', 'url'=>array('view', 'id'=>$model->tur_codigo)),
	array('label'=>'Manage Turista', 'url'=>array('admin')),
);
?>

<h1>Update Turista <?php echo $model->tur_codigo; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>