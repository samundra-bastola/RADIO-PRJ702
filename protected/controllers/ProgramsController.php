<?php

class ProgramsController extends Controller
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
                'actions'=>array('index','view','delete','admin','set'),
                'users'=>array('*'),
            ),
//            array('allow', // allow authenticated user to perform 'create' and 'update' actions
//                'actions'=>array('create','update','delete'),
//                'users'=>array('@'),
//            ),
//            array('allow', // allow admin user to perform 'admin' and 'delete' actions
//                'actions'=>array('admin','delete'),
//                'users'=>array('admin'),
//            ),
//            array('deny',  // deny all users
//                'users'=>array('*'),
//            ),
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
    public function actionNowPlaying($id)
    {
        $this->render('Site/index',array(
            'model'=>$this->loadModel($id),
        ));
    }
    public function actionSet()
    {
        $this->render('set');
    }
    /**
     * Creates a new model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     */
    public function actionCreate()
    {
        $model=new Programs;
        $date = date_create();
        $unixdate = date_format($date, 'U');
        // Uncomment the following line if AJAX validation is needed
//        $this->performAjaxValidation($model);

        if(isset($_POST['Programs']))
        {
            $model->attributes=$_POST['Programs'];
            date_default_timezone_set('Asia/Kathmandu');
            $AudioFile = CUploadedFile::getInstance($model, 'media');
            if(!empty($AudioFile)){
                $mediaName = $unixdate . '_' . $AudioFile;  // $timestamp + file name
                $model->media = $mediaName;
            }
            $uploadedFile = CUploadedFile::getInstance($model, 'program_photo');
            if(!empty($uploadedFile)){
                $fileName = $unixdate . '_' . $uploadedFile;  // $timestamp + file name
                $model->program_photo = $fileName;
            }

            $model->created_date = date('Y-m-d H:i:s', time());
            if($model->validate()){
                if($model->save()){
                    if (!is_dir(Yii::app()->basePath . '/../images/ProgramThumb/' . $model->id) && !is_dir(Yii::app()->basePath . '/../images/AudioArchive/' . $model->id)) {
                        mkdir(Yii::app()->basePath . '/../images/ProgramThumb/' . $model->id);
                        mkdir(Yii::app()->basePath . '/../images/AudioArchive/' . $model->id);

                    }
                    if(!empty($uploadedFile) &&!empty($AudioFile)){
                        $uploadedFile->saveAs(Yii::app()->basePath . '/../images/ProgramThumb/'. $model->id . '/' . $fileName);
                        $AudioFile->saveAs(Yii::app()->basePath. '/../images/AudioArchive/'. $model->id . '/' . $mediaName);

                    }
//                    if (!is_dir(Yii::app()->basePath . '/../images/AudioArchive/' . $model->id)) {
//                        mkdir(Yii::app()->basePath . '/../images/AudioArchive/' . $model->id);
//                    }
//                    if(!empty($AudioFile)){
//                        $AudioFile->saveAs(Yii::app()->basePath.'/../images/AudioArchive/'.$model->id);
//                    }
                    $this->redirect(array('view','id'=>$model->id));
                }
            }
        }
        $this->render('create',array(
            'model'=>$model,
        ));
    }

    /**
     * Updates a particular model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id the ID of the model to be updated
     */
    public function actionUpdate($id)
    {
        $model=$this->loadModel($id);

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if(isset($_POST['Programs']))
        {
            $model->attributes=$_POST['Programs'];
            if($model->save())
                $this->redirect(array('view','id'=>$model->id));
        }

        $this->render('update',array(
            'model'=>$model,
        ));
    }

    /**
     * Deletes a particular model.
     * If deletion is successful, the browser will be redirected to the 'admin' page.
     * @param integer $id the ID of the model to be deleted
     */
    public function actionDelete($id)
    {
        $this->loadModel($id)->delete();

        // if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
        if(!isset($_GET['ajax']))
            $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
    }

    /**
     * Lists all models.
     */
    public function actionIndex()
    {
        $dataProvider=new CActiveDataProvider('Programs');
        $this->render('index',array(
            'dataProvider'=>$dataProvider,
        ));
    }

    /**
     * Manages all models.
     */
    public function actionAdmin()
    {
        $model=new Programs('search');
        $model->unsetAttributes();  // clear any default values
        if(isset($_GET['Programs']))
            $model->attributes=$_GET['Programs'];

        $this->render('admin',array(
            'model'=>$model,
        ));
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer $id the ID of the model to be loaded
     * @return Programs the loaded model
     * @throws CHttpException
     */
    public function loadModel($id)
    {
        $model=Programs::model()->findByPk($id);
        if($model===null)
            throw new CHttpException(404,'The requested page does not exist.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param Programs $model the model to be validated
     */
    protected function performAjaxValidation($model)
    {
        if(isset($_POST['ajax']) && $_POST['ajax']==='programs-form')
        {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }
}
