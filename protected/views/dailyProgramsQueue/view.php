<?php
/* @var $this DailyProgramsQueueController */
/* @var $model DailyProgramsQueue */

$this->breadcrumbs=array(
	'Daily Programs Queues'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List DailyProgramsQueue', 'url'=>array('index')),
	array('label'=>'Create DailyProgramsQueue', 'url'=>array('create')),
	array('label'=>'Update DailyProgramsQueue', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete DailyProgramsQueue', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage DailyProgramsQueue', 'url'=>array('admin')),
);
?>

<h1>View DailyProgramsQueue #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'period_id',
		'queue_date',
		'time_id',
		'program_id',
		'queue_serial',
		'program_status',
		'created_by',
		'created_date',
	),
)); ?>
