<?php
/**
 * Created by PhpStorm.
 * User: Bikeam
 * Date: 5/23/16
 * Time: 4:13 PM
 */
$period_id = $_GET['id'];
//echo $period_id;
?>

<div class="title"><h5>The Order of The Programs For Queue</h5></div>
<style type="text/css">
    #orderlist { list-style-type: none; margin: 3px 3px 20px 3px; padding: 2px; width: 60%; background-color:#FAF0B1;}
    #orderlist li { margin: 5px; padding: 0.4em; padding-left: 1.5em; font-size: 1.4em; height: 18px; }
    #orderlist li span { position: absolute; margin-left: -1.3em; }
    #orderlist li img {float:right}
    .edit_add {background: url(images/edit_add.png) no-repeat;width:22px; height:22px;text-indent: -9999px; padding: 2px;}
</style>

<div class="form">

    <?php $form=$this->beginWidget('CActiveForm', array(
        'id'=>'bus-inside-route-form',
        'enableAjaxValidation'=>true,
    )); ?>

    <?php
    $criteria = new CDbCriteria();
    $criteria->condition = 'period_id =:period_id AND program_status =:program_status';
    $criteria->order = 'queue ASC';
    $criteria->params = array(':period_id' => $period_id, ':program_status'=>1);
    $items = array();
    $ProgramsInPeriod = ProgramsInPeriod::model()->findAll($criteria);
    foreach($ProgramsInPeriod as $program){
        $programInfo = Programs::model()->findByPk($program->bus_id);
        $items[$programInfo->id] = $programInfo->program_name;
    }

//    $items = CHtml::listData($dataProvider->getData(), 'id', 'bus_id');

    $this->widget('zii.widgets.jui.CJuiSortable', array(
        'id'=>'orderlist',	// default is class="ui-sortable" id="yw0"
        'items' => $items,
        'itemTemplate'=>'<li id="{id}" class="ui-state-default"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>{content}'.''.'</li>',
    ));
    ?>


    <div class="row buttons">
        <?php
        // Add a Submit button to send data to the controller
        echo CHtml::ajaxSubmitButton('Submit Changes',
            array('ProgramsInPeriod/orderAjax'),
            array(
                'type' => 'POST',

                'success'=>'js: function(data) {
							$("#display").append(data);
							alert(data);
							}',
                'beforeSend' => 'function(html) { alert("before send"); }',
                'data' => array(
                    // Turn the Javascript array into a PHP-friendly string
                    'Order' => 'js:$("ul#orderlist").sortable("toArray").toString()',
                )
            ));
        ?>
    </div>

    <?php $this->endWidget(); ?>
    <div id="display"></div>
</div><!-- form -->
<?php echo '<br/>starting with values: [SN] Programs No<br/> ';$sn = 1;
foreach($items as $i=>$item){ echo '['.$sn.'] '.$item.'<br/>'; $sn = $sn+1;}?>
