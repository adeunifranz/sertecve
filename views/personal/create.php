<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Personal */

$this->title = Yii::t('app', 'Registrar Personal');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Personal'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="personal-create">

    <h2 align="center"><?= Html::encode($this->title) ?></h2>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
