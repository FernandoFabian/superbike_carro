<?php
/* @var $this TipsController */
/* @var $model Tips */

$this->breadcrumbs=array(
	'Tips'=>array('index'),
	$model->tip_codigo,
);

$this->menu=array(
	array('label'=>'List Tips', 'url'=>array('index')),
	array('label'=>'Create Tips', 'url'=>array('create')),
	array('label'=>'Update Tips', 'url'=>array('update', 'id'=>$model->tip_codigo)),
	array('label'=>'Delete Tips', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->tip_codigo),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Tips', 'url'=>array('admin')),
);
?>

<h1>View Tips #<?php echo $model->tip_codigo; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'tip_codigo',
		'tip_nombre',
		'tip_descripcion',
	),
)); ?>
