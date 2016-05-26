<?php
/* @var $this BroadcastPeriodTimeController */
/* @var $model BroadcastPeriodTime */

$this->breadcrumbs=array(
	'Broadcast Period Times'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List BroadcastPeriodTime', 'url'=>array('index')),
	array('label'=>'Create BroadcastPeriodTime', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#broadcast-period-time-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Broadcast Period Times</h1>

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
	'id'=>'broadcast-period-time-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'period_id',
		'period_time',
		'status',
		'created_by',
		'created_date',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
