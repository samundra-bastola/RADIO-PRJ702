<?php
/* @var $this DailyProgramsQueueController */
/* @var $data DailyProgramsQueue */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('period_id')); ?>:</b>
	<?php echo CHtml::encode($data->period_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('queue_date')); ?>:</b>
	<?php echo CHtml::encode($data->queue_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('time_id')); ?>:</b>
	<?php echo CHtml::encode($data->time_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('program_id')); ?>:</b>
	<?php echo CHtml::encode($data->program_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('queue_serial')); ?>:</b>
	<?php echo CHtml::encode($data->queue_serial); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('program_status')); ?>:</b>
	<?php echo CHtml::encode($data->program_status); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('created_by')); ?>:</b>
	<?php echo CHtml::encode($data->created_by); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('created_date')); ?>:</b>
	<?php echo CHtml::encode($data->created_date); ?>
	<br />

	*/ ?>

</div>