<?php
/* @var $this LogoController */
/* @var $model Logo */

$this->breadcrumbs=array(
	'Logos'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Logo', 'url'=>array('index')),
	array('label'=>'Create Logo', 'url'=>array('create')),
	array('label'=>'View Logo', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Logo', 'url'=>array('admin')),
);
?>

<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Update Logo<small>Radio PRJ701 Logo</small></h2>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <br />
                <?php $this->renderPartial('_form', array('model'=>$model)); ?>

            </div>
        </div>
    </div>
</div>
