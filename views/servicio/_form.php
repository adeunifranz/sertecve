<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Servicio */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="servicio-form">

    <?php $form = ActiveForm::begin(); ?>

     <?= $form->field($model, 'desser',[
        'inputOptions' => [
                'class' => 'form-control transparent',
                'placeholder' => 'ESCRIBA LA DESCRIPCION DEL SERVICIO',
                'style'=>'text-transform: uppercase',
                'onblur'=>'javascript:this.value=this.value.toUpperCase().trim();'
                    ]])->textarea(['rows' => 2]) ?>
    <?= $form->field($model, 'preser',[
        'inputOptions' => [
                'class' => 'form-control transparent',
                'type'=>'number',
                'min' => '1',
                'placeholder' => 'ESCRIBA EL PRECIO DEL SERVICIO',
                'style'=>'text-transform: uppercase',
                'onblur'=>'javascript:this.value=this.value.replace(/[^\d]/g,"").trim();',
                'onkeydown'=>'javascript:this.value=this.value.replace(/[^\d]/g,"").trim();']])->textInput() ?>
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Registrar') : Yii::t('app', 'Modificar'), ['class' => $model->isNewRecord ? 'btn btn-success btn-lg col-lg-5' : 'btn btn-primary btn-lg col-lg-6']) ?>
        <?= Html::a('Cancelar', ['/servicio'], ['class' => 'btn btn-default btn-lg col-lg-5',])  ?>           
    </div>

    <?php ActiveForm::end(); ?>

</div>
