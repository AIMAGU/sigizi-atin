<?php

/**
 * This is the model class for table "artikel".
 *
 * The followings are the available columns in table 'artikel':
 * @property integer $id_artikel
 * @property string $judul
 * @property string $isi
 * @property string $created
 * @property string $foto
 * @property integer $id_user
 *
 * The followings are the available model relations:
 * @property User $idUser
 */
class Artikel extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'artikel';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('judul, isi, created, id_user', 'required'),
			array('id_user', 'numerical', 'integerOnly'=>true),
			array('judul, foto', 'length', 'max'=>300),
			array('foto', 'file', 'types'=> 'jpg, png', 'allowEmpty'=>'true', 'maxSize' => 1024 * 1024 * 1,
					'tooLarge' => 'Ukuran foto maksimal 1 MB dan bertype jpg.',
			),
			array('id_artikel, judul, isi, created, foto, id_user', 'safe', 'on'=>'search'),
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
			'id_artikel' => 'Id Artikel',
			'judul' => 'Judul',
			'isi' => 'Isi',
			'created' => 'Created',
			'foto' => 'Foto',
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

		$criteria->compare('id_artikel',$this->id_artikel);
		$criteria->compare('judul',$this->judul,true);
		$criteria->compare('isi',$this->isi,true);
		$criteria->compare('created',$this->created,true);
		$criteria->compare('foto',$this->foto,true);
		$criteria->compare('id_user',$this->id_user);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Artikel the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
