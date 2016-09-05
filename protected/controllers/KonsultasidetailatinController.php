<?php

class KonsultasidetailatinController extends Controller
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
				'actions'=>array('riwayat','update','end'),
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

	public function actionRiwayat()
	{
		$model=new Konsultasidetailatin;
		$model->id_konsultasi=Yii::app()->session['id_konsultasi'];
		$model->id_pengetahuan=$_GET['p'];
		$model->jawaban=$_GET['j'];
		if($model->save()){
			$this->redirect(array('/pengetahuanatin/view','id'=>$_GET['id'], 'end'=>0));
		}
	}
	
	public function actionEnd()
	{
		$model=Konsultasiatin::model()->findByAttributes(array(
			'id_konsultasi' => Yii::app()->session['id_konsultasi'],
		));
		$model->id_diagnosa=$_GET['id'];
		if($model->save()){
			$this->redirect(array('/pengetahuanatin/view','id'=>$_GET['id'],'end'=>1));
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

		if(isset($_POST['Konsultasidetailatin']))
		{
			$model->attributes=$_POST['Konsultasidetailatin'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id_konsultasi_detail));
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
		if(Yii::app()->request->isPostRequest)
		{
			// we only allow deletion via POST request
			$this->loadModel($id)->delete();

			// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
			if(!isset($_GET['ajax']))
				$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
		}
		else
			throw new CHttpException(400,'Invalid request. Please do not repeat this request again.');
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		//Jika sudah create konsultasiatin maka dapat value id_konsultasi
		if(!empty(Yii::app()->session['id_konsultasi'])){//ex:6
			//Set id_konsultasi untuk pengetahuan berikutnya
			if(!empty($_GET['t'])){
				$tanya=$_GET['t']; //t sudah di set = 1 dari hasil create konsultasiatin
			}else{
				$tanya=1;
			}
		}
		
		//Check exists id_pengetahuan=1
		$start=Konsultasidetailatin::model()->exists('id_konsultasi = :id_konsultasi and $id_pengetahuan=:id_pengetahuan', array(
			':id_konsultasi'=>Yii::app()->session['id_konsultasi'],
			':id_pengetahuan'=>1
		));
		//id_pengetahuan? True
		if($start){
			//end question and reports
		}else{
			//Loop question
			$pertanyaan=Pengetahuan::model()->findByAttributes(array(
				'id_pengetahuan' => $tanya,
			));
			$this->redirect(array('index','id'=>$pertanyaan->id_pengetahuan));
		}
		
		$model=new Konsultasidetailatin;
		if(isset($_POST['Konsultasidetailatin']))
		{
			$model->attributes=$_POST['Konsultasidetailatin'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id_konsultasi_detail));
		}

		$this->render('index',array(
			'model'=>$model,
		));
		
		/* $dataProvider=new CActiveDataProvider('Konsultasidetailatin');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		)); */
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Konsultasidetailatin('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Konsultasidetailatin']))
			$model->attributes=$_GET['Konsultasidetailatin'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer the ID of the model to be loaded
	 */
	public function loadModel($id)
	{
		$model=Konsultasidetailatin::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param CModel the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='konsultasidetailatin-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
