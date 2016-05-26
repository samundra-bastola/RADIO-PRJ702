<?php
/* @var $this ProgramsInPeriodController */
/* @var $model ProgramsInPeriod */
/* @var $form CActiveForm */
?>
<?php
$programsInPeriod_arr = array();
$programsInPeriod = ProgramsInPeriod::model()->findAllByAttributes(array('program_status'=>1));
if(!empty($programsInPeriod)){
    foreach($programsInPeriod as $f_a_b){
        $programsInPeriod_arr[]=$f_a_b->program_id;
    }
}
$already_selected_program = array_keys(array_count_values($programsInPeriod_arr));

$program = Program::model()->findAll();
$arrayAllProgram = array();
foreach($program as $p){
    $arrayAllProgram[] = $p->id;
}
$all_program = array_keys(array_count_values($arrayAllProgram));
$not_selected_program = array_diff($all_program,$already_selected_program);

$not_selected_all = Program::model()->findAllByAttributes(array('id'=>$not_selected_program));
$arrayNotSelected = array();
foreach($not_selected_all as $p){
    $arrayNotSelected[$p->id] = $p->program_name;
}
?>
<div class="form">

    <?php $form=$this->beginWidget('CActiveForm', array(
        'id'=>'programs-in-period-form',
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
        <!--		--><?php //echo $form->textField($model,'period_id'); ?>
        <?php echo $form->labelEx($model,'period_id');?>
        <?php
        $this->widget('ext.yii-selectize.YiiSelectize', array(
            'model' => $model,
            'attribute' => 'period_id',
            'data' => $arrayNotSelected,
//            'fullWidth' => false,
            'placeholder' => 'Type Here To Search!',
        ));
        ?>
        <?php echo $form->error($model,'period_id'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'program_id'); ?>
        <?php echo $form->textField($model,'program_id',array('size'=>20,'maxlength'=>20)); ?>
        <?php echo $form->error($model,'program_id'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'program_status'); ?>
        <?php echo $form->textField($model,'program_status'); ?>
        <?php echo $form->error($model,'program_status'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'program_asigned_date'); ?>
        <?php echo $form->textField($model,'program_asigned_date',array('size'=>10,'maxlength'=>10)); ?>
        <?php echo $form->error($model,'program_asigned_date'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'created_date'); ?>
        <?php echo $form->textField($model,'created_date'); ?>
        <?php echo $form->error($model,'created_date'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'created_by'); ?>
        <?php echo $form->textField($model,'created_by',array('size'=>20,'maxlength'=>20)); ?>
        <?php echo $form->error($model,'created_by'); ?>
    </div>

    <div class="row buttons">
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->