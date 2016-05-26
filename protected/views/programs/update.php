<?php
/* @var $this ProgramsController */
/* @var $model Programs */

$this->breadcrumbs=array(
	'Programs'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Programs', 'url'=>array('index')),
	array('label'=>'Create Programs', 'url'=>array('create')),
	array('label'=>'View Programs', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Programs', 'url'=>array('admin')),
);
?>

    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Update Programs <small>Program infomations</small></h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <br />
                    <?php $this->renderPartial('_form', array('model'=>$model)); ?>
                </div>
            </div>
        </div>
    </div>

