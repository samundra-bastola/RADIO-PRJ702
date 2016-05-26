<?php
/* @var $this ProgramsInPeriodController */
/* @var $model ProgramsInPeriod */

$this->breadcrumbs=array(
	'Programs In Periods'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List ProgramsInPeriod', 'url'=>array('index')),
	array('label'=>'Create ProgramsInPeriod', 'url'=>array('create')),
	array('label'=>'Update ProgramsInPeriod', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete ProgramsInPeriod', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ProgramsInPeriod', 'url'=>array('admin')),
);
?>

<h1>View ProgramsInPeriod #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'period_id',
		'program_id',
		'program_status',
		'program_asigned_date',
		'created_date',
		'created_by',
	),
)); ?>
