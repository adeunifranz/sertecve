<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TrabajoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Trabajos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="trabajo-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Registrar Trabajo', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'initra',
            [
                'attribute'=>'esttra',
                'value' => function($data){
                 $valores=['PENDIENTE','FINALIZADO'];
                 return $valores[$data->esttra];
                }
            ],
            [
                'attribute'=>'vehtra',
                'value' => function($data){
                    return $data->vehiculos[$data->vehtra];
                }
            ],            
            //'fintra',
            //'restra:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
