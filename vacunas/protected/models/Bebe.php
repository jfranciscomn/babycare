<?php

/**
 * This is the model class for table "bebes".
 *
 * The followings are the available columns in table 'bebes':
 * @property string $id
 * @property string $app
 * @property string $nombre
 * @property string $apm
 * @property string $sexo
 * @property string $fecha_nac
 */
class Bebe extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Bebe the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'bebes';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('app, nombre, apm, sexo', 'length', 'max'=>100),
			array('fecha_nac', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, app, nombre, apm, sexo, fecha_nac', 'safe', 'on'=>'search'),
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
			'id' => 'ID',
			'app' => 'App',
			'nombre' => 'Nombre',
			'apm' => 'Apm',
			'sexo' => 'Sexo',
			'fecha_nac' => 'Fecha Nac',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id,true);
		$criteria->compare('app',$this->app,true);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('apm',$this->apm,true);
		$criteria->compare('sexo',$this->sexo,true);
		$criteria->compare('fecha_nac',$this->fecha_nac,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}