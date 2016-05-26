<?php
/* @var $this CheckQueueController */
/* @var $model CheckQueue */

$this->breadcrumbs=array(
	'Check Queues'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List CheckQueue', 'url'=>array('index')),
	array('label'=>'Create CheckQueue', 'url'=>array('create')),
	array('label'=>'Update CheckQueue', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete CheckQueue', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage CheckQueue', 'url'=>array('admin')),
);
?>

<h1>View CheckQueue #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'period_id',
		'time_id',
		'compleated_time',
		'program_id',
		'status',
	),
)); ?>
