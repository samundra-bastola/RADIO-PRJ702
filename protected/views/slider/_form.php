<?php
/* @var $this SliderController */
/* @var $model Slider */
/* @var $form CActiveForm */
?>

<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">


    <?php $form=$this->beginWidget('CActiveForm', array(
        'id'=>'slider-form',
        // Please note: When you enable ajax validation, make sure the corresponding
        // controller action is handling ajax validation correctly.
        // There is a call to performAjaxValidation() commented in generated controller code.
        // See class documentation of CActiveForm for details on this.
        'enableAjaxValidation'=>false,
        'htmlOptions'=>array('enctype'=>'multipart/form-data'),
    )); ?>

    <div class="form-group">
        <?php echo $form->labelEx($model,'title'); ?>
        <?php echo $form->textField($model,'title',array('size'=>60,'maxlength'=>255, 'class'=>'form-control')); ?>
        <?php echo $form->error($model,'title'); ?>
    </div>
    <div class="form-group">	<?php echo $form->labelEx($model,'image'); ?>
        <?php echo $form->fileField($model,'image',array('size'=>60,'maxlength'=>100, 'class'=>'form-control')); ?>
        <!--		<?php /*if($model->isNewRecord!='1'){ */?>
			<?php /*echo CHtml::image(Yii::app()->request->baseUrl.'/images/slider/'.$model->id.'/'.$model->image.'thmb.jpg',"image",array("width"=>200)); */?>
		--><?php /*} */?>
        <?php echo $form->error($model,'image'); ?>
    </div>
    <div class="form-group">
        <?php echo $form->labelEx($model,'description'); ?>
        <?php echo $form->textArea($model,'description',array('rows'=>6, 'cols'=>50, 'class'=>'form-control')); ?>
        <?php echo $form->error($model,'description'); ?>
    </div>

    <div class="box-footer">
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class'=>'btn btn-primary')); ?>
    </div>

    <?php $this->endWidget(); ?>

</form><!-- form -->
