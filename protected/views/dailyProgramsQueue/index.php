<?php
/* @var $this DailyProgramsQueueController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Daily Programs Queues',
);

$this->menu=array(
	array('label'=>'Create DailyProgramsQueue', 'url'=>array('create')),
	array('label'=>'Manage DailyProgramsQueue', 'url'=>array('admin')),
);
?>

<h1>Daily Programs Queues</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
