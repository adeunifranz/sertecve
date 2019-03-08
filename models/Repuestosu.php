<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tblrepuestosu".
 *
 * @property int $id_reu
 * @property int $repreu
 * @property string $fecreu
 * @property int $trareu
 */
class Repuestosu extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tblrepuestosu';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['repreu', 'fecreu', 'trareu', 'canreu'], 'required'],
            [['repreu', 'trareu', 'canreu'], 'integer'],
            [['fecreu'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_reu' => 'CODIGO',
            'repreu' => 'REPUESTO',
            'canreu' => 'CANTIDAD',
            'fecreu' => 'FECHA',
            'trareu' => 'CODIGO DE TRABAJO',
        ];
    }
}
