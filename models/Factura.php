<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tblfactura".
 *
 * @property integer $id_fac
 * @property string $nomfac
 * @property string $nitfac
 * @property string $fecfac
 * @property string $detfac
 */
class Factura extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tblfactura';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nomfac', 'nitfac', 'fecfac', 'detfac'], 'required'],
            [['fecfac'], 'safe'],
            [['detfac'], 'integer'],
            [['nomfac', 'nitfac'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_fac' => 'Id Fac',
            'nomfac' => 'Nomfac',
            'nitfac' => 'Nitfac',
            'fecfac' => 'Fecfac',
            'detfac' => 'Detfac',
        ];
    }
}
