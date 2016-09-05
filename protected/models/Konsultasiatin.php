<?php

/**
 * This is the model class for table "konsultasi_atin".
 *
 * The followings are the available columns in table 'konsultasi_atin':
 * @property integer $id_konsultasi
 * @property string $tanggal
 * @property integer $id_user
 * @property integer $id_diagnosa
 *
 * The followings are the available model relations:
 * @property DiagnosaAtin $idDiagnosa
 * @property User $idUser
 * @property KonsultasiDetailAtin[] $konsultasiDetailAtins
 */
class Konsultasiatin extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'konsultasi_atin';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('tanggal, id_user', 'required'),
			array('id_user, id_diagnosa', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_konsultasi, tanggal, id_user, id_diagnosa', 'safe', 'on'=>'search'),
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
			'idDiagnosa' => array(self::BELONGS_TO, 'DiagnosaAtin', 'id_diagnosa'),
			'idUser' => array(self::BELONGS_TO, 'User', 'id_user'),
			'konsultasiDetailAtins' => array(self::HAS_MANY, 'KonsultasiDetailAtin', 'id_konsultasi'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_konsultasi' => 'Id Konsultasi',
			'tanggal' => 'Tanggal',
			'id_user' => 'Id User',
			'id_diagnosa' => 'Id Diagnosa',
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

		$criteria->compare('id_konsultasi',$this->id_konsultasi);
		$criteria->compare('tanggal',$this->tanggal,true);
		$criteria->compare('id_user',$this->id_user);
		$criteria->compare('id_diagnosa',$this->id_diagnosa);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Konsultasiatin the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
