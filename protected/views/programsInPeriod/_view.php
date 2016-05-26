<?php
/* @var $this ProgramsInPeriodController */
/* @var $data ProgramsInPeriod */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('period_id')); ?>:</b>
	<?php echo CHtml::encode($data->period_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('program_id')); ?>:</b>
	<?php echo CHtml::encode($data->program_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('program_status')); ?>:</b>
	<?php echo CHtml::encode($data->program_status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('program_asigned_date')); ?>:</b>
	<?php echo CHtml::encode($data->program_asigned_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('created_date')); ?>:</b>
	<?php echo CHtml::encode($data->created_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('created_by')); ?>:</b>
	<?php echo CHtml::encode($data->created_by); ?>
	<br />


</div>