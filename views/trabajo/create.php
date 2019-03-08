<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Trabajo */

$this->title = 'Registrar Trabajo';
$this->params['breadcrumbs'][] = ['label' => 'Trabajos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;


?>

<div class="trabajo-create">

    <h1 id="titulo"><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model, 'model2' => $model2,
    ]) ?>

</div>
