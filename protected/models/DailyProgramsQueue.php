<?php

/**
 * This is the model class for table "tbl_daily_programs_queue".
 *
 * The followings are the available columns in table 'tbl_daily_programs_queue':
 * @property string $id
 * @property integer $period_id
 * @property string $queue_date
 * @property string $time_id
 * @property string $program_id
 * @property string $queue_serial
 * @property integer $program_status
 * @property string $created_by
 * @property string $created_date
 */
class DailyProgramsQueue extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_daily_programs_queue';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('period_id, queue_date, time_id, program_id, queue_serial, program_status, created_by, created_date', 'required'),
			array('period_id, program_status', 'numerical', 'integerOnly'=>true),
			array('queue_date', 'length', 'max'=>10),
			array('time_id, program_id, queue_serial', 'length', 'max'=>300),
			array('created_by', 'length', 'max'=>20),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, period_id, queue_date, time_id, program_id, queue_serial, program_status, created_by, created_date', 'safe', 'on'=>'search'),
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
			'period_id' => 'Period',
			'queue_date' => 'Queue Date',
			'time_id' => 'Time',
			'program_id' => 'Program',
			'queue_serial' => 'Queue Serial',
			'program_status' => 'Program Status',
			'created_by' => 'Created By',
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

		$criteria->compare('id',$this->id,true);
		$criteria->compare('period_id',$this->period_id);
		$criteria->compare('queue_date',$this->queue_date,true);
		$criteria->compare('time_id',$this->time_id,true);
		$criteria->compare('program_id',$this->program_id,true);
		$criteria->compare('queue_serial',$this->queue_serial,true);
		$criteria->compare('program_status',$this->program_status);
		$criteria->compare('created_by',$this->created_by,true);
		$criteria->compare('created_date',$this->created_date,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return DailyProgramsQueue the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
