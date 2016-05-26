<?php
/* @var $this AdminController */
/* @var $model Admin */
/* @var $form CActiveForm */
?>


<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

    <?php $form=$this->beginWidget('CActiveForm', array(
        'id'=>'admin-form',
        // Please note: When you enable ajax validation, make sure the corresponding
        // controller action is handling ajax validation correctly.
        // There is a call to performAjaxValidation() commented in generated controller code.
        // See class documentation of CActiveForm for details on this.
        'enableAjaxValidation'=>false,
    )); ?>
    <div class="form-group">
        <label for="fname" class="control-label col-md-3 col-sm-3 col-xs-12">
            <?php echo $form->labelEx($model,'fname'); ?>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <?php echo $form->textField($model,'fname',array('size'=>50,'maxlength'=>50, 'class'=>'form-control col-md-7 col-xs-12')); ?>
            <?php echo $form->error($model,'fname'); ?>
        </div>
    </div>
    <div class="form-group">
        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">
            <?php echo $form->labelEx($model,'mname'); ?>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <?php echo $form->textField($model,'mname',array('size'=>50,'maxlength'=>50, 'class'=>'form-control col-md-7 col-xs-12')); ?>
            <?php echo $form->error($model,'mname'); ?>
        </div>
    </div>
    <div class="form-group">
        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">
            <?php echo $form->labelEx($model,'lname'); ?>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <?php echo $form->textField($model,'lname',array('size'=>50,'maxlength'=>50, 'class'=>'form-control col-md-7 col-xs-12')); ?>
            <?php echo $form->error($model,'lname'); ?>
        </div>
    </div>
    <div class="form-group">
        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">
            <?php echo $form->labelEx($model,'email'); ?>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>100, 'class'=>'form-control col-md-7 col-xs-12')); ?>
            <?php echo $form->error($model,'email'); ?>
        </div>
    </div>
    <div class="form-group">
        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">
            <?php echo $form->labelEx($model,'user_name'); ?>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <?php echo $form->textField($model,'user_name',array('size'=>50,'maxlength'=>50, 'class'=>'form-control col-md-7 col-xs-12')); ?>
            <?php echo $form->error($model,'user_name'); ?>
        </div>
    </div>
    <div class="form-group">
        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">
            <?php echo $form->labelEx($model,'password'); ?>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <?php echo $form->passwordField($model,'password',array('size'=>50,'maxlength'=>50, 'class'=>'form-control col-md-7 col-xs-12')); ?>
            <?php echo $form->error($model,'password'); ?>
        </div>
    </div>
    <div class="form-group">
        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">
            <?php echo $form->labelEx($model,'repeat_password',array( 'class'=>'required')); ?>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <?php echo $form->passwordField($model,'repeat_password',array('size'=>50,'maxlength'=>50, 'class'=>'form-control col-md-7 col-xs-12')); ?>
            <?php echo $form->error($model,'repeat_password'); ?>
        </div>
    </div>
    <div class="box-footer">
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class'=>'btn btn-primary')); ?>
    </div>

    <?php $this->endWidget(); ?>

</form><!-- form -->

<script type="text/javascript">
    $(document).ready(function() {
        $('#birthday').daterangepicker({
            singleDatePicker: true,
            calender_style: "picker_4"
        }, function(start, end, label) {
            console.log(start.toISOString(), end.toISOString(), label);
        });
    });
</script>
