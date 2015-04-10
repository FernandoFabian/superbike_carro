<?php
/* @var $this OrdenArriendoController */
/* @var $model OrdenArriendo */

$this->breadcrumbs=array(
	'Orden Arriendos'=>array('index'),
	$model->oa_codigo=>array('view','id'=>$model->oa_codigo),
	'Update',
);

$this->menu=array(
	array('label'=>'List OrdenArriendo', 'url'=>array('index')),
	array('label'=>'Create OrdenArriendo', 'url'=>array('create')),
	array('label'=>'View OrdenArriendo', 'url'=>array('view', 'id'=>$model->oa_codigo)),
	array('label'=>'Manage OrdenArriendo', 'url'=>array('admin')),
);
?>

<h1>Update OrdenArriendo <?php echo $model->oa_codigo; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>