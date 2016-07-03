<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "copiadora".
 *
 * @property integer $ID_COPIADORA
 * @property integer $ID_DEPARTAMENTO
 * @property string $DESCRIPCION
 * @property string $FECHA
 *
 * @property Departamento $iDDEPARTAMENTO
 * @property ReporteFallos[] $reporteFallos
 */
class Copiadora extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'copiadora';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ID_COPIADORA'], 'required'],
            [['ID_COPIADORA', 'ID_DEPARTAMENTO'], 'integer'],
            [['FECHA'], 'safe'],
            [['DESCRIPCION'], 'string', 'max' => 50],
            [['ID_DEPARTAMENTO'], 'exist', 'skipOnError' => true, 'targetClass' => Departamento::className(), 'targetAttribute' => ['ID_DEPARTAMENTO' => 'ID_DEPARTAMENTO']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID_COPIADORA' => 'Id  Copiadora',
            'ID_DEPARTAMENTO' => 'Id  Departamento',
            'DESCRIPCION' => 'Descripcion',
            'FECHA' => 'Fecha',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIDDEPARTAMENTO()
    {
        return $this->hasOne(Departamento::className(), ['ID_DEPARTAMENTO' => 'ID_DEPARTAMENTO']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getReporteFallos()
    {
        return $this->hasMany(ReporteFallos::className(), ['ID_COPIADORA' => 'ID_COPIADORA']);
    }
}
