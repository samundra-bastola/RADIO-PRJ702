<?php
/* @var $this BroadcastPeriodTimeController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Broadcast Period Times',
);

$this->menu=array(
	array('label'=>'Create BroadcastPeriodTime', 'url'=>array('create')),
	array('label'=>'Manage BroadcastPeriodTime', 'url'=>array('admin')),
);
?>

<h1>Broadcast Period Times</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
