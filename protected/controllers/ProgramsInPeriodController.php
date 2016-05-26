<?php

class ProgramsInPeriodController extends Controller
{
    /**
     * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
     * using two-column layout. See 'protected/views/layouts/column2.php'.
     */
    public $layout='//layouts/column2';

    /**
     * @return array action filters
     */
    public function filters()
    {
        return array(
            'accessControl', // perform access control for CRUD operations
            'postOnly + delete', // we only allow deletion via POST request
        );
    }

    /**
     * Specifies the access control rules.
     * This method is used by the 'accessControl' filter.
     * @return array access control rules
     */
    public function accessRules()
    {
        return array(
            array('allow',  // allow all users to perform 'index' and 'view' actions
                'actions'=>array('index','view'),
                'users'=>array('*'),
            ),
            array('allow', // allow authenticated user to perform 'create' and 'update' actions
                'actions'=>array('create','update'),
                'users'=>array('@'),
            ),
            array('allow', // allow admin user to perform 'admin' and 'delete' actions
                'actions'=>array('admin','delete'),
                'users'=>array('admin'),
            ),
            array('deny',  // deny all users
                'users'=>array('*'),
            ),
        );
    }

    /**
     * Displays a particular model.
     * @param integer $id the ID of the model to be displayed
     */
    public function actionView($id)
    {
        $this->render('view',array(
            'model'=>$this->loadModel($id),
        ));
    }


    /**
     * Updates a particular model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id the ID of the model to be updated
     */
    public function actionQueueChart()
    {
        $cmodel=new ProgramsInPeriod();
        $model=new ProgramsInPeriod('search');
        $model->program_status = '1';
        if(isset($_GET['ProgramsInPeriod']))
            $model->attributes=$_GET['ProgramsInPeriod'];

        // Uncomment the following line if AJAX validation is needed
        $this->performAjaxValidation($model);
        $dataProvider = new CActiveDataProvider('ProgramsInPeriod', array(
            'pagination' => false,
            'criteria' => array(
                'order' => 'queue ASC',
            ),
        ));
        $this->render('queueChart',array(
            'dataProvider'=>$dataProvider,
            'model'=>$cmodel //model for creation
        ));

    }

    public function actionOrderAjax()
    {
        if (Yii::app()->request->isPostRequest && isset($_POST['Order']))
        {
            // Since we converted the Javascript array to a string,
            // convert the string back to a PHP array
            $models = explode(',', $_POST['Order']);

            for ($i = 0; $i < sizeof($models); $i++)
            {
                if ($model = ProgramsInPeriod::model()->findbyAttributes(array('program_status'=>1, 'program_id'=>$models[$i])))
                {
                    $model->queue = $i;

                    $model->save();
                }
            }
            print_r($_POST);
        }
        // Handle the regular model order view
        else
        {
            $dataProvider = new CActiveDataProvider('ProgramsInPeriod', array(
                'pagination' => false,
                'criteria' => array(
                    'order' => 'queue ASC, program_id DESC',
                ),
            ));

            $this->render('order',array(
                'dataProvider' => $dataProvider,
            ));
        }
    }

    public function actionCreate()
    {
        $model=new ProgramsInPeriod;
        $period_id = @$_GET['id'];
        $modelsearch=new ProgramsInPeriod('search');
        $modelsearch->unsetAttributes();  // clear any default values
        $modelsearch->period_id = $period_id;
        if(isset($_GET['ProgramsInPeriod'])) {
            $modelsearch->attributes = $_GET['ProgramsInPeriod'];
        }
        if(!empty($period_id)){
            $criteria = new CDbCriteria();
            $criteria->condition = 'period_id = :period_id';
            $criteria->order = 'queue DESC';
            $criteria->params = array('period_id' => $period_id);
            $criteria->limit = 1;
            $biqs = ProgramsInPeriod::model()->findAll($criteria);
            if(!empty($biqs)){
                foreach($biqs as $biq){
                    $lastQueue = $biq->queue;
                }
            }else{
                $lastQueue = -1;
            }
// Uncomment the following line if AJAX validation is needed
            $this->performAjaxValidation($model);

            if(isset($_POST['ProgramsInPeriod']))
            {
                $model->attributes=$_POST['ProgramsInPeriod'];
                $model->period_id = $period_id;
//                $model->bus_id = $model->bus_id;exit;
                $model->bus_status = '1';
                $model->queue = $lastQueue + 1;
                $model->created_date = date('Y-m-d H:i:s', time());
                $model->created_by = Yii::app()->user->id;

                if($model->save()){
                    Yii::app()->user->setFlash('success', "Successfully  Added!!!");
                    $this->redirect(array('ProgramsInPeriod/create/'.$period_id));
                }
            }
        }
        $this->render('create',array(
            'model'=>$model,'modelsearch'=>$modelsearch,'period_id'=>$period_id
        ));
    }

    /**
     * Lists all models.
     */
    public function actionIndex()
    {
        $dataProvider=new CActiveDataProvider('ProgramsInPeriod');
        $this->render('index',array(
            'dataProvider'=>$dataProvider,
        ));
    }

    /**
     * Manages all models.
     */
    public function actionAdmin()
    {
        $model=new ProgramsInPeriod('search');
        $model->unsetAttributes();  // clear any default values
        if(isset($_GET['ProgramsInPeriod']))
            $model->attributes=$_GET['ProgramsInPeriod'];

        $this->render('admin',array(
            'model'=>$model,
        ));
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer $id the ID of the model to be loaded
     * @return ProgramsInPeriod the loaded model
     * @throws CHttpException
     */
    public function loadModel($id)
    {
        $model=ProgramsInPeriod::model()->findByPk($id);
        if($model===null)
            throw new CHttpException(404,'The requested page does not exist.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param ProgramsInPeriod $model the model to be validated
     */
    protected function performAjaxValidation($model)
    {
        if(isset($_POST['ajax']) && $_POST['ajax']==='programs-in-period-form')
        {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }
}
