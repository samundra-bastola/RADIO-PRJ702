<?php

/**
 * This is the model class for table "tbl_users".
 *
 * The followings are the available columns in table 'tbl_users':
 * @property integer $id
 * @property string $fname
 * @property string $mname
 * @property string $lname
 * @property string $username
 * @property string $email
 * @property string $password
 * @property string $dob
 * @property string $gender
 * @property string $address
 * @property string $country
 * @property string $phone
 * @property string $work
 * @property string $website
 * @property string $status
 * @property string $photo
 * @property string $created_date
 */
class Users extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_users';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('fname, lname, username, email, password, dob, gender, address', 'safe'),
			array('fname, mname, lname, username', 'length', 'max'=>50),
            array('email, password, address, country, work, website, photo', 'length', 'max'=>100),
            array('email, username', 'unique'),
            array('photo', 'file', 'allowEmpty'=>true, 'types'=>'jpg, gif, png, jpeg','maxSize'=>1024*5,'on'=>'insert'),
            array('photo', 'file', 'allowEmpty'=>true, 'types' => 'jpg, gif, png, jpeg', 'maxSize'=>1024 * 1024, 'tooLarge'=>'Photo must be smaller than 150KB'),
            array('dob, gender, status', 'length', 'max'=>10),
			array('phone', 'length', 'max'=>20),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, fname, mname, lname, username, email, password, dob, gender, address, country, phone, work, website, status, created_date', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'fname' => 'First Name',
			'mname' => 'Middle Name',
			'lname' => 'Last Name',
			'username' => 'Username',
			'email' => 'Email',
			'password' => 'Password',
			'dob' => 'Date of Birth',
			'gender' => 'Gender',
			'address' => 'Address',
			'country' => 'Country',
			'phone' => 'Phone',
			'work' => 'Work',
			'website' => 'Website',
			'status' => 'Status',
			'photo' => 'Photo',
			'created_date' => 'Created Date',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('fname',$this->fname,true);
		$criteria->compare('mname',$this->mname,true);
		$criteria->compare('lname',$this->lname,true);
		$criteria->compare('username',$this->username,true);
//		$criteria->compare('email',$this->email,true);
//		$criteria->compare('password',$this->password,true);
		$criteria->compare('dob',$this->dob,true);
		$criteria->compare('gender',$this->gender,true);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('country',$this->country,true);
//		$criteria->compare('phone',$this->phone,true);
//		$criteria->compare('work',$this->work,true);
//		$criteria->compare('website',$this->website,true);
//		$criteria->compare('status',$this->status,true);
//		$criteria->compare('photo',$this->photo,true);
//		$criteria->compare('created_date',$this->created_date,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Users the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
