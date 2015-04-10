<?php
/* @var $this OrdenArriendoController */
/* @var $model OrdenArriendo */

$this->breadcrumbs=array(
	'Orden Arriendos'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List OrdenArriendo', 'url'=>array('index')),
	array('label'=>'Create OrdenArriendo', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#orden-arriendo-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Orden Arriendos</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'orden-arriendo-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'oa_codigo',
		'tur_codigo',
		'oa_fecha',
		'oa_retiro',
		'oa_monto_total',
		'oa_monto_anticipo',
		/*
		'oa_porc_anticipo',
		'oa_fecha_ini',
		'oa_fecha_fin',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
