<?php

/**
 * This is the model class for table "orden_compra".
 *
 * The followings are the available columns in table 'orden_compra':
 * @property integer $oc_codigo
 * @property integer $tur_codigo
 * @property string $oc_fecha
 * @property string $oc_retiro
 * @property integer $oc_monto_total
 *
 * The followings are the available model relations:
 * @property Producto[] $productos
 * @property Turista $turCodigo
 * @property TipoPago[] $tipoPagos
 * @property Personal[] $personals
 */
class OrdenCompra extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'orden_compra';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('tur_codigo, oc_fecha, oc_retiro, oc_monto_total', 'required'),
			array('tur_codigo, oc_monto_total', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('oc_codigo, tur_codigo, oc_fecha, oc_retiro, oc_monto_total', 'safe', 'on'=>'search'),
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
			'productos' => array(self::MANY_MANY, 'Producto', 'oc_solicita_producto(oc_codigo, prd_codigo)'),
			'turCodigo' => array(self::BELONGS_TO, 'Turista', 'tur_codigo'),
			'tipoPagos' => array(self::MANY_MANY, 'TipoPago', 'pago_oc(oc_codigo, pago_codigo)'),
			'personals' => array(self::MANY_MANY, 'Personal', 'personal_oc(oc_codigo, per_codigo)'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'oc_codigo' => 'Oc Codigo',
			'tur_codigo' => 'Tur Codigo',
			'oc_fecha' => 'Oc Fecha',
			'oc_retiro' => 'Oc Retiro',
			'oc_monto_total' => 'Oc Monto Total',
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

		$criteria->compare('oc_codigo',$this->oc_codigo);
		$criteria->compare('tur_codigo',$this->tur_codigo);
		$criteria->compare('oc_fecha',$this->oc_fecha,true);
		$criteria->compare('oc_retiro',$this->oc_retiro,true);
		$criteria->compare('oc_monto_total',$this->oc_monto_total);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return OrdenCompra the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
