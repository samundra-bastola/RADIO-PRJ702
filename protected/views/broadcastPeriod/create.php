<?php
/* @var $this BroadcastPeriodController */
/* @var $model BroadcastPeriod */

$this->breadcrumbs=array(
	'Broadcast Periods'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List BroadcastPeriod', 'url'=>array('index')),
	array('label'=>'Manage BroadcastPeriod', 'url'=>array('admin')),
);
?>

<h1>Create BroadcastPeriod</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>