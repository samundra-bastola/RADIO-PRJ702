<?php
/* @var $this ProgramsInPeriodController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Programs In Periods',
);

$this->menu=array(
	array('label'=>'Create ProgramsInPeriod', 'url'=>array('create')),
	array('label'=>'Manage ProgramsInPeriod', 'url'=>array('admin')),
);
?>

<h1>Programs In Periods</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
