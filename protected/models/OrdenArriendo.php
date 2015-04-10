<?php

/**
 * This is the model class for table "orden_arriendo".
 *
 * The followings are the available columns in table 'orden_arriendo':
 * @property integer $oa_codigo
 * @property integer $tur_codigo
 * @property string $oa_fecha
 * @property string $oa_retiro
 * @property integer $oa_monto_total
 * @property integer $oa_monto_anticipo
 * @property integer $oa_porc_anticipo
 * @property string $oa_fecha_ini
 * @property string $oa_fecha_fin
 *
 * The followings are the available model relations:
 * @property Producto[] $productos
 * @property Turista $turCodigo
 * @property TipoPago[] $tipoPagos
 * @property Personal[] $personals
 */
class OrdenArriendo extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'orden_arriendo';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('tur_codigo, oa_fecha, oa_retiro, oa_monto_total, oa_monto_anticipo, oa_porc_anticipo, oa_fecha_ini, oa_fecha_fin', 'required'),
			array('tur_codigo, oa_monto_total, oa_monto_anticipo, oa_porc_anticipo', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('oa_codigo, tur_codigo, oa_fecha, oa_retiro, oa_monto_total, oa_monto_anticipo, oa_porc_anticipo, oa_fecha_ini, oa_fecha_fin', 'safe', 'on'=>'search'),
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
			'productos' => array(self::MANY_MANY, 'Producto', 'oa_solicita_producto(oa_codigo, prd_codigo)'),
			'turCodigo' => array(self::BELONGS_TO, 'Turista', 'tur_codigo'),
			'tipoPagos' => array(self::MANY_MANY, 'TipoPago', 'pago_oa(oa_codigo, pago_codigo)'),
			'personals' => array(self::MANY_MANY, 'Personal', 'personal_oa(oa_codigo, per_codigo)'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'oa_codigo' => 'Oa Codigo',
			'tur_codigo' => 'Tur Codigo',
			'oa_fecha' => 'Oa Fecha',
			'oa_retiro' => 'Oa Retiro',
			'oa_monto_total' => 'Oa Monto Total',
			'oa_monto_anticipo' => 'Oa Monto Anticipo',
			'oa_porc_anticipo' => 'Oa Porc Anticipo',
			'oa_fecha_ini' => 'Oa Fecha Ini',
			'oa_fecha_fin' => 'Oa Fecha Fin',
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

		$criteria->compare('oa_codigo',$this->oa_codigo);
		$criteria->compare('tur_codigo',$this->tur_codigo);
		$criteria->compare('oa_fecha',$this->oa_fecha,true);
		$criteria->compare('oa_retiro',$this->oa_retiro,true);
		$criteria->compare('oa_monto_total',$this->oa_monto_total);
		$criteria->compare('oa_monto_anticipo',$this->oa_monto_anticipo);
		$criteria->compare('oa_porc_anticipo',$this->oa_porc_anticipo);
		$criteria->compare('oa_fecha_ini',$this->oa_fecha_ini,true);
		$criteria->compare('oa_fecha_fin',$this->oa_fecha_fin,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return OrdenArriendo the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
