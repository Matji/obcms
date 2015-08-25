<?php

/**
 * This is the model class for table "obsection".
 *
 * The followings are the available columns in table 'obsection':
 * @property string $sectionTitle
 * @property string $sectionName
 * @property integer $sectionTypeID
 * @property integer $id
 * @property integer $order
 * @property integer $parentID
 * @property string $sectionContent
 */
class Obsection extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'obsection';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('sectionTitle, sectionName, sectionTypeID, order', 'required'),
			array('sectionTypeID, order, parentID', 'numerical', 'integerOnly'=>true),
			array('sectionTitle, sectionName', 'length', 'max'=>50),
			array('sectionContent', 'length', 'max'=>60000),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('sectionTitle, sectionName, sectionTypeID, id, order, parentID, sectionContent', 'safe', 'on'=>'search'),
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
			'sectionTitle' => 'Section Title',
			'sectionName' => 'Section Name',
			'sectionTypeID' => 'Section Type',
			'id' => 'ID',
			'order' => 'Order',
			'parentID' => 'Parent',
			'sectionContent' => 'Section Content',
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

		$criteria->compare('sectionTitle',$this->sectionTitle,true);
		$criteria->compare('sectionName',$this->sectionName,true);
		$criteria->compare('sectionTypeID',$this->sectionTypeID);
		$criteria->compare('id',$this->id);
		$criteria->compare('order',$this->order);
		$criteria->compare('parentID',$this->parentID);
		$criteria->compare('sectionContent',$this->sectionContent,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Obsection the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
