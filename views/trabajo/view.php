<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Trabajo */

$this->title = $model->id_tra;
$this->params['breadcrumbs'][] = ['label' => 'Trabajos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);

$this->registerJsFile('@web/js/vue.js', ['depends' => [\yii\web\JqueryAsset::className()]]);
$this->registerJsFile('@web/js/vue-resource.min.js', ['depends' => [\yii\web\JqueryAsset::className()]]);
$this->registerJsFile('@web/js/app.js', ['depends' => [\yii\web\JqueryAsset::className()]]);

?>

<div class="trabajo-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'id_tra',
            [
                'attribute'=>'esttra',
                'value' => function($data){
                 $valores=['PENDIENTE','FINALIZADO'];
                 return $valores[$data->esttra];
                }
            ],
            'initra',
            [
                'attribute'=>'vehtra',
                'value' => function($data){
                    return $data->vehiculos[$data->vehtra];
                }
            ],   
            // 'fintra',
            // 'restra:ntext',
        ],
    ]) ?>

<div id="app">
     <div v-if="sumarTotal>0">
        <h4>REPUESTOS UTILIZADOS</h4>
        <table class="table table-sm table-striped table-borderless">
         <tr>
            <th class="col-sm-1">#</th>
            <th class="col-sm-2">FECHA</th>
            <th class="col-sm-6">REPUESTO</th>
            <th class="col-sm-1">CANTIDAD</th>
            <th class="col-sm-1">TOTAL</th>
         </tr>
         <tr v-for="(p , index) of repuestos">
           <td>{{p.id}}</td>
           <td>{{p.fecha}}</td>
           <td>{{p.nombre}}</td>
           <td>{{p.cantidad}}</td>
           <td>{{p.precio}}</td>
         </tr>
        </table>
        <h4>SERVICIOS UTILIZADOS</h4>
        <table class="table table-sm table-striped table-borderless">
         <tr>
            <th class="col-sm-1">#</th>
            <th class="col-sm-2">FECHA</th>
            <th class="col-sm-6">REPUESTO</th>
            <th class="col-sm-1">TOTAL</th>
         </tr>
         <tr v-for="(p , index) of servicios">
           <td>{{p.id}}</td>
           <td>{{p.fecha}}</td>
           <td>{{p.nombre}}</td>
           <td>{{p.precio}}</td>
         </tr>
        </table>
        <h4>TOTAL : {{sumarTotal}} Bs.</h4>
     </div>

</div>

</div>
