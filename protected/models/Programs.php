<?php

/**
 * This is the model class for table "tbl_programs".
 *
 * The followings are the available columns in table 'tbl_programs':
 * @property integer $id
 * @property integer $program_name
 * @property string $program_type
 * @property string $program_duration
 * @property integer $program_host
 * @property string $program_sponser
 * @property string $program_photo
 * @property string $created_date
 * @property string $created_by
 */
class Programs extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_programs';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
//
			array('program_name, program_type, program_duration, program_host, program_sponser,', 'safe'),
//			array('program_name, program_host', 'numerical', 'integerOnly'=>true),
			array('program_type', 'length', 'max'=>200),
			array('program_sponser, program_photo', 'length', 'max'=>100),
			 array('program_photo', 'file', 'allowEmpty'=>true, 'types'=>'jpg, gif, png, jpeg','maxSize'=>1024*1024,'on'=>'insert'),
            array('program_photo', 'file', 'allowEmpty'=>true, 'types' => 'jpg, gif, png, jpeg', 'maxSize'=>1024 * 1024, 'tooLarge'=>'Photo must be smaller than 150KB'),
           
            array('created_by', 'length', 'max'=>10),
//            array('media', 'length', 'max'=>60),
            array('media', 'file', 'allowEmpty'=>true,'types'=>'mp3, m4a, mp4', 'safe' => false),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, program_name, program_type, program_duration, program_host, program_sponser, created_date, created_by', 'safe', 'on'=>'search'),
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
			'program_name' => 'Program Name',
			'program_type' => 'Program Type',
			'program_duration' => 'Program Duration',
			'program_host' => 'Program Host',
			'program_sponser' => 'Program Sponser',
			'program_photo' => 'Programs thumbnail',
			'created_date' => 'Created Date',
			'created_by' => 'Created By',
            'media'=>'Audio File'
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
		$criteria->compare('program_name',$this->program_name);
		$criteria->compare('program_type',$this->program_type,true);
		$criteria->compare('program_duration',$this->program_duration,true);
		$criteria->compare('program_host',$this->program_host);
		$criteria->compare('program_sponser',$this->program_sponser,true);
		$criteria->compare('program_photo',$this->program_photo,true);
		$criteria->compare('created_date',$this->created_date,true);
		$criteria->compare('created_by',$this->created_by,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Programs the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
