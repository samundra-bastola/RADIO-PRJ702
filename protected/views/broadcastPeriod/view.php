<?php
/* @var $this BroadcastPeriodController */
/* @var $model BroadcastPeriod */

$this->breadcrumbs=array(
	'Broadcast Periods'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List BroadcastPeriod', 'url'=>array('index')),
	array('label'=>'Create BroadcastPeriod', 'url'=>array('create')),
	array('label'=>'Update BroadcastPeriod', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete BroadcastPeriod', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage BroadcastPeriod', 'url'=>array('admin')),
);
?>

<h1>View BroadcastPeriod #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'created_by',
		'created_date',
	),
)); ?>
