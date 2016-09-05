<?php

/**
 * This is the model class for table "gejala".
 *
 * The followings are the available columns in table 'gejala':
 * @property integer $id_gejala
 * @property integer $usia
 * @property integer $jenis_kelamin
 * @property integer $tinggi_badan
 * @property integer $berat_badan
 * @property string $aktivitas
 * @property integer $glukosa_2_jam
 * @property integer $glukosa_puasa
 * @property integer $kolesterol
 * @property integer $tekanan_darah
 * @property string $created
 * @property integer $id_user
 *
 * The followings are the available model relations:
 * @property User $idUser
 */
class Gejala extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'gejala';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('usia, jenis_kelamin, tinggi_badan, berat_badan, aktivitas, glukosa_2_jam, kolesterol, tekanan_darah, created, id_user', 'required'),
			array('usia, jenis_kelamin, tinggi_badan, berat_badan, glukosa_2_jam, glukosa_puasa, kolesterol, tekanan_darah, id_user', 'numerical', 'integerOnly'=>true),
			array('aktivitas', 'length', 'max'=>30),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_gejala, usia, jenis_kelamin, tinggi_badan, berat_badan, aktivitas, glukosa_2_jam, glukosa_puasa, kolesterol, tekanan_darah, created, id_user', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'idUser' => array(self::BELONGS_TO, 'User', 'id_user'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_gejala' => 'Id Gejala',
			'usia' => 'Usia',
			'jenis_kelamin' => 'Jenis Kelamin',
			'tinggi_badan' => 'Tinggi Badan',
			'berat_badan' => 'Berat Badan',
			'aktivitas' => 'Aktivitas',
			'glukosa_2_jam' => 'Glukosa 2 Jam',
			'glukosa_puasa' => 'Glukosa Puasa',
			'kolesterol' => 'Kolesterol',
			'tekanan_darah' => 'Tekanan Darah',
			'created' => 'Created',
			'id_user' => 'Id User',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;
		if(Yii::app()->user->level==3){
			$criteria->condition = "id_user ='".Yii::app()->user->id."'";
		}

		$criteria->compare('id_gejala',$this->id_gejala);
		$criteria->compare('usia',$this->usia);
		$criteria->compare('jenis_kelamin',$this->jenis_kelamin);
		$criteria->compare('tinggi_badan',$this->tinggi_badan);
		$criteria->compare('berat_badan',$this->berat_badan);
		$criteria->compare('aktivitas',$this->aktivitas,true);
		$criteria->compare('glukosa_2_jam',$this->glukosa_2_jam);
		$criteria->compare('glukosa_puasa',$this->glukosa_puasa);
		$criteria->compare('kolesterol',$this->kolesterol);
		$criteria->compare('tekanan_darah',$this->tekanan_darah);
		$criteria->compare('created',$this->created,true);
		//$criteria->compare('id_user',$this->id_user);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Gejala the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
