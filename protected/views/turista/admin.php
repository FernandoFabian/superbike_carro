<?php
/* @var $this TuristaController */
/* @var $model Turista */

$this->breadcrumbs=array(
	'Turistas'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Turista', 'url'=>array('index')),
	array('label'=>'Create Turista', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#turista-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Turistas</h1>

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
	'id'=>'turista-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'tur_codigo',
		'tur_alias',
		'tur_nombre',
		'tur_direccion',
		'tur_telefono',
		'tur_fecha_nac',
		/*
		'tur_email',
		'tur_pass',
		'tur_nacionalidad',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
