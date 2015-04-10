<?php

/**
 * This is the model class for table "producto".
 *
 * The followings are the available columns in table 'producto':
 * @property integer $prd_codigo
 * @property integer $tip_prd_codigo
 * @property integer $prov_codigo
 * @property string $prd_descripcion
 * @property string $prd_marca
 * @property integer $prd_precio
 *
 * The followings are the available model relations:
 * @property OrdenArriendo[] $ordenArriendos
 * @property OrdenCompra[] $ordenCompras
 * @property TipoProducto $tipPrdCodigo
 * @property Proveedor $provCodigo
 * @property Sucursal[] $sucursals
 * @property Promocion[] $promocions
 */
class Producto extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'producto';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('tip_prd_codigo, prov_codigo, prd_descripcion, prd_marca, prd_precio', 'required'),
			array('tip_prd_codigo, prov_codigo, prd_precio', 'numerical', 'integerOnly'=>true),
			array('prd_descripcion', 'length', 'max'=>40),
			array('prd_marca', 'length', 'max'=>20),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('prd_codigo, tip_prd_codigo, prov_codigo, prd_descripcion, prd_marca, prd_precio', 'safe', 'on'=>'search'),
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
			'ordenArriendos' => array(self::MANY_MANY, 'OrdenArriendo', 'oa_solicita_producto(prd_codigo, oa_codigo)'),
			'ordenCompras' => array(self::MANY_MANY, 'OrdenCompra', 'oc_solicita_producto(prd_codigo, oc_codigo)'),
			'tipPrdCodigo' => array(self::BELONGS_TO, 'TipoProducto', 'tip_prd_codigo'),
			'provCodigo' => array(self::BELONGS_TO, 'Proveedor', 'prov_codigo'),
			'sucursals' => array(self::MANY_MANY, 'Sucursal', 'producto_sucursal(prd_codigo, suc_codigo)'),
			'promocions' => array(self::MANY_MANY, 'Promocion', 'promocion_producto(prd_codigo, promo_codigo)'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'prd_codigo' => 'Prd Codigo',
			'tip_prd_codigo' => 'Tip Prd Codigo',
			'prov_codigo' => 'Prov Codigo',
			'prd_descripcion' => 'Prd Descripcion',
			'prd_marca' => 'Prd Marca',
			'prd_precio' => 'Prd Precio',
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

		$criteria->compare('prd_codigo',$this->prd_codigo);
		$criteria->compare('tip_prd_codigo',$this->tip_prd_codigo);
		$criteria->compare('prov_codigo',$this->prov_codigo);
		$criteria->compare('prd_descripcion',$this->prd_descripcion,true);
		$criteria->compare('prd_marca',$this->prd_marca,true);
		$criteria->compare('prd_precio',$this->prd_precio);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Producto the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
