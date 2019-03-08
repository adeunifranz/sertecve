<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TrabajoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="trabajo-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_tra') ?>

    <?= $form->field($model, 'esttra') ?>

    <?= $form->field($model, 'initra') ?>

    <?= $form->field($model, 'fintra') ?>

    <?= $form->field($model, 'restra') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
