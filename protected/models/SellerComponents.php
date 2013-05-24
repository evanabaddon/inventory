<?php

/**
 * This is the model class for table "seller_components".
 *
 * The followings are the available columns in table 'seller_components':
 * @property integer $id_trans
 * @property string $date_time
 * @property string $decsription
 * @property integer $component_id
 * @property integer $type_order
 * @property string $sender_name
 * @property integer $user_id
 *
 * The followings are the available model relations:
 * @property User $user
 * @property Components $component
 * @property OrderType $typeOrder
 */
class SellerComponents extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return SellerComponents the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'seller_components';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('decsription, component_id, type_order, sender_name', 'required'),
			array('component_id, type_order, user_id', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_trans, date_time, decsription, component_id, type_order, sender_name, user_id', 'safe', 'on'=>'search'),
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
			'user' => array(self::BELONGS_TO, 'User', 'user_id'),
			'component' => array(self::BELONGS_TO, 'Components', 'component_id'),
			'typeOrder' => array(self::BELONGS_TO, 'OrderType', 'type_order'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'Id Trans',
			'date_time' => 'Date Time',
			'decsription' => 'Decsription',
			'component_id' => 'Component',
			'type_order' => 'Type Order',
			'sender_name' => 'Sender Name',
			'user_id' => 'User',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('date_time',$this->date_time,true);
		$criteria->compare('decsription',$this->decsription,true);
		$criteria->compare('component_id',$this->component_id);
		$criteria->compare('type_order',$this->type_order);
		$criteria->compare('sender_name',$this->sender_name,true);
		$criteria->compare('user_id',$this->user_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}