<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Trabajo */

$this->title = 'Modificar Trabajo: ' . $model->id_tra;
$this->params['breadcrumbs'][] = ['label' => 'Trabajos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_tra, 'url' => ['view', 'id' => $model->id_tra]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="trabajo-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
