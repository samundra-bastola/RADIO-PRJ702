<?php
/* @var $this ProgramsController */
/* @var $model Programs */
/* @var $form CActiveForm */
?>

<div id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">


    <?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
        'id'=>'programs-form',
        'enableAjaxValidation'=>true,
        'enableClientValidation' => true,
        'clientOptions'=>array('validateOnSubmit'=>true), //This is very important
        'htmlOptions' => array('enctype' => 'multipart/form-data'),
    )); ?>

    <p class="note">Fields with <span class="required">*</span> are required.</p>

    <?php echo $form->errorSummary($model); ?>

    <div class="form-group">
        <label for="fname" class="control-label col-md-3 col-sm-3 col-xs-12">
            <?php echo $form->labelEx($model,'program_name'); ?>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <?php echo $form->textField($model,'program_name'); ?>
            <?php echo $form->error($model,'program_name'); ?>
        </div>
    </div>

    <div class="form-group">

        <div class="col-md-6 col-sm-6 col-xs-12">
            <?php echo $form->dropDownListRow($model,'program_type',array('1'=>'Musical', '2'=>'News', '3'=>'Talks','4'=>'Others'), array('maxlength'=>10)); ?>
            <?php echo $form->error($model,'program_type'); ?>
        </div>
    </div>

    <div class="form-group">
        <label for="fname" class="control-label col-md-3 col-sm-3 col-xs-12">
            <?php echo $form->labelEx($model,'program_duration'); ?>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <?php echo $form->textField($model,'program_duration'); ?>
            <?php echo $form->error($model,'program_duration'); ?>
        </div>
    </div>

    <div class="form-group">
        <label for="fname" class="control-label col-md-3 col-sm-3 col-xs-12">
            <?php echo $form->labelEx($model,'program_host'); ?>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <?php echo $form->textField($model,'program_host'); ?>
            <?php echo $form->error($model,'program_host'); ?>
        </div>
    </div>

    <div class="form-group">
        <label for="fname" class="control-label col-md-3 col-sm-3 col-xs-12">
            <?php echo $form->labelEx($model,'program_sponser'); ?>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <?php echo $form->textField($model,'program_sponser',array('size'=>60,'maxlength'=>100)); ?>
            <?php echo $form->error($model,'program_sponser'); ?>
        </div>	</div>

    <div class="form-group">
        <label for="fname" class="control-label col-md-3 col-sm-3 col-xs-12">
            <?php echo $form->labelEx($model,'media'); ?>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">

            <?php echo $form->fileField($model,'media',array('size'=>60)); ?>
            <?php echo $form->error($model,'media'); ?>
        </div>	</div>
    <div class="form-group">
        <label for="fname" class="control-label col-md-3 col-sm-3 col-xs-12">
            <?php echo $form->labelEx($model,'program_photo'); ?>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <?php echo $form->fileField($model,'program_photo',array('size'=>60)); ?>

            <?php echo $form->error($model,'program_photo'); ?>
        </div>	</div>


    <div class="form-group">
        <label for="fname" class="control-label col-md-3 col-sm-3 col-xs-12">
            <?php echo $form->labelEx($model,'created_date'); ?>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <?php echo $form->textField($model,'created_date'); ?>
            <?php echo $form->error($model,'created_date'); ?>
        </div>
    </div>

    <div class="form-group">
        <label for="fname" class="control-label col-md-3 col-sm-3 col-xs-12">
            <?php echo $form->labelEx($model,'created_by'); ?>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <?php echo $form->textField($model,'created_by',array('size'=>10,'maxlength'=>10)); ?>
            <?php echo $form->error($model,'created_by'); ?>
        </div>	</div>


    <div class="row buttons">
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->
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