<?php

/**
 * This is the model class for table "stone".
 *
 * The followings are the available columns in table 'stone':
 * @property integer $id
 * @property string $name
 * @property string $image
 * @property integer $collection_id
 * @property integer $meta_id
 * @property string $description
 * @property integer $texture
 * @property integer $tone
 * @property integer $status
 *
 * The followings are the available model relations:
 * @property Product[] $products
 * @property Collection $collection
 * @property Meta $meta
 */
class Stone extends CActiveRecord
{
	private static $_textureList = [
		''=>'Текстура не выбрана',
		1=>'Монотонная',
		2=>'Песчаная',
		3=>'Гранитная',
		4=>'Светопроводящая',
		5=>'Металлическая / с блестками',
		6=>'Мраморная',
		7=>'3D –частицы',
		8=>'Крупная текстура',
		9=>'Слоистая',
	];
	private static $_toneList = [
		''=>'Тон не выбран',
		1=>'Белый',
		2=>'Светло-бежевый',
		3=>'Бежевый',
		4=>'Темно-бежевый / Коричневый',
		5=>'Серый',
		6=>'Красный /Розовый/Фиолетовый',
		7=>'Зеленый/Оттенки зеленого',
		8=>'Желтый',
		9=>'Синий / Голубой/ Оттенки голубого',
		10=>'Оранжевый',
		11=>'Черный',
	];
	public static function getTextureList()
	{
		return self::$_textureList;
	}
	public static function getToneList()
	{
		return self::$_toneList;
	}
	public function textureName()
	{
		if($this->texture && self::$_textureList[$this->texture]) {
			return self::$_textureList[$this->texture];
		}
		return '';
	}
	public function toneName()
	{
		if($this->tone && self::$_toneList[$this->tone]) {
			return self::$_toneList[$this->tone];
		}
		return '';
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'stone';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, image, collection_id, description', 'required'),
			array('collection_id, meta_id, texture, tone, status', 'numerical', 'integerOnly'=>true),
			array('name, image', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, name, image, collection_id, meta_id, description, texture, tone, status', 'safe', 'on'=>'search'),
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
			'products' => array(self::HAS_MANY, 'Product', 'stone_id'),
			'collection' => array(self::BELONGS_TO, 'Collection', 'collection_id'),
			'meta' => array(self::BELONGS_TO, 'Meta', 'meta_id'),
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
			'collection_id' => 'Collection',
			'meta_id' => 'Meta',
			'description' => 'Description',
			'texture' => 'Texture',
			'tone' => 'Tone',
			'status' => 'Status',
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
		$criteria->compare('collection_id',$this->collection_id);
		$criteria->compare('meta_id',$this->meta_id);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('texture',$this->texture);
		$criteria->compare('tone',$this->tone);
		$criteria->compare('status',$this->status);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Stone the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
