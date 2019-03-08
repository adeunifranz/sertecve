<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tblserviciosu".
 *
 * @property int $id_seu
 * @property int $serseu
 * @property string $fecseu
 * @property int $traseu
 */
class Serviciosu extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tblserviciou';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['serseu', 'fecseu', 'traseu'], 'required'],
            [['serseu', 'traseu'], 'integer'],
            [['fecseu'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_seu' => 'Id Seu',
            'serseu' => 'Serseu',
            'fecseu' => 'Fecseu',
            'traseu' => 'Traseu',
        ];
    }
}
