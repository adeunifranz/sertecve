<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \mdm\admin\models\form\Login */

$this->title = 'Ingreso al sistema';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-login">
    <h1><?= Html::encode($this->title) ?></h1>
    <p>Por favor complete los siguientes campos para iniciar sesión:</p>

    <div class="row">
        <div class="col-lg-12">
            <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>
            <?= $form->field($model, 'username')->label('Nombre de usuario') ?>
            <?= $form->field($model, 'password')->label('Contraseña')->passwordInput() ?>
            <div style="color:#88f;margin:1em 0; text-shadow: 1px 1px 0px black">
                Si usted es nuevo se puede <?= Html::a('registrar', ['signup']) ?>.
            </div>
            <div class="form-group" align="center">
                <?= Html::submitButton('Ingresar', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
            </div>
            <?= Html::a('ingresar como invitado', ['servicio']) ?>
            <?php ActiveForm::end(); ?>
        </div> 
    </div>
</div>
