<?php
/* @var $this CheckQueueController */
/* @var $model CheckQueue */

$this->breadcrumbs=array(
	'Check Queues'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List CheckQueue', 'url'=>array('index')),
	array('label'=>'Create CheckQueue', 'url'=>array('create')),
	array('label'=>'View CheckQueue', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage CheckQueue', 'url'=>array('admin')),
);
?>

<h1>Update CheckQueue <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>