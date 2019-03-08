<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Cliente */

$this->title = $model->id_cli;
$this->params['breadcrumbs'][] = ['label' => 'Clientes', 'url' => ['index']];
$this->params['breadcrumbs'][] = 'Registro Nº '.$this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="cliente-view">

    <p class="lead pull-left">&nbsp;<?= 'Cliente registrado'?></p>
    <p class="lead pull-right"><?= 'Nº '.Html::encode($this->title)?>&nbsp;</p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'id_cli',
            'cidcli',
            'nomcli',
            'apecli',
            'telcli',
            'dircli:ntext',
            'emacli',
        ],
    ]) ?>

</div>
