<?php
/* @var $this TuristaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Turistas',
);

$this->menu=array(
	array('label'=>'Create Turista', 'url'=>array('create')),
	array('label'=>'Manage Turista', 'url'=>array('admin')),
);
?>

<h1>Turistas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
