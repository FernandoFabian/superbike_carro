<?php
/* @var $this PersonalController */
/* @var $model Personal */

$this->breadcrumbs=array(
	'Personals'=>array('index'),
	$model->per_codigo=>array('view','id'=>$model->per_codigo),
	'Update',
);

$this->menu=array(
	array('label'=>'List Personal', 'url'=>array('index')),
	array('label'=>'Create Personal', 'url'=>array('create')),
	array('label'=>'View Personal', 'url'=>array('view', 'id'=>$model->per_codigo)),
	array('label'=>'Manage Personal', 'url'=>array('admin')),
);
?>

<h1>Update Personal <?php echo $model->per_codigo; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>