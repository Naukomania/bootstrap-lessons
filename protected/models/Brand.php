<?php

/**
 * This is the model class for table "brand".
 *
 * The followings are the available columns in table 'brand':
 * @property integer $id
 * @property string $name
 * @property string $image
 * @property string $description
 * @property string $descriptionCollEx
 * @property integer $meta_id
 * @property string $title
 * @property integer $country
 *
 * The followings are the available model relations:
 * @property Meta $meta
 * @property Collection[] $collections
 */
class Brand extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'brand';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name', 'required'),
			array('meta_id, country', 'numerical', 'integerOnly'=>true),
			array('name, image, title', 'length', 'max'=>255),
			array('description, descriptionCollEx', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, name, image, description, descriptionCollEx, meta_id, title, country', 'safe', 'on'=>'search'),
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
			'meta' => array(self::BELONGS_TO, 'Meta', 'meta_id'),
			'collections' => array(self::HAS_MANY, 'Collection', 'brand_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'name' => 'Name',
			'image' => 'Image',
			'description' => 'Description',
			'descriptionCollEx' => 'Description Coll Ex',
			'meta_id' => 'Meta',
			'title' => 'Title',
			'country' => 'Country',
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
		$criteria->compare('name',$this->name,true);
		$criteria->compare('image',$this->image,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('descriptionCollEx',$this->descriptionCollEx,true);
		$criteria->compare('meta_id',$this->meta_id);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('country',$this->country);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Brand the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public static function getList()
	{
		$models = self::model()->findAll();
		if (!$models) {
			return array('' => '');
		}
		$arList = array('' => '');
		foreach ($models as $model) {
			$arList[$model->id] = $model->name;
		}
		return $arList;
	}

	public function getCollectionItems()
	{
		$items = Collection::getList($this->id);
		unset($items['']);
		if (!$items) {
			return [];
		}
		$result = [];
		foreach ($items as $id => $itemName) {
			$result[] = [
				'name' => $itemName,
				'href' => '#',
				'id' => $id
			];
		}
		$result[0]['active'] = true;
		return $result;
	}
}
