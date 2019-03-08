<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PersonalSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Personal');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="personal-index">

    <h2 align="right"><?= Html::encode($this->title) ?></h2>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>

        <?= Html::a('<i class="fa fa-plus"></i> Registrar Personal', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            //'id_per',
            'nomper',
            'apeper',
            // 'telper',
            // 'emaper',
            // 'dirper:ntext',
            'carper',
            // 'fecper',
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
