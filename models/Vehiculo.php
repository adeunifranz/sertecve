<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tblvehiculo".
 *
 * @property integer $id_veh
 * @property string $plaveh
 * @property string $marveh
 * @property string $tipveh
 * @property integer $modveh
 * @property string $chaveh
 * @property string $colveh
 * @property integer $pueveh
 * @property string $traveh
 * @property integer $proveh
 */
class Vehiculo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tblvehiculo';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['plaveh', 'marveh', 'tipveh', 'modveh', 'chaveh', 'colveh', 'pueveh', 'traveh', 'proveh'], 'required'],
            [['propietarios'], 'safe'],
            [['modveh', 'pueveh', 'proveh'], 'integer'],
            [['plaveh', 'marveh', 'tipveh', 'chaveh', 'colveh', 'traveh'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_veh' => 'CODIGO',
            'plaveh' => 'PLACA DE CIRCULACION',
            'marveh' => 'MARCA',
            'tipveh' => 'TIPO',
            'modveh' => 'MODELO',
            'chaveh' => 'CHASIS',
            'colveh' => 'COLOR',
            'pueveh' => 'PUERTAS',
            'traveh' => 'TRANSMISION',
            'proveh' => 'PROPIETARIO',
        ];
    }
    public function getpropietarios()
    {
        return yii\helpers\ArrayHelper::map(\app\models\Cliente::find()->all(), 'id_cli', 'nombrecompleto');
    }
}
