<?php
/* @var $this DailyProgramsQueueController */
/* @var $model DailyProgramsQueue */

$this->breadcrumbs=array(
	'Daily Programs Queues'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List DailyProgramsQueue', 'url'=>array('index')),
	array('label'=>'Manage DailyProgramsQueue', 'url'=>array('admin')),
);
?>

<h1>Create DailyProgramsQueue</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>