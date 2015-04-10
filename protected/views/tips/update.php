<?php
/* @var $this TipsController */
/* @var $model Tips */

$this->breadcrumbs=array(
	'Tips'=>array('index'),
	$model->tip_codigo=>array('view','id'=>$model->tip_codigo),
	'Update',
);

$this->menu=array(
	array('label'=>'List Tips', 'url'=>array('index')),
	array('label'=>'Create Tips', 'url'=>array('create')),
	array('label'=>'View Tips', 'url'=>array('view', 'id'=>$model->tip_codigo)),
	array('label'=>'Manage Tips', 'url'=>array('admin')),
);
?>

<h1>Update Tips <?php echo $model->tip_codigo; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>