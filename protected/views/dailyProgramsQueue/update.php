<?php
/* @var $this DailyProgramsQueueController */
/* @var $model DailyProgramsQueue */

$this->breadcrumbs=array(
	'Daily Programs Queues'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List DailyProgramsQueue', 'url'=>array('index')),
	array('label'=>'Create DailyProgramsQueue', 'url'=>array('create')),
	array('label'=>'View DailyProgramsQueue', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage DailyProgramsQueue', 'url'=>array('admin')),
);
?>

<h1>Update DailyProgramsQueue <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>