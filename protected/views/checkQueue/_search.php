<?php
/* @var $this CheckQueueController */
/* @var $model CheckQueue */
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
		<?php echo $form->label($model,'period_id'); ?>
		<?php echo $form->textField($model,'period_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'time_id'); ?>
		<?php echo $form->textField($model,'time_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'compleated_time'); ?>
		<?php echo $form->textField($model,'compleated_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'program_id'); ?>
		<?php echo $form->textField($model,'program_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'status'); ?>
		<?php echo $form->textField($model,'status'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->