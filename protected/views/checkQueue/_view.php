<?php
/* @var $this CheckQueueController */
/* @var $data CheckQueue */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('period_id')); ?>:</b>
	<?php echo CHtml::encode($data->period_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('time_id')); ?>:</b>
	<?php echo CHtml::encode($data->time_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('compleated_time')); ?>:</b>
	<?php echo CHtml::encode($data->compleated_time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('program_id')); ?>:</b>
	<?php echo CHtml::encode($data->program_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />


</div>