<?php

/**
 * This is the model class for table "proveedor".
 *
 * The followings are the available columns in table 'proveedor':
 * @property integer $prov_codigo
 * @property string $prov_nombre
 * @property string $prov_giro
 * @property integer $prov_telefono
 * @property string $prov_email
 *
 * The followings are the available model relations:
 * @property Producto[] $productos
 */
class Proveedor extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'proveedor';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('prov_nombre, prov_giro, prov_telefono, prov_email', 'required'),
			array('prov_telefono', 'numerical', 'integerOnly'=>true),
			array('prov_nombre, prov_giro', 'length', 'max'=>50),
			array('prov_email', 'length', 'max'=>30),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('prov_codigo, prov_nombre, prov_giro, prov_telefono, prov_email', 'safe', 'on'=>'search'),
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
			'productos' => array(self::HAS_MANY, 'Producto', 'prov_codigo'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'prov_codigo' => 'Prov Codigo',
			'prov_nombre' => 'Prov Nombre',
			'prov_giro' => 'Prov Giro',
			'prov_telefono' => 'Prov Telefono',
			'prov_email' => 'Prov Email',
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

		$criteria->compare('prov_codigo',$this->prov_codigo);
		$criteria->compare('prov_nombre',$this->prov_nombre,true);
		$criteria->compare('prov_giro',$this->prov_giro,true);
		$criteria->compare('prov_telefono',$this->prov_telefono);
		$criteria->compare('prov_email',$this->prov_email,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Proveedor the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
