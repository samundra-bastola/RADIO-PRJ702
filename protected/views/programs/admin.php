<?php
/* @var $this ProgramsController */
/* @var $model Programs */

$this->breadcrumbs=array(
    'Programs'=>array('index'),
    'Manage',
);

$this->menu=array(
    array('label'=>'List Programs', 'url'=>array('index')),
    array('label'=>'Create Programs', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#programs-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Programs</h1>

<p>
    You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
    or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
    <?php $this->renderPartial('_search',array(
        'model'=>$model,
    )); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
    'id'=>'programs-grid',
    'dataProvider'=>$model->search(),
    'filter'=>$model,
    'columns'=>array(
        'id',
        'program_name',
        // 'program_type',
        'program_duration',
        'program_host',
        // 'media',
        array(
            'type' => 'raw',
            'header'=>'Preview',
            'value' => function ($model) {
                    return "<audio controls='controls'>
                        <source src='".Yii::app()->request->baseUrl."/images/AudioArchive/$model->id/" . $model->media."' type='audio/mp3' />
                       </audio>" ;
                },
        ),

        // 'program_sponser',
        array(
            'type' => 'raw',
            'header'=>'Thumbnail',
            'value' => '(!empty($data->program_photo))?CHtml::image(Yii::app()->baseUrl . "/images/ProgramThumb/$data->id/" . $data->program_photo,"",array("style"=>"width:100px;height:100px")):"no thumb"'
//            'value' => 'Competition::checkImage($data->image, $data->id)',
        ),
        /*
        'program_photo',
        'created_date',
        'created_by',
        */
        array(
            'class'=>'CButtonColumn',
        ),
    ),
)); ?>
