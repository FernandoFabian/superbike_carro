<?php

/**
 * This is the model class for table "ruta".
 *
 * The followings are the available columns in table 'ruta':
 * @property integer $ruta_codigo
 * @property string $ruta_nombre
 * @property integer $ruta_kms
 * @property string $ruta_complejidad
 * @property integer $ruta_dias
 *
 * The followings are the available model relations:
 * @property Turista[] $turistas
 * @property Localidad[] $localidads
 * @property LugarTuristico[] $lugarTuristicos
 * @property Tips[] $tips
 */
class Ruta extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'ruta';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ruta_nombre, ruta_kms, ruta_complejidad, ruta_dias', 'required'),
			array('ruta_kms, ruta_dias', 'numerical', 'integerOnly'=>true),
			array('ruta_nombre', 'length', 'max'=>30),
			array('ruta_complejidad', 'length', 'max'=>5),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('ruta_codigo, ruta_nombre, ruta_kms, ruta_complejidad, ruta_dias', 'safe', 'on'=>'search'),
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
			'turistas' => array(self::MANY_MANY, 'Turista', 'vivencia(ruta_codigo, tur_codigo)'),
			'localidads' => array(self::MANY_MANY, 'Localidad', 'localidad_ruta(ruta_codigo, loc_codigo)'),
			'lugarTuristicos' => array(self::MANY_MANY, 'LugarTuristico', 'ruta_lugarturistico(ruta_codigo, lugar_codigo)'),
			'tips' => array(self::MANY_MANY, 'Tips', 'ruta_tips(ruta_codigo, tip_codigo)'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ruta_codigo' => 'Ruta Codigo',
			'ruta_nombre' => 'Ruta Nombre',
			'ruta_kms' => 'Ruta Kms',
			'ruta_complejidad' => 'Ruta Complejidad',
			'ruta_dias' => 'Ruta Dias',
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

		$criteria->compare('ruta_codigo',$this->ruta_codigo);
		$criteria->compare('ruta_nombre',$this->ruta_nombre,true);
		$criteria->compare('ruta_kms',$this->ruta_kms);
		$criteria->compare('ruta_complejidad',$this->ruta_complejidad,true);
		$criteria->compare('ruta_dias',$this->ruta_dias);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Ruta the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
