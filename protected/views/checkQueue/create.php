<?php
/* @var $this CheckQueueController */
/* @var $model CheckQueue */

$this->breadcrumbs=array(
	'Check Queues'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List CheckQueue', 'url'=>array('index')),
	array('label'=>'Manage CheckQueue', 'url'=>array('admin')),
);
?>

<h1>Create CheckQueue</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>