<?php
/* @var $this BroadcastPeriodController */
/* @var $model BroadcastPeriod */

$this->breadcrumbs=array(
	'Broadcast Periods'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List BroadcastPeriod', 'url'=>array('index')),
	array('label'=>'Create BroadcastPeriod', 'url'=>array('create')),
	array('label'=>'View BroadcastPeriod', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage BroadcastPeriod', 'url'=>array('admin')),
);
?>

<h1>Update BroadcastPeriod <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>