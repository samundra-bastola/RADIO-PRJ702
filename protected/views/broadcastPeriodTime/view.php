<?php
/* @var $this BroadcastPeriodTimeController */
/* @var $model BroadcastPeriodTime */

$this->breadcrumbs=array(
	'Broadcast Period Times'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List BroadcastPeriodTime', 'url'=>array('index')),
	array('label'=>'Create BroadcastPeriodTime', 'url'=>array('create')),
	array('label'=>'Update BroadcastPeriodTime', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete BroadcastPeriodTime', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage BroadcastPeriodTime', 'url'=>array('admin')),
);
?>

<h1>View BroadcastPeriodTime #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'period_id',
		'period_time',
		'status',
		'created_by',
		'created_date',
	),
)); ?>
