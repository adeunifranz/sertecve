<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tblservicio".
 *
 * @property integer $id_ser
 * @property string $nomser
 * @property string $desser
 */
class Servicio extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tblservicio';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['desser', 'preser'], 'required'],
            [['desser'], 'string'],
            [['preser'], 'integer'],
            [['desser'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_ser' => 'CODIGO',
            'desser' => 'DESCRIPCION',
            'preser' => 'PRECIO'
        ];
    }
}
