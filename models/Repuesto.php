<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tblrepuesto".
 *
 * @property int $id_rep
 * @property string $nomrep
 * @property string $desrep
 * @property string $entrep
 * @property int $canrep
 */
class Repuesto extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tblrepuesto';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nomrep', 'desrep', 'entrep', 'canrep'], 'required'],
            [['desrep'], 'string'],
            [['entrep'], 'safe'],
            [['canrep', 'prerep'], 'integer'],
            [['nomrep'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_rep' => 'Id Rep',
            'nomrep' => 'Nomrep',
            'desrep' => 'Desrep',
            'entrep' => 'Entrep',
            'canrep' => 'Canrep',
            'prerep' => 'Precio'
        ];
    }
}
