<?php

/**
 * This is the model class for table "personal".
 *
 * The followings are the available columns in table 'personal':
 * @property string $per_codigo
 * @property string $per_rut
 * @property string $per_nombre
 * @property string $per_direccion
 * @property integer $per_telefono
 * @property string $per_fecha_nac
 * @property string $usu_email
 * @property string $usu_pass
 */
class Personal extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */

		public function validatePassword($password){

return $this->hashPassword($password)===$this->usu_pass;
}
 
public function hashPassword($password){
return ($password);
}
	public function tableName()
	{
		return 'personal';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('per_rut, per_nombre, per_direccion, per_telefono, per_fecha_nac, usu_email, usu_pass', 'required'),
			array('per_telefono', 'numerical', 'integerOnly'=>true),
			array('per_rut', 'length', 'max'=>10),
			array('per_nombre, per_direccion', 'length', 'max'=>50),
			array('usu_email', 'length', 'max'=>30),
			array('usu_pass', 'length', 'max'=>20),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('per_codigo, per_rut, per_nombre, per_direccion, per_telefono, per_fecha_nac, usu_email, usu_pass', 'safe', 'on'=>'search'),
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
			'per_codigo' => 'Per Codigo',
			'per_rut' => 'Per Rut',
			'per_nombre' => 'Per Nombre',
			'per_direccion' => 'Per Direccion',
			'per_telefono' => 'Per Telefono',
			'per_fecha_nac' => 'Per Fecha Nac',
			'usu_email' => 'Usu Email',
			'usu_pass' => 'Usu Pass',
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

		$criteria->compare('per_codigo',$this->per_codigo,true);
		$criteria->compare('per_rut',$this->per_rut,true);
		$criteria->compare('per_nombre',$this->per_nombre,true);
		$criteria->compare('per_direccion',$this->per_direccion,true);
		$criteria->compare('per_telefono',$this->per_telefono);
		$criteria->compare('per_fecha_nac',$this->per_fecha_nac,true);
		$criteria->compare('usu_email',$this->usu_email,true);
		$criteria->compare('usu_pass',$this->usu_pass,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Personal the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
