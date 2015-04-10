<?php
/* @var $this LugarTuristicoController */
/* @var $model LugarTuristico */

$this->breadcrumbs=array(
	'Lugar Turisticos'=>array('index'),
	$model->lugar_codigo=>array('view','id'=>$model->lugar_codigo),
	'Update',
);

$this->menu=array(
	array('label'=>'List LugarTuristico', 'url'=>array('index')),
	array('label'=>'Create LugarTuristico', 'url'=>array('create')),
	array('label'=>'View LugarTuristico', 'url'=>array('view', 'id'=>$model->lugar_codigo)),
	array('label'=>'Manage LugarTuristico', 'url'=>array('admin')),
);
?>

<h1>Update LugarTuristico <?php echo $model->lugar_codigo; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>