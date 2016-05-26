<?php
/* @var $this SliderController */
/* @var $model Slider */

$this->breadcrumbs=array(
	'Sliders'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Slider', 'url'=>array('index')),
	array('label'=>'Manage Slider', 'url'=>array('admin')),
);
?>
<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Add Slider <small>For the front end</small></h2>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <br />
                <?php $this->renderPartial('_form', array('model'=>$model)); ?>

            </div>
        </div>
    </div>
</div>
