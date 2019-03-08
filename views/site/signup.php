<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \mdm\admin\models\form\Signup */

$this->title = 'Registro';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-signup col-lg-offset-3">
    <h1 class="col-lg-offset-2"><?= Html::encode($this->title) ?></h1>

    <p>Por favor complete los siguientes campos para registrar:</p>
    <?= Html::errorSummary($model)?>
    <div class="row" style="vertical-align: middle;">
        <div class="col-lg-7" >
            <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>
            <?= $form->field($model, 'username')->label('Nombre de usuario') ?>
            <?= $form->field($model, 'email')->label('Correo electronico') ?>
            <?= $form->field($model, 'password')->label('Contraseña')->passwordInput() ?>
            <?= $form->field($model, 'retypePassword')->label('Confirmar contraseña')->passwordInput() ?>           
            <div class="form-group" align="center">
                <?= Html::submitButton('Registrar', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
            </div>
            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
