<?php
/* @var $this OrdenArriendoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Orden Arriendos',
);

$this->menu=array(
	array('label'=>'Create OrdenArriendo', 'url'=>array('create')),
	array('label'=>'Manage OrdenArriendo', 'url'=>array('admin')),
);
?>

<h1>Orden Arriendos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
