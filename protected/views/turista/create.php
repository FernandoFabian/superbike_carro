<?php
/* @var $this TuristaController */
/* @var $model Turista */

// $this->breadcrumbs=array(
// 	'Turistas'=>array('index'),
// 	'Create',
// );

// $this->menu=array(
// 	array('label'=>'List Turista', 'url'=>array('index')),
// 	array('label'=>'Manage Turista', 'url'=>array('admin')),
// );
?>

<h1>Registrar Turista</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>