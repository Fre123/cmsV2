<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "departamento".
 *
 * @property integer $ID_DEPARTAMENTO
 * @property string $NOMBRE
 * @property string $FECHA
 *
 * @property Copiadora[] $copiadoras
 */
class Departamento extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'departamento';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ID_DEPARTAMENTO'], 'required'],
            [['ID_DEPARTAMENTO'], 'integer'],
            [['FECHA'], 'safe'],
            [['NOMBRE'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID_DEPARTAMENTO' => 'Id  Departamento',
            'NOMBRE' => 'Nombre',
            'FECHA' => 'Fecha',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCopiadoras()
    {
        return $this->hasMany(Copiadora::className(), ['ID_DEPARTAMENTO' => 'ID_DEPARTAMENTO']);
    }
}
