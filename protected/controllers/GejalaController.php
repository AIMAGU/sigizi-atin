<?php

class GejalaController extends Controller
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
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('@'),
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
		$user = User::model()->findByPK(Yii::app()->user->id);
		$this->render('view',array(
			'model'=>$this->loadModel($id),
			'user'=>$user,
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Gejala;
		if(isset($_POST['Gejala']))
		{
			$model->attributes=$_POST['Gejala'];
			
			$user=User::model()->findByAttributes(array(
				'id_user' => Yii::app()->user->id,
			));
			$model->usia=date('Y') - date_format(date_create($user->tanggal_lahir), 'Y');
			$model->jenis_kelamin=$user->jenis_kelamin;
			if($model->save()){
				$usia=$model->usia;
				$jk=$model->jenis_kelamin;
				$tb=$_POST['Gejala']['tinggi_badan'];
				$bb=$_POST['Gejala']['berat_badan'];
				$aktivitas=$_POST['Gejala']['aktivitas'];
				$gula2jam=$_POST['Gejala']['glukosa_2_jam'];
				$gulapuasa=$_POST['Gejala']['glukosa_puasa'];
				$kolesterol=$_POST['Gejala']['kolesterol'];
				$tekanandarah=$_POST['Gejala']['tekanan_darah'];

				//Hitung
				$bbi=90/100*($tb-100);
				//
				if($jk==1){
					$kb=$bbi*30;
				}else{
					$kb=$bbi*25;
				}
				//
				$imt=$bb/($tb/100*$tb/100);
				//
				if($usia<59){
					$kusia=(-5/100)*$kb;
				}elseif($usia<69){
					$kusia=(-10/100)*$kb;
				}else{
					$kusia=(-20/100)*$kb;
				}
				//
				if($aktivitas=="Ringan"){
					$kaktiv=(20/100)*$kb;
				}elseif($aktivitas=="Sedang"){
					$kaktiv=(40/100)*$kb;
				}elseif($aktivitas=="Berat"){
					$kaktiv=(40/100)*$kb;
				}elseif($aktivitas=="Bedrest"){
					$kaktiv=(10/100)*$kb;
				}else{
					$kaktiv=0;
				}
				//
				if($imt<18.5){
					$kimt=(20/100)*$kb;
				}elseif($imt>22.9){
					$kimt=(-20/100)*$kb;
				}else{
					$kimt=0;
				}
				$kalori=$kb+$kusia+$kaktiv+$kimt;
				if($gulapuasa<110 && $gula2jam<140){
					$dm=0;
				}else{
					$dm=1;
				}
				if($dm==1){
					if($kalori<=1200){
						$diet=1100;
					}elseif($kalori<=1400){
						$diet=1300;
					}elseif($kalori<=1600){
						$diet=1500;
					}elseif($kalori<=1800){
						$diet=1700;
					}elseif($kalori<=2000){
						$diet=1900;
					}elseif($kalori<=2200){
						$diet=2100;
					}elseif($kalori<=2400){
						$diet=2300;
					}elseif($kalori>2400){
						$diet=2500;
					}
				}else{
					$diet=0;
				}
			}
			
			//di loop like DM
			$menus = Menu::model()->findAll(array("condition"=>"dm =  $diet", "order"=>"id_menu"));
			foreach($menus as $i=>$j){
				$riwayat=new Riwayat;
				$riwayat->bulan=date('Y-m-01'); //Inputan
				$riwayat->id_gejala=$model->id_gejala;
				$riwayat->id_menu=$j['id_menu'];
				$riwayat->created=date('Y-m-d H:i:s');
				$riwayat->save();
			}
			
			$this->redirect(array('view','id'=>$model->id_gejala,'dm'=>$diet));
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

		if(isset($_POST['Gejala']))
		{
			$model->attributes=$_POST['Gejala'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id_gejala));
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
			$model=$this->loadModel($id);
			if(Riwayat::model()->deleteAll('id_gejala = ' . $model->id_gejala)){
				if(!isset($_GET['ajax']))
					$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('index'));
				
				if ($model->delete()) {
					if(Yii::app()->user->level==1){
						Yii::app()->user->setFlash('success', 'Data <strong>berhasil</strong> dihapus. Terima kasih');
						$this->redirect(array('admin'));
					}else{
						Yii::app()->user->setFlash('success', 'Data <strong>berhasil</strong> dihapus. Terima kasih');
						$this->redirect(array('index'));
					}
				}	
			}
		}
		else
			throw new CHttpException(400,'Invalid request. Please do not repeat this request again.');
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$model=new Gejala('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Gejala']))
			$model->attributes=$_GET['Gejala'];
	
		$this->render('index',array(
			'model'=>$model,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Gejala('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Gejala']))
			$model->attributes=$_GET['Gejala'];
	
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
		$model=Gejala::model()->findByPk($id);
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
		if(isset($_POST['ajax']) && $_POST['ajax']==='gejala-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
