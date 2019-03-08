<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Vehiculo */
/* @var $form yii\widgets\ActiveForm */
?>

<?php $form = ActiveForm::begin(); ?>
<div class="vehiculo-form">


    <?= $form->field($model, 'plaveh',[
        'inputOptions' => [
                'class' => 'form-control transparent',
                'placeholder' => 'ESCRIBA LA PLACA',
                'style'=>'text-transform: uppercase',
                'onblur'=>'javascript:this.value=this.value.toUpperCase().trim();']])->textInput(['maxlength' => true]) ?>
    <div class="col-sm-6">
    <?= $form->field($model, 'marveh',[
        'inputOptions' => [
                'class' => 'form-control transparent',
                'placeholder' => 'ESCRIBA LA MARCA',
                'style'=>'text-transform: uppercase',
                'onblur'=>'javascript:this.value=this.value.toUpperCase().trim();']])->textInput(['maxlength' => true]) ?>

    </div>
    <div class="col-sm-6">
    <?= $form->field($model, 'tipveh',[
        'inputOptions' => [
                'class' => 'form-control transparent',
                'placeholder' => 'ESCRIBA EL TIPO',
                'style'=>'text-transform: uppercase',
                'onblur'=>'javascript:this.value=this.value.toUpperCase().trim();']])->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col-sm-6">
    <?= $form->field($model, 'modveh',[
        'inputOptions' => [
                'class' => 'form-control transparent',
                'type'=>'number',
                'min' => '1900',
                'value' => '1900',
                'placeholder' => 'ESCRIBA EL MODELO',
                'style'=>'text-transform: uppercase',
                'onblur'=>'javascript:this.value=this.value.replace(/[^\d]/g,"").trim();',
                'onkeydown'=>'javascript:this.value=this.value.replace(/[^\d]/g,"").trim();']])->textInput() ?>
    </div>
    <div class="col-sm-6">
    <?= $form->field($model, 'chaveh',[
        'inputOptions' => [
                'class' => 'form-control transparent',
                'placeholder' => 'ESCRIBA EL CHASIS',
                'style'=>'text-transform: uppercase',
                'onblur'=>'javascript:this.value=this.value.toUpperCase().trim();']])->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col-sm-6">
    <?= $form->field($model, 'colveh',[
        'inputOptions' => [
                'class' => 'form-control transparent',
                'placeholder' => 'ESCRIBA EL COLOR',
                'style'=>'text-transform: uppercase',
                'onblur'=>'javascript:this.value=this.value.toUpperCase().trim();']])->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col-sm-6">
    <?= $form->field($model, 'pueveh',[
        'inputOptions' => [
                'class' => 'form-control transparent',
                'type'=>'number',
                'min' => '2',
                'placeholder' => 'ESCRIBA EL NUMERO DE PUERTAS',
                'style'=>'text-transform: uppercase',
                'onblur'=>'javascript:this.value=this.value.replace(/[^\d]/g,"").trim();',
                'onkeydown'=>'javascript:this.value=this.value.replace(/[^\d]/g,"").trim();']])->textInput() ?>
    </div>
    <?= $form->field($model, 'traveh',[
        'inputOptions' => [
                'class' => 'form-control transparent',
                'placeholder' => 'ESCRIBA LA TRANSMISION',
                'style'=>'text-transform: uppercase',
                'onblur'=>'javascript:this.value=this.value.toUpperCase().trim();']])->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'proveh')->textInput() ?>
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Registrar') : Yii::t('app', 'Modificar'), ['class' => $model->isNewRecord ? 'btn btn-success btn-lg col-lg-5' : 'btn btn-primary btn-lg col-lg-6']) ?>
        <?= Html::a('Cancelar', ['/personal'], ['class' => 'btn btn-default btn-lg col-lg-5',])  ?>           
    </div>
</div>
<?php ActiveForm::end(); ?>
