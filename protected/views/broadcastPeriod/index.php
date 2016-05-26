<?php
/* @var $this BroadcastPeriodController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Broadcast Periods',
);

$this->menu=array(
	array('label'=>'Create BroadcastPeriod', 'url'=>array('create')),
	array('label'=>'Manage BroadcastPeriod', 'url'=>array('admin')),
);
?>

<h1>Broadcast Periods</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
