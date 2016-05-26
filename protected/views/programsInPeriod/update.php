<?php
/* @var $this ProgramsInPeriodController */
/* @var $model ProgramsInPeriod */

$this->breadcrumbs=array(
	'Programs In Periods'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List ProgramsInPeriod', 'url'=>array('index')),
	array('label'=>'Create ProgramsInPeriod', 'url'=>array('create')),
	array('label'=>'View ProgramsInPeriod', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage ProgramsInPeriod', 'url'=>array('admin')),
);
?>

<h1>Update ProgramsInPeriod <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>