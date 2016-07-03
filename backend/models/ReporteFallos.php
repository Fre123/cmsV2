<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "reporte_fallos".
 *
 * @property integer $ID_USER
 * @property string $CEDULA_USER
 * @property integer $ESTADO
 * @property string $ID_REPORTE
 * @property integer $ID_COPIADORA
 * @property string $NOVEDADES
 *
 * @property Copiadora $iDCOPIADORA
 */
class ReporteFallos extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'reporte_fallos';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ID_USER', 'ESTADO', 'ID_COPIADORA'], 'integer'],
            [['ID_REPORTE'], 'required'],
            [['CEDULA_USER'], 'string', 'max' => 20],
            [['ID_REPORTE'], 'string', 'max' => 10],
            [['NOVEDADES'], 'string', 'max' => 100],
            [['ID_COPIADORA'], 'exist', 'skipOnError' => true, 'targetClass' => Copiadora::className(), 'targetAttribute' => ['ID_COPIADORA' => 'ID_COPIADORA']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID_USER' => 'Id  User',
            'CEDULA_USER' => 'Cedula  User',
            'ESTADO' => 'Estado',
            'ID_REPORTE' => 'Id  Reporte',
            'ID_COPIADORA' => 'Id  Copiadora',
            'NOVEDADES' => 'Novedades',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIDCOPIADORA()
    {
        return $this->hasOne(Copiadora::className(), ['ID_COPIADORA' => 'ID_COPIADORA']);
    }
}
