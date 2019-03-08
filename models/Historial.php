<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tblhistorial".
 *
 * @property integer $id_his
 * @property integer $clihis
 * @property integer $vehhis
 * @property integer $serhis
 * @property string $obshis
 */
class Historial extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tblhistorial';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['clihis', 'vehhis', 'serhis', 'obshis'], 'required'],
            [['clihis', 'vehhis', 'serhis'], 'integer'],
            [['obshis'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_his' => 'Id His',
            'clihis' => 'Clihis',
            'vehhis' => 'Vehhis',
            'serhis' => 'Serhis',
            'obshis' => 'Obshis',
        ];
    }
}
