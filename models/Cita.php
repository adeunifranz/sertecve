<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tblcita".
 *
 * @property integer $id_cit
 * @property string $feccit
 * @property integer $sercit
 * @property integer $vehcit
 * @property string $obscit
 */
class Cita extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tblcita';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['feccit', 'sercit', 'vehcit', 'obscit'], 'required'],
            [['feccit'], 'safe'],
            [['sercit', 'vehcit'], 'integer'],
            [['obscit'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_cit' => 'CODIGO',
            'feccit' => 'FECHA DE CITA',
            'sercit' => 'SERVICIO',
            'vehcit' => 'VEHICULO',
            'obscit' => 'OBSERVACIONES',
        ];
    }
}
