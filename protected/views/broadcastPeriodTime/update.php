<?php
/* @var $this BroadcastPeriodTimeController */
/* @var $model BroadcastPeriodTime */

$this->breadcrumbs=array(
	'Broadcast Period Times'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List BroadcastPeriodTime', 'url'=>array('index')),
	array('label'=>'Create BroadcastPeriodTime', 'url'=>array('create')),
	array('label'=>'View BroadcastPeriodTime', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage BroadcastPeriodTime', 'url'=>array('admin')),
);
?>

<h1>Update BroadcastPeriodTime <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>