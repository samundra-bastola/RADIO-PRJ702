<?php

class BroadcastPeriodTimeController extends Controller
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
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
    public function actionCreate()
    {
        $model=new BroadcastPeriodTime;
        $checkQ = new CheckQueue();
// Uncomment the following line if AJAX validation is needed
// $this->performAjaxValidation($model);

        if(isset($_POST['BroadcastPeriodTime']))
        {
            $model->attributes=$_POST['BroadcastPeriodTime'];
            $model->period_id = $_POST['period_id'];
            $model->period_time = $_POST['period_time'];
            $model->status = 1;
            $model->created_date = date('Y-m-d H:i:s', time());
            $model->created_by = Yii::app()->user->id;

            $BroadcastPeriodTime = BroadcastPeriodTime::model()->findAllByAttributes(array('period_id'=>$model->period_id, 'period_time'=>$model->period_time, 'status'=>1));
            if(empty($BroadcastPeriodTime)){
                if($model->save()){
                    $checkQ->period_id = $model->period_id;
                    $checkQ->time_id = $model->id;
                    $checkQ->completed_time = 1;
                    $checkQ->stats = 1;
                    $checkQ->save();
                    $user = Yii::app()->getComponent('user');
                    $user->setFlash(
                        'success',
                        "<strong>$model->period_time inserted successfully. </strong>"
                    );
                }
            }else{
                $user = Yii::app()->getComponent('user');
                $user->setFlash(
                    'error',
                    "<strong>$model->period_time is already..... </strong>"
                );
            }
            $this->redirect(array('BroadcastPeriod/View', 'id'=>$model->period_id));
        }

        $this->render('create',array(
            'model'=>$model,
        ));
    }

    public function actionDeactivate(){
        if(isset($_POST['deactivate']))
        {
            $time_id = $_POST['time_id'];
            $period_id = $_POST['period_id'];
            $periodTime = BroadcastPeriodTime::model()->findByPk($time_id);
            $periodTime->saveAttributes(array('status'=>0));
            $this->redirect(array('BroadcastPeriod/View', 'id'=>$period_id));
        }
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

		if(isset($_POST['BroadcastPeriodTime']))
		{
			$model->attributes=$_POST['BroadcastPeriodTime'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->int));
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
		$dataProvider=new CActiveDataProvider('BroadcastPeriodTime');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new BroadcastPeriodTime('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['BroadcastPeriodTime']))
			$model->attributes=$_GET['BroadcastPeriodTime'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return BroadcastPeriodTime the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=BroadcastPeriodTime::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param BroadcastPeriodTime $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='broadcast-period-time-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
