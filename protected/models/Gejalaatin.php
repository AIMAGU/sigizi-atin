<?php

/**
 * This is the model class for table "gejala_atin".
 *
 * The followings are the available columns in table 'gejala_atin':
 * @property integer $id_gejala
 * @property string $kode
 * @property string $nama
 * @property string $pertanyaan
 *
 * The followings are the available model relations:
 * @property PengetahuanAtin[] $pengetahuanAtins
 */
class Gejalaatin extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'gejala_atin';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('kode, nama, pertanyaan', 'required'),
			array('kode', 'length', 'max'=>5),
			array('nama', 'length', 'max'=>300),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_gejala, kode, nama, pertanyaan', 'safe', 'on'=>'search'),
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
			'pengetahuanAtins' => array(self::HAS_MANY, 'PengetahuanAtin', 'id_gejala'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_gejala' => 'Id Gejala',
			'kode' => 'Kode',
			'nama' => 'Nama',
			'pertanyaan' => 'Pertanyaan',
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

		$criteria->compare('id_gejala',$this->id_gejala);
		$criteria->compare('kode',$this->kode,true);
		$criteria->compare('nama',$this->nama,true);
		$criteria->compare('pertanyaan',$this->pertanyaan,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Gejalaatin the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
