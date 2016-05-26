<?php
/* @var $this CheckQueueController */
/* @var $model CheckQueue */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'check-queue-form',
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
		<?php echo $form->labelEx($model,'time_id'); ?>
		<?php echo $form->textField($model,'time_id'); ?>
		<?php echo $form->error($model,'time_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'compleated_time'); ?>
		<?php echo $form->textField($model,'compleated_time'); ?>
		<?php echo $form->error($model,'compleated_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'program_id'); ?>
		<?php echo $form->textField($model,'program_id'); ?>
		<?php echo $form->error($model,'program_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'status'); ?>
		<?php echo $form->textField($model,'status'); ?>
		<?php echo $form->error($model,'status'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->