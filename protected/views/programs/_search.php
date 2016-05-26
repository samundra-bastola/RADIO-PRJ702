<?php
/* @var $this ProgramsController */
/* @var $model Programs */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'program_name'); ?>
		<?php echo $form->textField($model,'program_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'program_type'); ?>
		<?php echo $form->textField($model,'program_type',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'program_duration'); ?>
		<?php echo $form->textField($model,'program_duration'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'program_host'); ?>
		<?php echo $form->textField($model,'program_host'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'program_sponser'); ?>
		<?php echo $form->textField($model,'program_sponser',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'program_photo'); ?>
		<?php echo $form->textField($model,'program_photo',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'created_date'); ?>
		<?php echo $form->textField($model,'created_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'created_by'); ?>
		<?php echo $form->textField($model,'created_by',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->