<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PersonalSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="personal-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_per') ?>

    <?= $form->field($model, 'nomper') ?>

    <?= $form->field($model, 'apeper') ?>

    <?= $form->field($model, 'telper') ?>

    <?= $form->field($model, 'emaper') ?>

    <?php // echo $form->field($model, 'dirper') ?>

    <?php // echo $form->field($model, 'carper') ?>

    <?php // echo $form->field($model, 'fecper') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
