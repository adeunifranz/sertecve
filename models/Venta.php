<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tblventa".
 *
 * @property integer $id_ven
 * @property integer $repven
 * @property string $fecven
 * @property integer $canven
 */
class Venta extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tblventa';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['repven', 'fecven', 'canven'], 'required'],
            [['repven', 'canven'], 'integer'],
            [['fecven'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_ven' => 'Id Ven',
            'repven' => 'Repven',
            'fecven' => 'Fecven',
            'canven' => 'Canven',
        ];
    }
}
