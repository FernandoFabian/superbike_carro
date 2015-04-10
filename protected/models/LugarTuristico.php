<?php

/**
 * This is the model class for table "lugar_turistico".
 *
 * The followings are the available columns in table 'lugar_turistico':
 * @property integer $lugar_codigo
 * @property integer $tipo_lugar_cod
 * @property string $lugar_nombre
 * @property string $lugar_descripcion
 *
 * The followings are the available model relations:
 * @property TipoLugarTuristico $tipoLugarCod
 * @property Ruta[] $rutas
 */
class LugarTuristico extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'lugar_turistico';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('tipo_lugar_cod, lugar_nombre, lugar_descripcion', 'required'),
			array('tipo_lugar_cod', 'numerical', 'integerOnly'=>true),
			array('lugar_nombre', 'length', 'max'=>30),
			array('lugar_descripcion', 'length', 'max'=>100),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('lugar_codigo, tipo_lugar_cod, lugar_nombre, lugar_descripcion', 'safe', 'on'=>'search'),
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
			'tipoLugarCod' => array(self::BELONGS_TO, 'TipoLugarTuristico', 'tipo_lugar_cod'),
			'rutas' => array(self::MANY_MANY, 'Ruta', 'ruta_lugarturistico(lugar_codigo, ruta_codigo)'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'lugar_codigo' => 'Lugar Codigo',
			'tipo_lugar_cod' => 'Tipo Lugar Cod',
			'lugar_nombre' => 'Lugar Nombre',
			'lugar_descripcion' => 'Lugar Descripcion',
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

		$criteria->compare('lugar_codigo',$this->lugar_codigo);
		$criteria->compare('tipo_lugar_cod',$this->tipo_lugar_cod);
		$criteria->compare('lugar_nombre',$this->lugar_nombre,true);
		$criteria->compare('lugar_descripcion',$this->lugar_descripcion,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return LugarTuristico the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
