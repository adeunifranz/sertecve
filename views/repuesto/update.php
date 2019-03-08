<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Repuesto */

$this->title = Yii::t('app', 'Modificar Registro {modelClass} Nº : ', [
    'modelClass' => 'Repuesto',
]) . $model->id_rep;
$this->params['breadcrumbs'][] = ['label' => 'Repuestos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_rep, 'url' => ['view', 'id' => $model->id_rep]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="repuesto-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
