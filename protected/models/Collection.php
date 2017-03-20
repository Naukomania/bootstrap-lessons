<?php

/**
 * This is the model class for table "collection".
 *
 * The followings are the available columns in table 'collection':
 * @property integer $id
 * @property string $name
 * @property string $description
 * @property integer $brand_id
 * @property integer $price
 * @property integer $priority
 * @property string $stone_logo
 *
 * The followings are the available model relations:
 * @property Brand $brand
 * @property Stone[] $stones
 */
class Collection extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'collection';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, brand_id', 'required'),
			array('brand_id, price, priority', 'numerical', 'integerOnly'=>true),
			array('name, stone_logo', 'length', 'max'=>255),
			array('description', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, name, description, brand_id, price, priority, stone_logo', 'safe', 'on'=>'search'),
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
			'brand' => array(self::BELONGS_TO, 'Brand', 'brand_id'),
			'stones' => array(self::HAS_MANY, 'Stone', 'collection_id'),
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
			'description' => 'Description',
			'brand_id' => 'Brand',
			'price' => 'Price',
			'priority' => 'Priority',
			'stone_logo' => 'Stone Logo',
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
		$criteria->compare('description',$this->description,true);
		$criteria->compare('brand_id',$this->brand_id);
		$criteria->compare('price',$this->price);
		$criteria->compare('priority',$this->priority);
		$criteria->compare('stone_logo',$this->stone_logo,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Collection the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

		public static function getList($brandId = null)
	{
		$criteria = new CDbCriteria();
		if ($brandId) {
			$criteria->params = array(':brand_id' =>  $brandId);
			$criteria->addCondition('brand_id = :brand_id');
			$criteria->order = 'priority DESC';
		}
		$models = self::model()->findAll($criteria);
		if (!$models) {
			return array('' => '');
		}
		$arList = array('' => '');
		foreach ($models as $model) {
			$arList[$model->id] = $model->name;
		}
		return $arList;
	}

	public static function getItemsForCatalog($id)
	{
		$items = [];
		$catalogModel = self::model()->findByPk($id);
		if(!$catalogModel || !$catalogModel->stones) {
			return [];
		}
		foreach ($catalogModel->stones as $stone) {
			if (!$stone->isDiscountinued()) {
				$items[] = [
					'title' => $stone->name,
					'src' => $stone->image,
					'href' => '/catalog/'.$stone->id,
				];
			}
		}
		return $items;
	}
}
