<?php

/**
 * This is the model class for table "pengetahuan_atin".
 *
 * The followings are the available columns in table 'pengetahuan_atin':
 * @property integer $id_pengetahuan
 * @property integer $id_gejala
 * @property integer $y_gejala
 * @property integer $n_gejala
 * @property integer $y_diagnosa
 * @property integer $n_diagnosa
 *
 * The followings are the available model relations:
 * @property KonsultasiDetailAtin[] $konsultasiDetailAtins
 * @property GejalaAtin $idGejala
 */
class Pengetahuanatin extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'pengetahuan_atin';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_gejala', 'required'),
			array('id_gejala, y_gejala, n_gejala, y_diagnosa, n_diagnosa', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_pengetahuan, id_gejala, y_gejala, n_gejala, y_diagnosa, n_diagnosa', 'safe', 'on'=>'search'),
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
			'konsultasiDetailAtins' => array(self::HAS_MANY, 'KonsultasiDetailAtin', 'id_pengetahuan'),
			'idGejala' => array(self::BELONGS_TO, 'GejalaAtin', 'id_gejala'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_pengetahuan' => 'Id Pengetahuan',
			'id_gejala' => 'Id Gejala',
			'y_gejala' => 'Y Gejala',
			'n_gejala' => 'N Gejala',
			'y_diagnosa' => 'Y Diagnosa',
			'n_diagnosa' => 'N Diagnosa',
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

		$criteria->compare('id_pengetahuan',$this->id_pengetahuan);
		$criteria->compare('id_gejala',$this->id_gejala);
		$criteria->compare('y_gejala',$this->y_gejala);
		$criteria->compare('n_gejala',$this->n_gejala);
		$criteria->compare('y_diagnosa',$this->y_diagnosa);
		$criteria->compare('n_diagnosa',$this->n_diagnosa);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Pengetahuanatin the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
