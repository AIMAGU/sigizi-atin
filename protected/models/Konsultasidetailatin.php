<?php

/**
 * This is the model class for table "konsultasi_detail_atin".
 *
 * The followings are the available columns in table 'konsultasi_detail_atin':
 * @property integer $id_konsultasi_detail
 * @property integer $id_konsultasi
 * @property integer $id_pengetahuan
 * @property integer $jawaban
 *
 * The followings are the available model relations:
 * @property KonsultasiAtin $idKonsultasi
 * @property PengetahuanAtin $idPengetahuan
 */
class Konsultasidetailatin extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'konsultasi_detail_atin';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_konsultasi, id_pengetahuan, jawaban', 'required'),
			array('id_konsultasi, id_pengetahuan, jawaban', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_konsultasi_detail, id_konsultasi, id_pengetahuan, jawaban', 'safe', 'on'=>'search'),
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
			'idKonsultasi' => array(self::BELONGS_TO, 'KonsultasiAtin', 'id_konsultasi'),
			'idPengetahuan' => array(self::BELONGS_TO, 'PengetahuanAtin', 'id_pengetahuan'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_konsultasi_detail' => 'Id Konsultasi Detail',
			'id_konsultasi' => 'Id Konsultasi',
			'id_pengetahuan' => 'Id Pengetahuan',
			'jawaban' => 'Jawaban',
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

		$criteria->compare('id_konsultasi_detail',$this->id_konsultasi_detail);
		$criteria->compare('id_konsultasi',$this->id_konsultasi);
		$criteria->compare('id_pengetahuan',$this->id_pengetahuan);
		$criteria->compare('jawaban',$this->jawaban);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Konsultasidetailatin the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
