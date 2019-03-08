<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tblcliente".
 *
 * @property integer $id_cli
 * @property string $cidcli
 * @property string $nomcli
 * @property string $apecli
 * @property integer $telcli
 * @property string $dircli
 * @property string $emacli
 */
class Cliente extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tblcliente';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cidcli', 'nomcli', 'apecli', 'telcli', 'dircli', 'emacli'], 'required'],
            [['nombrecompleto'],'safe'],
            [['telcli'], 'integer'],
            [['dircli'], 'string'],
            [['cidcli', 'nomcli', 'apecli', 'emacli'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_cli' => 'CODIGO',
            'cidcli' => 'CARNET DE IDENTIDAD',
            'nomcli' => 'NOMBRE',
            'apecli' => 'APELLIDOS',
            'telcli' => 'TELEFONO/CELULAR',
            'dircli' => 'DIRECCION',
            'emacli' => 'EMAIL',
        ];
    }
    public function getNombrecompleto()
    {
        return $this->nomcli.' '.$this->apecli;
    }
}
