<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Servicio */

$this->title = Yii::t('app', 'Modificar Registro {modelClass} Nº : ', [
    'modelClass' => 'Servicio',
]) . $model->id_ser;
$this->params['breadcrumbs'][] = ['label' => 'Servicios', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_ser, 'url' => ['view', 'id' => $model->id_ser]];
$this->params['breadcrumbs'][] = 'Modificar';
?>
<div class="servicio-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
