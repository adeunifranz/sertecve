<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tblpersonal".
 *
 * @property integer $id_per
 * @property string $nomper
 * @property string $apeper
 * @property string $telper
 * @property string $emaper
 * @property string $dirper
 * @property string $carper
 * @property string $fecper
 */
class Personal extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tblpersonal';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nomper', 'apeper', 'telper', 'emaper', 'dirper', 'carper', 'fecper'], 'required'],
            [['dirper'], 'string'],
            [['fecper'], 'safe'],
            [['nomper', 'apeper', 'telper', 'emaper', 'carper'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_per' => 'CODIGO',
            'nomper' => 'NOMBRE',
            'apeper' => 'APELLIDO',
            'telper' => 'TELEFONO',
            'emaper' => 'CORREO ELECTRONICO',
            'dirper' => 'DIRECCION',
            'carper' => 'CARGO',
            'fecper' => 'FECHA DE CONTRATO',
        ];
    }
}
