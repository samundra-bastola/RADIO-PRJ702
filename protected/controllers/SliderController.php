<?php
Yii::import('application.extensions.ThumbnailImages.thumbnail_images');
class SliderController extends Controller
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

	public function createimage($width,$height,$destination,$thumb,$type){
		$obj_imgl = new thumbnail_images;
		$obj_imgl->PathImgOld = $destination.".".$type;
		$obj_imgl->PathImgNew = $destination."$thumb.".$type;
		$obj_imgl->NewWidth = $width;
		if($height!=''){
			$obj_imgl->NewHeight = $height;
		}
		if (!$obj_imgl->create_thumbnail_images())
			echo "error";
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Slider;
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Slider']))
		{
			$model->attributes=$_POST['Slider'];
			$uploadedFile = CUploadedFile::getInstance($model, 'image');
			$fileName = date('Ymdhis').'_'.$uploadedFile;  // $timestamp + file name
			$model->image = $fileName;
			$model->status = 1;
			if($model->save()) {
				$folder = Yii::app()->basePath . '/../images/slider/' . $model->id;
				$destination = $folder . '/' . $fileName;
				if (!is_dir($folder)) {
					mkdir($folder);
				}
				if (!empty($uploadedFile)) {
					if ($uploadedFile->saveAs($destination . '.' . 'jpg')) {
						$this->createimage(50, 50, $destination, 'thmb', 'jpg');
						$this->createimage(2400, 1272, $destination, 'sld', 'jpg');
					}
				}
				$this->redirect(array('view', 'id' => $model->id));
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
        $prevImg = $model->image;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Slider']))
		{
			$model->attributes=$_POST['Slider'];
			$uploadedFile = CUploadedFile::getInstance($model, 'image');
			$fileName = date('Ymdhis').'_'.$uploadedFile;  // $timestamp + file name
            if(empty($uploadedFile)){
                $model->image = $prevImg;
            }else{
                $model->image = $fileName;
            }
			if($model->save()){
                $folder = Yii::app()->basePath . '/../images/slider/' . $model->id;
                $destination = $folder . '/' . $fileName;
                if (!is_dir($folder)) {
                    mkdir($folder);
                }
                if (!empty($uploadedFile)) {
                    if ($uploadedFile->saveAs($destination . '.' . 'jpg')) {
                        $this->createimage(50, 50, $destination, 'thmb', 'jpg');
                        $this->createimage(2400, 1272, $destination, 'sld', 'jpg');
                    }
                }
                $this->redirect(array('view', 'id' => $model->id));
            }
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
//		$dir = Yii::app()->basePath . '/../images/slider/' . $id;
		//if(
        $this->loadModel($id)->delete();
//    ){
/*			$this->removeDirectory($dir);
		}*/
		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Slider');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Slider('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Slider']))
			$model->attributes=$_GET['Slider'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Slider the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Slider::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Slider $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='slider-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
