<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Personal */

$this->title = $model->id_per;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Personal'), 'url' => ['index']];
$this->params['breadcrumbs'][] = 'Registro Nº '.$this->title;
?>
<div class="personal-view">

    <p class="lead pull-left">&nbsp;<?= 'Personal registrado'?></p>
    <p class="lead pull-right"><?= 'Nº '.Html::encode($this->title)?>&nbsp;</p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'nomper',
            'apeper',
            'telper',
            'emaper',
            'dirper:ntext',
            'carper',
            'fecper',
        ],
    ]) ?>

</div>
