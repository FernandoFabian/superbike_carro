<?php

/**
 * This is the model class for table "localidad".
 *
 * The followings are the available columns in table 'localidad':
 * @property integer $loc_codigo
 * @property string $loc_nombre
 * @property string $loc_ubicación
 * @property string $loc_caracteristicas
 * @property string $loc_atractivos
 *
 * The followings are the available model relations:
 * @property Ruta[] $rutas
 */
class Localidad extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'localidad';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('loc_nombre, loc_ubicación', 'required'),
			array('loc_nombre', 'length', 'max'=>50),
			//array('loc_ubicación, loc_caracteristicas, loc_atractivos', 'length', 'max'=>200),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('loc_codigo, loc_nombre, loc_ubicación, loc_caracteristicas, loc_atractivos', 'safe', 'on'=>'search'),
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
			'rutas' => array(self::MANY_MANY, 'Ruta', 'localidad_ruta(loc_codigo, ruta_codigo)'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'loc_codigo' => 'Loc Codigo',
			'loc_nombre' => 'Loc Nombre',
			'loc_ubicación' => 'Loc Ubicación',
			'loc_caracteristicas' => 'Loc Caracteristicas',
			'loc_atractivos' => 'Loc Atractivos',
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

		$criteria->compare('loc_codigo',$this->loc_codigo);
		$criteria->compare('loc_nombre',$this->loc_nombre,true);
		$criteria->compare('loc_ubicación',$this->loc_ubicación,true);
		$criteria->compare('loc_caracteristicas',$this->loc_caracteristicas,true);
		$criteria->compare('loc_atractivos',$this->loc_atractivos,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Localidad the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
