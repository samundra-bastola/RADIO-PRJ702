<?php
/* @var $this ProgramsController */
/* @var $model Programs */

$this->breadcrumbs=array(
	'Programs'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Programs', 'url'=>array('index')),
	array('label'=>'Create Programs', 'url'=>array('create')),
	array('label'=>'Update Programs', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Programs', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Programs', 'url'=>array('admin')),
);
?>

<h1>View Programs #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'program_name',
		'program_type',
		'program_duration',
		'program_host',
		'program_sponser',
		'program_photo',
		'created_date',
		'created_by',
	),
)); ?>
