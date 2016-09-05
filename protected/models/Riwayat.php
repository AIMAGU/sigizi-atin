<?php

/**
 * This is the model class for table "riwayat".
 *
 * The followings are the available columns in table 'riwayat':
 * @property integer $id_riwayat
 * @property string $bulan
 * @property integer $id_gejala
 * @property integer $id_menu
 * @property string $created
 *
 * The followings are the available model relations:
 * @property Gejala $idGejala
 * @property Menu $idMenu
 */
class Riwayat extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'riwayat';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('bulan, id_gejala, id_menu, created', 'required'),
			array('id_gejala, id_menu', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_riwayat, bulan, id_gejala, id_menu, created', 'safe', 'on'=>'search'),
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
			'idGejala' => array(self::BELONGS_TO, 'Gejala', 'id_gejala'),
			'idMenu' => array(self::BELONGS_TO, 'Menu', 'id_menu'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_riwayat' => 'Id Riwayat',
			'bulan' => 'Bulan',
			'id_gejala' => 'Id Gejala',
			'id_menu' => 'Id Menu',
			'created' => 'Created',
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

		$criteria->compare('id_riwayat',$this->id_riwayat);
		$criteria->compare('bulan',$this->bulan,true);
		$criteria->compare('id_gejala',$this->id_gejala);
		$criteria->compare('id_menu',$this->id_menu);
		$criteria->compare('created',$this->created,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	
	public function setMenu()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria = new CDbCriteria(array(
			'condition' => "id_gejala='".$_GET['id']."'",
		));

		$criteria->compare('id_riwayat',$this->id_riwayat);
		$criteria->compare('bulan',$this->bulan,true);
		//$criteria->compare('id_gejala',$this->id_gejala);
		$criteria->compare('id_menu',$this->id_menu);
		$criteria->compare('created',$this->created,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Riwayat the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
