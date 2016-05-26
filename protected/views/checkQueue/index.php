<?php
/* @var $this CheckQueueController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Check Queues',
);

$this->menu=array(
	array('label'=>'Create CheckQueue', 'url'=>array('create')),
	array('label'=>'Manage CheckQueue', 'url'=>array('admin')),
);
?>

<h1>Check Queues</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
