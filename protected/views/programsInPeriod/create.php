<?php
/* @var $this ProgramsInPeriodController */
/* @var $model ProgramsInPeriod */

$this->breadcrumbs=array(
	'Programs In Periods'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ProgramsInPeriod', 'url'=>array('index')),
	array('label'=>'Manage ProgramsInPeriod', 'url'=>array('admin')),
);
?>

<h1>Create ProgramsInPeriod<?php echo strtoupper(BroadcastPeriod::model()->findByPk($period_id)->name); ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>