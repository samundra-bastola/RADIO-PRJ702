<?php
/* @var $this BroadcastPeriodTimeController */
/* @var $model BroadcastPeriodTime */

$this->breadcrumbs=array(
	'Broadcast Period Times'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List BroadcastPeriodTime', 'url'=>array('index')),
	array('label'=>'Manage BroadcastPeriodTime', 'url'=>array('admin')),
);
?>

<h1>Create BroadcastPeriodTime</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>