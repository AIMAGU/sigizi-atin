<?php

/**
 * This is the model class for table "user".
 *
 * The followings are the available columns in table 'user':
 * @property integer $id_user
 * @property string $nama_lengkap
 * @property string $username
 * @property string $password
 * @property string $alamat
 * @property string $tempat_lahir
 * @property string $tanggal_lahir
 * @property integer $jenis_kelamin
 * @property string $email
 * @property string $telp
 * @property integer $level
 * @property string $created
 * @property integer $active
 *
 * The followings are the available model relations:
 * @property Gejala[] $gejalas
 */
class User extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'user';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nama_lengkap, username, password, tanggal_lahir, jenis_kelamin, level, created, active', 'required'),
			array('jenis_kelamin, level, active', 'numerical', 'integerOnly'=>true),
			array('nama_lengkap', 'length', 'max'=>300),
			array('username, password, email', 'length', 'max'=>32),
			array('tempat_lahir', 'length', 'max'=>100),
			array('telp', 'length', 'max'=>15),
			array('alamat', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_user, nama_lengkap, username, password, alamat, tempat_lahir, tanggal_lahir, jenis_kelamin, email, telp, level, created, active', 'safe', 'on'=>'search'),
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
			'gejalas' => array(self::HAS_MANY, 'Gejala', 'id_user'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_user' => 'Id User',
			'nama_lengkap' => 'Nama Lengkap',
			'username' => 'Username',
			'password' => 'Password',
			'alamat' => 'Alamat',
			'tempat_lahir' => 'Tempat Lahir',
			'tanggal_lahir' => 'Tanggal Lahir',
			'jenis_kelamin' => 'Jenis Kelamin',
			'email' => 'Email',
			'telp' => 'Telp',
			'level' => 'Level',
			'created' => 'Created',
			'active' => 'Active',
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

		$criteria->compare('id_user',$this->id_user);
		$criteria->compare('nama_lengkap',$this->nama_lengkap,true);
		$criteria->compare('username',$this->username,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('alamat',$this->alamat,true);
		$criteria->compare('tempat_lahir',$this->tempat_lahir,true);
		$criteria->compare('tanggal_lahir',$this->tanggal_lahir,true);
		$criteria->compare('jenis_kelamin',$this->jenis_kelamin);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('telp',$this->telp,true);
		$criteria->compare('level',$this->level);
		$criteria->compare('created',$this->created,true);
		$criteria->compare('active',$this->active);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return User the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
	
	public function validatePassword($password)
	{
		return md5($password)===$this->password;
	}
}
