<?php

/**
 * This is the model class for table "tips".
 *
 * The followings are the available columns in table 'tips':
 * @property integer $tip_codigo
 * @property string $tip_nombre
 * @property string $tip_descripcion
 *
 * The followings are the available model relations:
 * @property Ruta[] $rutas
 */
class Tips extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tips';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('tip_nombre, tip_descripcion', 'required'),
			array('tip_nombre', 'length', 'max'=>50),
			array('tip_descripcion', 'length', 'max'=>200),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('tip_codigo, tip_nombre, tip_descripcion', 'safe', 'on'=>'search'),
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
			'rutas' => array(self::MANY_MANY, 'Ruta', 'ruta_tips(tip_codigo, ruta_codigo)'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'tip_codigo' => 'Tip Codigo',
			'tip_nombre' => 'Tip Nombre',
			'tip_descripcion' => 'Tip Descripcion',
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

		$criteria->compare('tip_codigo',$this->tip_codigo);
		$criteria->compare('tip_nombre',$this->tip_nombre,true);
		$criteria->compare('tip_descripcion',$this->tip_descripcion,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Tips the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
