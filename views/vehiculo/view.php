<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Vehiculo */

$this->title = 'Registro Nº '.$model->id_veh;
$this->params['breadcrumbs'][] = ['label' => 'Vehiculos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="vehiculo-view">

    <p class="lead pull-left">&nbsp;<?= 'Vehiculo registrado'?></p>
    <p class="lead pull-right"><?= Html::encode($this->title)?>&nbsp;</p>


    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
//            'id_veh',
            'plaveh',
            'marveh',
            'tipveh',
            'modveh',
            'chaveh',
            'colveh',
            'pueveh',
            'traveh',
            'proveh',
        ],
    ]) ?>

</div>
