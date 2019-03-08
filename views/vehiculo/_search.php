<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\VehiculoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="vehiculo-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_veh') ?>

    <?= $form->field($model, 'plaveh') ?>

    <?= $form->field($model, 'marveh') ?>

    <?= $form->field($model, 'tipveh') ?>

    <?= $form->field($model, 'modveh') ?>

    <?php // echo $form->field($model, 'chaveh') ?>

    <?php // echo $form->field($model, 'colveh') ?>

    <?php // echo $form->field($model, 'pueveh') ?>

    <?php // echo $form->field($model, 'traveh') ?>

    <?php // echo $form->field($model, 'proveh') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
