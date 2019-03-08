<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Repuesto */
/* @var $form yii\widgets\ActiveForm */
?>
<?php 
if ($model->isNewRecord) {
    $model->entrep = date("Y-m-d");
}
else {
    $model->entrep = Yii::$app->formatter->asDate($model->entrep, 'php:Y-m-d');
}
?>
<div class="repuesto-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nomrep',[
        'inputOptions' => [
                'class' => 'form-control transparent',
                'placeholder' => 'ESCRIBA EL NOMBRE DEL REPUESTO',
                'style'=>'text-transform: uppercase',
                'onblur'=>'javascript:this.value=this.value.toUpperCase().trim();'
                    ]])->textInput() ?>

    <?= $form->field($model, 'desrep',[
        'inputOptions' => [
                'class' => 'form-control transparent',
                'placeholder' => 'ESCRIBA LA DESCRIPCION',
                'style'=>'text-transform: uppercase',
                'onblur'=>'javascript:this.value=this.value.toUpperCase().trim();'
                    ]])->textarea(['rows' => 2]) ?>

    <?= $form->field($model, 'entrep',[
        'inputOptions' => [
                'class' => 'form-control transparent',
                'type'=>'date',
                'style'=>'text-transform: uppercase']])->textInput() ?>

    <?= $form->field($model, 'canrep',[
        'inputOptions' => [
                'class' => 'form-control transparent',
                'type'=>'number',
                'min' => '1',
                'placeholder' => 'ESCRIBA LA CANTIDAD INGRESADA',
                'style'=>'text-transform: uppercase',
                'onblur'=>'javascript:this.value=this.value.replace(/[^\d]/g,"").trim();',
                'onkeydown'=>'javascript:this.value=this.value.replace(/[^\d]/g,"").trim();']])->textInput() ?>
    <?php
    echo $form->field($model, 'prerep',[
        'inputOptions' => [
                'class' => 'form-control transparent',
                'type'=>'number',
                'min' => '1',
                'placeholder' => 'ESCRIBA EL PRECIO DEL REPUESTO',
                'style'=>'text-transform: uppercase',
                'onblur'=>'javascript:this.value=this.value.replace(/[^\d]/g,"").trim();',
                'onkeydown'=>'javascript:this.value=this.value.replace(/[^\d]/g,"").trim();']])->textInput() ?>
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Registrar') : Yii::t('app', 'Modificar'), ['class' => $model->isNewRecord ? 'btn btn-success btn-lg col-lg-5' : 'btn btn-primary btn-lg col-lg-6']) ?>
        <?= Html::a('Cancelar', ['/repuesto'], ['class' => 'btn btn-default btn-lg col-lg-5',])  ?>           
    </div>

    <?php ActiveForm::end(); ?>

</div>
