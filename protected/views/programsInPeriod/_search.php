<?php
/* @var $this ProgramsInPeriodController */
/* @var $model ProgramsInPeriod */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'period_id'); ?>
		<?php echo $form->textField($model,'period_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'program_id'); ?>
		<?php echo $form->textField($model,'program_id',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'program_status'); ?>
		<?php echo $form->textField($model,'program_status'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'program_asigned_date'); ?>
		<?php echo $form->textField($model,'program_asigned_date',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'created_date'); ?>
		<?php echo $form->textField($model,'created_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'created_by'); ?>
		<?php echo $form->textField($model,'created_by',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->