<?php
/* @var $this TuristaController */
/* @var $model Turista */

// $this->breadcrumbs=array(
// 	'Turistas'=>array('index'),
// 	$model->tur_codigo,
// );

$this->menu=array(
	array('label'=>'List Turista', 'url'=>array('index')),
	array('label'=>'Create Turista', 'url'=>array('create')),
	array('label'=>'Update Turista', 'url'=>array('update', 'id'=>$model->tur_codigo)),
	array('label'=>'Delete Turista', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->tur_codigo),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Turista', 'url'=>array('admin')),
);
?>

<h1>Sus Datos Grabados con éxito <?php  ?></h1>

<?php 
// $this->widget('zii.widgets.CDetailView', array(
// 	'data'=>$model,
// 	'attributes'=>array(
		
// 		'tur_alias',
		
// 		'tur_pass',
		
// 	),

// )); 

?>
<a href="index.php?r=site/login">Ingresar</a>