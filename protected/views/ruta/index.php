<?php
/* @var $this RutaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Rutas',
);

$this->menu=array(
	array('label'=>'Create Ruta', 'url'=>array('create')),
	array('label'=>'Manage Ruta', 'url'=>array('admin')),
);
?>

<h1>Rutas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
