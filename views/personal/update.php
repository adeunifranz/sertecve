<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Personal */

$this->title = Yii::t('app', 'Modificar Registro {modelClass} Nº : ', [
    'modelClass' => 'Personal',
]) . $model->id_per;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Personal'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_per, 'url' => ['view', 'id' => $model->id_per]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Modificar');
?>
<div class="personal-update">

    <h2 align="center"><?= Html::encode($this->title) ?></h2>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
