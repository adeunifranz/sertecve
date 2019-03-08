<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tbltrabajo".
 *
 * @property int $id_est
 * @property string $estest
 * @property string $iniest
 * @property string $finest
 * @property string $resest
 */
class Trabajo extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbltrabajo';
    }

    public $repu; //arreglo de "repuestos utilizados"
    public $reca; //arreglo de "cantidades"

    public $seru; //arreglo de "servicios utilizados"

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['vehtra','esttra', 'initra', 'fintra', 'restra'], 'required'],
            [['initra', 'fintra', 'vehiculos', 'repuestos', 'repdisp','servicios','repu', 'reca','seru','rd','sd'], 'safe'],
            [['restra'], 'string'],
            [['esttra'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_tra' => 'CODIGO',
            'vehtra' => 'VEHICULO',
            'esttra' => 'ESTADO DEL TRABAJO',
            'initra' => 'FECHA DE INICIO',
            'fintra' => 'FECHA DE FINAL',
            'restra' => 'RESULTADO O DIAGNOSTICO',
            'repu'   => 'REPUESTOS UTILIZADOS',
            'seru'   => 'SERVICIOS UTILIZADOS'
        ];
    }

    public function getVehiculos(){
        return yii\helpers\ArrayHelper::map(\app\models\Vehiculo::find()->all(), 'id_veh', 'plaveh');
    }

    public function getRepuestos(){
    $repuestos=null;
    if(!$this->IsNewRecord){
        $connection=Yii::$app->db;
        $query='
        SELECT  id_rep as id,
                fecreu as fecha,
                nomrep as nombre,
                canreu as cantidad,
                prerep as precio

        FROM    tbltrabajo
                JOIN tblrepuestosu
                JOIN tblrepuesto
                     ON id_tra = trareu
                        AND repreu = id_rep
        WHERE   id_tra = trareu
                AND repreu = id_rep
                AND trareu='.$this->id_tra.
        ' ORDER BY fecreu';
        $repuestos = $connection->createCommand($query)->queryAll();
    } else {
        $repuestos = [];
    };
        return $repuestos;
    }

    public function getRepdisp()
    {
        $connection=Yii::$app->db;
        $query='SELECT id_rep as id, nomrep as nombre, prerep as precio, canrep as cantidad FROM tblrepuesto';
        $repuestos = $connection->createCommand($query)->queryAll();
        return $repuestos;        
    }

    public function Rep()
    {
        $repuestos = yii\helpers\ArrayHelper::map(Repuestosu::find()->select('repreu')->where(['trareu'=>$this->id_tra])->all(),'repreu','repreu');
        return $repuestos;
    }

    public function Ser()
    {
        $servicios = yii\helpers\ArrayHelper::map(Serviciosu::find()->select('serseu')->where(['traseu'=>$this->id_tra])->all(),'serseu','serseu');
        return $servicios;
    }

    public function getSd()
    {
        return yii\helpers\ArrayHelper::map(\app\models\Servicio::find()->all(), 'id_ser', 'desser');
    }
}
