
<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">


    <?php $form=$this->beginWidget('CActiveForm', array(
        'id'=>'logo-form',
        // Please note: When you enable ajax validation, make sure the corresponding
        // controller action is handling ajax validation correctly.
        // There is a call to performAjaxValidation() commented in generated controller code.
        // See class documentation of CActiveForm for details on this.
        'enableAjaxValidation'=>false,
        'htmlOptions'=>array('enctype'=>'multipart/form-data'),
    )); ?>

    <p class="note">Fields with <span class="required">*</span> are required.</p>

    <div class="form-group">
        <?php echo $form->labelEx($model,'logo'); ?>
        <?php echo $form->fileField($model,'logo',array('size'=>60,'maxlength'=>100)); ?>Maximum file size is 100 KB.
        <?php echo $form->error($model,'logo'); ?>
    </div>

    <div class="box-footer">
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
    </div>

    <?php $this->endWidget(); ?>

</form><!-- form -->
