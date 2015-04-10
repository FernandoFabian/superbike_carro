<?php
/* @var $this OrdenArriendoController */
/* @var $model OrdenArriendo */

$this->breadcrumbs=array(
	'Orden Arriendos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List OrdenArriendo', 'url'=>array('index')),
	array('label'=>'Manage OrdenArriendo', 'url'=>array('admin')),
);
?>

<h1>Create OrdenArriendo</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>