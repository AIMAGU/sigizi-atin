<?php

class SiteController extends Controller
{
	/**
	 * Declares class-based actions.
	 */
	public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),
		);
	}

	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex()
	{
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		$this->render('index');
	}

	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
		if($error=Yii::app()->errorHandler->error)
		{
			if(Yii::app()->request->isAjaxRequest)
				echo $error['message'];
			else
				$this->render('error', $error);
		}
	}

	/**
	 * Displays the contact page
	 */
	public function actionContact()
	{
		$model=new ContactForm;
		if(isset($_POST['ContactForm']))
		{
			$model->attributes=$_POST['ContactForm'];
			if($model->validate())
			{
				$name='=?UTF-8?B?'.base64_encode($model->name).'?=';
				$subject='=?UTF-8?B?'.base64_encode($model->subject).'?=';
				$headers="From: $name <{$model->email}>\r\n".
					"Reply-To: {$model->email}\r\n".
					"MIME-Version: 1.0\r\n".
					"Content-Type: text/plain; charset=UTF-8";

				mail(Yii::app()->params['adminEmail'],$subject,$model->body,$headers);
				Yii::app()->user->setFlash('contact','Thank you for contacting us. We will respond to you as soon as possible.');
				$this->refresh();
			}
		}
		$this->render('contact',array('model'=>$model));
	}

	/**
	 * Displays the login page
	 */
	public function actionLogin()
	{
		$this->layout='//layouts/column-login';
		if (!defined('CRYPT_BLOWFISH')||!CRYPT_BLOWFISH)
			throw new CHttpException(500,"This application requires that PHP was compiled with Blowfish support for crypt().");

		$model=new LoginForm;

		// if it is ajax validation request
		if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}

		// collect user input data
		if(isset($_POST['LoginForm']))
		{
			$model->attributes=$_POST['LoginForm'];
			// validate user input and redirect to the previous page if valid

			if($model->validate() && $model->login()){
				Yii::app()->user->setFlash('success','Selamat datang <b>'.Yii::app()->user->name.'</b>');
				//$this->redirect(Yii::app()->user->returnUrl);
				$this->redirect(array('gejala/admin'));
			}else{
				Yii::app()->user->setFlash('error','Login Gagal');
				$this->redirect(Yii::app()->user->returnUrl);
			}
		}
		// display the login form
		$this->render('login',array('model'=>$model));
	}

	/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionLogout()
	{
		Yii::app()->user->logout();
		$this->redirect(Yii::app()->homeUrl);
	}
	
	public function actionRumus()
	{
		//Cara panggil
		//localhost:81/yii-atin2/site-rumus.html?usia=62&jk=1&tb=168&bb=55&aktivitas=Ringan&gula2jam=185&gulapuasa=120&kolesterol=180&tekanandarah=1
		
		//Input
		/* $usia=42;
		$jk=0;
		$tb=155;
		$bb=38;
		$aktivitas="Bedrest";
		$gula2jam=322;
		$gulapuasa=115;
		$kolesterol=175;
		$tekanandarah=120;
		 */
		$usia=$_GET['usia'];
		$jk=$_GET['jk'];
		$tb=$_GET['tb'];
		$bb=$_GET['bb'];
		$aktivitas=$_GET['aktivitas'];
		$gula2jam=$_GET['gula2jam'];
		$gulapuasa=$_GET['gulapuasa'];
		$kolesterol=$_GET['kolesterol'];
		$tekanandarah=$_GET['tekanandarah'];

		//Hitung
		$bbi=90/100*($tb-100);
		//echo "BBI ".$bbi;
		//
		if($jk==1){
			$kb=$bbi*30;
		}else{
			$kb=$bbi*25;
		}
		//echo "KB ".$kb;
		//
		$imt=$bb/($tb/100*$tb/100);
		//echo "IMT ".$imt;
		//
		if($usia<59){
			$kusia=(-5/100)*$kb;
		}elseif($usia<69){
			$kusia=(-10/100)*$kb;
		}else{
			$kusia=(-20/100)*$kb;
		}
		//echo "koreksi usia ".$kusia;
		//
		if($aktivitas=="Ringan"){
			$kaktiv=(20/100)*$kb;
		}elseif($aktivitas=="Berat"){
			$kaktiv=(40/100)*$kb;
		}elseif($aktivitas=="Bedrest"){
			$kaktiv=(10/100)*$kb;
		}else{
			$kaktiv=0;
		}
		//echo "Koreksi aktivitas ".$kaktiv;
		//
		if($imt<18.5){
			$kimt=(20/100)*$kb;
		}elseif($imt>22.9){
			$kimt=(-20/100)*$kb;
		}else{
			$kimt=0;
		}
		//echo "Koreksi IMT ".$kimt;

		$kalori=$kb+$kusia+$kaktiv+$kimt;
		//echo "<br>Kalori ".$kalori;

		if($gulapuasa<110 && $gula2jam<140){
			$dm=0;
		}else{
			$dm=1;
		}
		//echo $dm;
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
		}
		echo $kalori."-/-".$diet;
	}
}