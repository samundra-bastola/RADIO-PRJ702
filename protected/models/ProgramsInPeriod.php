<?php

/**
 * This is the model class for table "tbl_programs_in_period".
 *
 * The followings are the available columns in table 'tbl_programs_in_period':
 * @property string $id
 * @property integer $period_id
 * @property string $program_id
 * @property integer $program_status
 * @property string $program_asigned_date
 * @property string $created_date
 * @property string $created_by
 */
class ProgramsInPeriod extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_programs_in_period';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('period_id, program_id, program_status, program_asigned_date, created_date, created_by', 'required'),
			array('period_id, program_status', 'numerical', 'integerOnly'=>true),
			array('program_id, created_by', 'length', 'max'=>20),
			array('program_asigned_date', 'length', 'max'=>10),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, period_id, program_id, program_status, program_asigned_date, created_date, created_by', 'safe', 'on'=>'search'),
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
			'program_id' => 'Program',
			'program_status' => 'Program Status',
			'program_asigned_date' => 'Program Asigned Date',
			'created_date' => 'Created Date',
			'created_by' => 'Created By',
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
		$criteria->compare('program_id',$this->program_id,true);
		$criteria->compare('program_status',$this->program_status);
		$criteria->compare('program_asigned_date',$this->program_asigned_date,true);
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
	 * @return ProgramsInPeriod the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
