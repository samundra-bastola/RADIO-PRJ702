<?php
/* @var $this ProgramsController */
/* @var $data Programs */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('program_name')); ?>:</b>
	<?php echo CHtml::encode($data->program_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('program_type')); ?>:</b>
	<?php echo CHtml::encode($data->program_type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('program_duration')); ?>:</b>
	<?php echo CHtml::encode($data->program_duration); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('program_host')); ?>:</b>
	<?php echo CHtml::encode($data->program_host); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('program_sponser')); ?>:</b>
	<?php echo CHtml::encode($data->program_sponser); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('program_photo')); ?>:</b>
	<?php echo CHtml::encode($data->program_photo); ?>
	<br />
<b><?php echo CHtml::encode($data->getAttributeLabel('media')); ?>:</b>
	<?php echo CHtml::encode($data->media); ?>
	<br />
	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('created_date')); ?>:</b>
	<?php echo CHtml::encode($data->created_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('created_by')); ?>:</b>
	<?php echo CHtml::encode($data->created_by); ?>
	<br />

	*/ ?>

</div>