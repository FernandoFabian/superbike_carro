<?php

/**
 * This is the model class for table "turista".
 *
 * The followings are the available columns in table 'turista':
 * @property integer $tur_codigo
 * @property string $tur_alias
 * @property string $tur_nombre
 * @property string $tur_direccion
 * @property integer $tur_telefono
 * @property string $tur_fecha_nac
 * @property string $tur_email
 * @property string $tur_pass
 * @property string $tur_nacionalidad
 *
 * The followings are the available model relations:
 * @property Ruta[] $rutas
 * @property OrdenArriendo[] $ordenArriendos
 * @property OrdenCompra[] $ordenCompras
 * @property Ruta[] $rutas1
 * @property Ruta[] $rutas2
 */
class Turista extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function validatePassword($password){

return $this->hashPassword($password)===$this->tur_pass;
}
 
public function hashPassword($password){
return ($password);
}
	public function tableName()
	{
		return 'turista';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('tur_alias, tur_nombre, tur_direccion, tur_telefono, tur_fecha_nac, tur_email, tur_pass, tur_nacionalidad', 'required'),
			array('tur_telefono', 'numerical', 'integerOnly'=>true),
			array('tur_alias, tur_pass', 'length', 'max'=>20),
			array('tur_nombre, tur_direccion, tur_nacionalidad', 'length', 'max'=>50),
			array('tur_email', 'length', 'max'=>30),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('tur_codigo, tur_alias, tur_nombre, tur_direccion, tur_telefono, tur_fecha_nac, tur_email, tur_pass, tur_nacionalidad', 'safe', 'on'=>'search'),
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
			'rutas' => array(self::MANY_MANY, 'Ruta', 'escoge_ruta(tur_codigo, ruta_codigo)'),
			'ordenArriendos' => array(self::HAS_MANY, 'OrdenArriendo', 'tur_codigo'),
			'ordenCompras' => array(self::HAS_MANY, 'OrdenCompra', 'tur_codigo'),
			'rutas1' => array(self::MANY_MANY, 'Ruta', 'recomendaciones(tur_codigo, ruta_codigo)'),
			'rutas2' => array(self::MANY_MANY, 'Ruta', 'vivencia(tur_codigo, ruta_codigo)'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'tur_codigo' => 'Tur Codigo',
			'tur_alias' => 'Tur Alias',
			'tur_nombre' => 'Tur Nombre',
			'tur_direccion' => 'Tur Direccion',
			'tur_telefono' => 'Tur Telefono',
			'tur_fecha_nac' => 'Tur Fecha Nac',
			'tur_email' => 'Tur Email',
			'tur_pass' => 'Tur Pass',
			'tur_nacionalidad' => 'Tur Nacionalidad',
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

		$criteria->compare('tur_codigo',$this->tur_codigo);
		$criteria->compare('tur_alias',$this->tur_alias,true);
		$criteria->compare('tur_nombre',$this->tur_nombre,true);
		$criteria->compare('tur_direccion',$this->tur_direccion,true);
		$criteria->compare('tur_telefono',$this->tur_telefono);
		$criteria->compare('tur_fecha_nac',$this->tur_fecha_nac,true);
		$criteria->compare('tur_email',$this->tur_email,true);
		$criteria->compare('tur_pass',$this->tur_pass,true);
		$criteria->compare('tur_nacionalidad',$this->tur_nacionalidad,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Turista the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
