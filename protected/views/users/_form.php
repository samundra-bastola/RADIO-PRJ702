<?php
/* @var $this UsersController */
/* @var $model Users */
/* @var $form CActiveForm */
?>

<div id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">


    <?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
        'id'=>'users-form',
        'enableAjaxValidation'=>true,
        'enableClientValidation' => true,
        'clientOptions'=>array('validateOnSubmit'=>true), //This is very important
        'htmlOptions' => array('enctype' => 'multipart/form-data'),
    )); ?>

    <p class="note">Fields with <span class="required">*</span> are required.</p>

    <?php echo $form->errorSummary($model); ?>

    <div class="form-group">
        <label for="fname" class="control-label col-md-3 col-sm-3 col-xs-12">
            <?php echo $form->labelEx($model,'fname'); ?>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <?php echo $form->textField($model,'fname',array('size'=>50,'maxlength'=>50)); ?>
            <?php echo $form->error($model,'fname'); ?>
        </div>
    </div>

    <div class="form-group">
        <label for="fname" class="control-label col-md-3 col-sm-3 col-xs-12">
            <?php echo $form->labelEx($model,'mname'); ?>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <?php echo $form->textField($model,'mname',array('size'=>50,'maxlength'=>50)); ?>
            <?php echo $form->error($model,'mname'); ?>
        </div>
    </div>

    <div class="form-group">
        <label for="fname" class="control-label col-md-3 col-sm-3 col-xs-12">
            <?php echo $form->labelEx($model,'lname'); ?>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <?php echo $form->textField($model,'lname',array('size'=>50,'maxlength'=>50)); ?>
            <?php echo $form->error($model,'lname'); ?>
        </div>
    </div>

    <div class="form-group">
        <label for="fname" class="control-label col-md-3 col-sm-3 col-xs-12">
            <?php echo $form->labelEx($model,'username'); ?>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <?php echo $form->textField($model,'username',array('size'=>50,'maxlength'=>50)); ?>
            <?php echo $form->error($model,'username'); ?>
        </div>
    </div>

    <div class="form-group">
        <label for="fname" class="control-label col-md-3 col-sm-3 col-xs-12">
            <?php echo $form->labelEx($model,'email'); ?>

        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>100)); ?>
            <?php echo $form->error($model,'email'); ?>
        </div>
    </div>

    <div class="form-group">
        <label for="fname" class="control-label col-md-3 col-sm-3 col-xs-12">
            <?php echo $form->labelEx($model,'password'); ?>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <?php echo $form->passwordField($model,'password',array('size'=>60,'maxlength'=>100)); ?>
            <?php echo $form->error($model,'password'); ?>
        </div>
    </div>

    <div class="form-group">
        <label for="fname" class="control-label col-md-3 col-sm-3 col-xs-12">
            <?php echo $form->labelEx($model,'dob'); ?>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <?php echo $form->textField($model,'dob',array('size'=>10,'maxlength'=>10)); ?>
            <?php echo $form->error($model,'dob'); ?>
        </div>
    </div>

    <div class="form-group">
        <div class="col-md-6 col-sm-6 col-xs-12">
            <?php echo $form->dropDownListRow($model,'gender',array('male'=>'Male', 'female'=>'Female', 'others'=>'Others'), array('maxlength'=>10)); ?>
            <?php echo $form->error($model,'gender'); ?>
        </div>
    </div>

    <div class="form-group">
        <label for="fname" class="control-label col-md-3 col-sm-3 col-xs-12">
            <?php echo $form->labelEx($model,'address'); ?>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <?php echo $form->textField($model,'address',array('size'=>60,'maxlength'=>100)); ?>
            <?php echo $form->error($model,'address'); ?>
        </div>
    </div>

    <div class="form-group">
        <label for="fname" class="control-label col-md-3 col-sm-3 col-xs-12">
            <?php echo $form->labelEx($model,'country'); ?>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <?php echo $form->textField($model,'country',array('size'=>60,'maxlength'=>100)); ?>
            <?php echo $form->error($model,'country'); ?>
        </div>
    </div>

    <div class="form-group">
        <label for="fname" class="control-label col-md-3 col-sm-3 col-xs-12">
            <?php echo $form->labelEx($model,'phone'); ?>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <?php echo $form->textField($model,'phone',array('size'=>20,'maxlength'=>20)); ?>
            <?php echo $form->error($model,'phone'); ?>
        </div>
    </div>

    <div class="form-group">
        <label for="fname" class="control-label col-md-3 col-sm-3 col-xs-12">
            <?php echo $form->labelEx($model,'work'); ?>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <?php echo $form->textField($model,'work',array('size'=>60,'maxlength'=>100)); ?>
            <?php echo $form->error($model,'work'); ?>
        </div>
    </div>

    <div class="form-group">
        <label for="fname" class="control-label col-md-3 col-sm-3 col-xs-12">
            <?php echo $form->labelEx($model,'website'); ?>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <?php echo $form->textField($model,'website',array('size'=>60,'maxlength'=>100)); ?>
            <?php echo $form->error($model,'website'); ?>
        </div>
    </div>

    <div class="form-group">
        <label for="fname" class="control-label col-md-3 col-sm-3 col-xs-12">
            <?php echo $form->labelEx($model,'status'); ?>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <?php echo $form->textField($model,'status',array('size'=>10,'maxlength'=>10)); ?>
            <?php echo $form->error($model,'status'); ?>
        </div>
    </div>

    <div class="form-group">
        <div class="col-md-6 col-sm-6 col-xs-12">
            <?php echo $form->fileFieldRow($model,'photo'); ?>
            <?php echo $form->error($model,'photo'); ?>
        </div>
    </div>



    <div class="form-group">
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
    </div>

    <?php $this->endWidget(); ?>


</div><!-- form -->