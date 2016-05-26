<?php
/* @var $this DailyProgramsQueueController */
/* @var $model DailyProgramsQueue */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'daily-programs-queue-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'period_id'); ?>
		<?php echo $form->textField($model,'period_id'); ?>
		<?php echo $form->error($model,'period_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'queue_date'); ?>
		<?php echo $form->textField($model,'queue_date',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'queue_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'time_id'); ?>
		<?php echo $form->textField($model,'time_id',array('size'=>60,'maxlength'=>300)); ?>
		<?php echo $form->error($model,'time_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'program_id'); ?>
		<?php echo $form->textField($model,'program_id',array('size'=>60,'maxlength'=>300)); ?>
		<?php echo $form->error($model,'program_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'queue_serial'); ?>
		<?php echo $form->textField($model,'queue_serial',array('size'=>60,'maxlength'=>300)); ?>
		<?php echo $form->error($model,'queue_serial'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'program_status'); ?>
		<?php echo $form->textField($model,'program_status'); ?>
		<?php echo $form->error($model,'program_status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'created_by'); ?>
		<?php echo $form->textField($model,'created_by',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'created_by'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'created_date'); ?>
		<?php echo $form->textField($model,'created_date'); ?>
		<?php echo $form->error($model,'created_date'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->