<?php

//use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;
use kartik\helpers\Html;
use rmrevin\yii\fontawesome\FAS;
use yii\widgets\Pjax;
use yii\bootstrap\Modal;
use wbraganca\dynamicform\DynamicFormWidget;

/* @var $this yii\web\View */
/* @var $model app\models\Trabajo */
/* @var $form yii\widgets\ActiveForm */
rmrevin\yii\fontawesome\AssetBundle::register($this);
$CSS=<<<CSS
.modal.in .modal-dialog { 
    margin: 0;
    width: 100%;
    height: 100%;
}
.modal-content {
    height: 100%;
    background-color: rgba(125,150,250,0.5);
}
.panel {
    background-color: transparent;
}
.panel-default > .panel-heading {
    color:#fff;
    background-color: rgba(125,150,250,0.7);
    text-shadow: 1px 1px 2px rgba(0,0,0,0.3) !important;    
}
table, td, th {
    color: #fff;
}
td.precio {
text-align: right;padding-right: 2% !important;"   
}
.fade, .modal, .in {
    padding: 0 !important;
    margin: 0 !important;
}
.modal-body {
    max-height: calc(100vh - 210px);
    overflow-y: auto;
}
#btn-volver{
    padding: 20px 12px;
    color: #337ab7;
    background-color: #eee;
    border-color: #ddd;
    border-radius: 3px 3px 15px 3px;    
}
.minus, .cantidad, .rep-usa{
    display: none;
}
*::-webkit-scrollbar {
    width: 7px !important;
    height: 6px !important;
    width: 7px !important;
    height: 6px !important;
    background-color: rgba(125,150,250,0.5);
}
*::-webkit-scrollbar-thumb {
    border-left: 1px solid #007;
    border-radius: 20px;
    background-color: rgba(25,50,150,1);
}
CSS;
$this->registerCSS($CSS);
$this->registerCssFile("css/chosen.min.css");
$this->registerJsFile('@web/js/vue.js');
//$this->registerJsFile('@web/js/myapp.js');
?>
 
<?php if ($model->isNewRecord) { ?>

<?php 
Modal::begin([
    'header' => '<h2>Registrar nuevo vehiculo</h2>',
    //'toggleButton' => ['label' => 'click me'],
    'options' => [
        'id'=>'modal1'
    ]
]);
?>

<?php $form = ActiveForm::begin(['id'=>'veh']); ?>
<div class="vehiculo-form">
    <?= $form->field($model2, 'plaveh',[
        'inputOptions' => [
                'class' => 'form-control transparent',
                'placeholder' => 'ESCRIBA LA PLACA',
                'style'=>'text-transform: uppercase',
                'onblur'=>'javascript:this.value=this.value.toUpperCase().trim();']])->textInput(['maxlength' => true]) ?>
    <div class="col-sm-6">
    <?= $form->field($model2, 'marveh',[
        'inputOptions' => [
                'class' => 'form-control transparent',
                'placeholder' => 'ESCRIBA LA MARCA',
                'style'=>'text-transform: uppercase',
                'onblur'=>'javascript:this.value=this.value.toUpperCase().trim();']])->textInput(['maxlength' => true]) ?>

    </div>
    <div class="col-sm-6">
    <?= $form->field($model2, 'tipveh',[
        'inputOptions' => [
                'class' => 'form-control transparent',
                'placeholder' => 'ESCRIBA EL TIPO',
                'style'=>'text-transform: uppercase',
                'onblur'=>'javascript:this.value=this.value.toUpperCase().trim();']])->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col-sm-6">
    <?= $form->field($model2, 'modveh',[
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
    <?= $form->field($model2, 'chaveh',[
        'inputOptions' => [
                'class' => 'form-control transparent',
                'placeholder' => 'ESCRIBA EL CHASIS',
                'style'=>'text-transform: uppercase',
                'onblur'=>'javascript:this.value=this.value.toUpperCase().trim();']])->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col-sm-6">
    <?= $form->field($model2, 'colveh',[
        'inputOptions' => [
                'class' => 'form-control transparent',
                'placeholder' => 'ESCRIBA EL COLOR',
                'style'=>'text-transform: uppercase',
                'onblur'=>'javascript:this.value=this.value.toUpperCase().trim();']])->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col-sm-6">
    <?= $form->field($model2, 'pueveh',[
        'inputOptions' => [
                'class' => 'form-control transparent',
                'type'=>'number',
                'min' => '2',
                'placeholder' => 'ESCRIBA EL NUMERO DE PUERTAS',
                'style'=>'text-transform: uppercase',
                'onblur'=>'javascript:this.value=this.value.replace(/[^\d]/g,"").trim();',
                'onkeydown'=>'javascript:this.value=this.value.replace(/[^\d]/g,"").trim();']])->textInput() ?>
    </div>
    <?= $form->field($model2, 'traveh',[
        'inputOptions' => [
                'class' => 'form-control transparent',
                'placeholder' => 'ESCRIBA LA TRANSMISION',
                'style'=>'text-transform: uppercase',
                'onblur'=>'javascript:this.value=this.value.toUpperCase().trim();']])->textInput(['maxlength' => true]) ?>

<?php 
echo 

        $form->field($model2, 'proveh')->widget(Select2::classname(), [
                'data' => $model2->propietarios,
                'theme' => Select2::THEME_BOOTSTRAP,
                'language'      => 'es',
                'options'       => ['placeholder'=>'--Seleccione--'],
                'pluginOptions' => ['allowClear'=>false],
                'addon' => [
                    'prepend' => [
                        'content' => FAS::icon('user')
                    ],
                    ]
            ]);
    ?>
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Registrar') : Yii::t('app', 'Modificar'), ['id'=>'submitveh','class' => $model->isNewRecord ? 'btn btn-success btn-lg col-lg-5' : 'btn btn-primary btn-lg col-lg-6']) ?>
        <?= Html::button('Cancelar', ['class' => 'btn btn-default btn-lg col-lg-5','data-dismiss'=>'modal'])  ?>           
    </div>
</div>
<?php ActiveForm::end(); ?>

<?php 
Modal::end();
 ?>

<?php } ?>
<div class="trabajo-form">

    <?php $form = ActiveForm::begin(); ?>
    <?php if ($model->isNewRecord) { ?>
    <?php Pjax::begin(); ?>
    <?php   
        /*echo $form->field($model, 'PERS_PRE')->dropDownList($personas,['prompt'=>'--Seleccione--']);*/
        echo 
        $form->field($model, 'vehtra')->widget(Select2::classname(), [
                'data' => $model->vehiculos,
                'theme' => Select2::THEME_BOOTSTRAP,
                'language'      => 'es',
                'options'       => ['placeholder'=>'--Seleccione--'],
                'pluginOptions' => ['allowClear'=>true],
                'addon' => [
                    'prepend' => [
                        'content' => FAS::icon('car')
                    ],
                    'append' => [
                                'content' => Html::button('<i class="fa fa-car"></i><span class="label">+</span>', [
                                    'class'       => 'btn btn-xs btn-primary', 
                                    'title'       => 'Nuevo Vehiculo', 
                                    'data-toggle' => 'modal', 
                                    'data-target' => '#modal1', 
                                    'id'          => 'modalbutton'
                                ]),
                                'asButton' => true
                            ]                     
                    ]
            ]);
    ?>
        <?php Pjax::end(); ?>
    <?php } else { ?>
    <?= $form->field($model, 'vehtra')->dropdownList($model->vehiculos,['disabled'=>'disabled']); ?>
    <?php } ?>
    <?php 
    $model->fintra = date("Y-m-d");
    if ($model->isNewRecord) {
      $model->initra = date("Y-m-d");
      $model->esttra = 0;
      $model->restra = '-';
    }
    else {
      $model->esttra = 1;        
      $model->fintra = Yii::$app->formatter->asDate($model->fintra, 'php:Y-m-d');
    }
     ?>
    <?= $form->field($model, 'esttra')->dropdownList(['PENDIENTE','FINALIZADO']); ?>     
    <div class="row">
        <div class="col-sm-6">
    <?= $form->field($model, 'initra')->textInput(['type'=>'date']) ?>
        </div>
        <div class="col-sm-6">        
    <?= $form->field($model, 'fintra')->textInput(['type'=>'date']) ?>
        </div>    
    </div>
     <?= $form->field($model, 'restra',[
        'inputOptions' => [
                'class' => 'form-control transparent',
                'placeholder' => 'ESCRIBA EL DIAGNOSTICO FINAL O RESULTADO',
                'style'=>'text-transform: uppercase',
                'onblur'=>'javascript:this.value=this.value.toUpperCase().trim();'
                    ]])->textarea(['rows' => 2]) ?>

    <?php 
        echo 
            $form->field($model, 'seru')->widget(Select2::classname(), [
                'name'          => 'servicios utilizados',
                'data'          => $model->sd,
                'language'      => 'es',
                'options'       => ['placeholder'=>'--Seleccione--', 'id'=>'seru'],
                'pluginOptions' => ['allowClear'=>true,'multiple' => true, 'maintainOrder'=> false,'tags'=>true],
                'addon'         => ['prepend' => ['content' => Html::icon('shopping-cart')]]
        ]);
    ?>
<div id="app">
<?php 
Modal::begin([
    'header' => '<h2>Agregar repuesto</h2>',
    //'toggleButton' => ['label' => 'click me'],
    'options' => [
        'id'=>'modal2'
    ]
]);
?>
        <h1>Repuestos disponibles en almacen</h1>
        <div class="row">
            <div class="col-sm-12">
                <div class="row">
                    <div class="col-sm-6">
                        <label class="control-label" for="maxRows">Filtrar lista por nombre:</label>
                        <input class="form-control" type="text" id="myInput" placeholder="Buscar un repuesto.." title="Type in a name">
                    </div>
                    <div class="col-sm-2">
                        <label class="control-label" for="maxRows">Mostrar</label>
                        <select class ="form-control" name="state" id="maxRows">
                             <option value="5">5</option>
                             <option value="10" selected>10</option>
                             <option value="15">15</option>
                             <option value="5000">Todos</option>
                        </select>
                    </div>
                    <div class="col-sm-1">
                    <?=
                        Html::button(
                            '<i class="fa fa-reply"></i> Volver',
                            [
                                'id' => 'btn-volver',
                                'class' => 'btn btn-md btn-default col-sm-12',
                                'data-dismiss'=>'modal'
                            ]);
                      ?>                    
                    </div>
                </div>
            </div>
        </div>
    <table class="table table-sm table-striped table-borderless" id="tb-rep-dis">
            <thead>
            <th class="col-sm-1">#</th>                
            <th class="col-sm-6">REPUESTO</th>
            <th class="col-sm-2">DISPONIBLE</th>
            <th class="col-sm-1">PRECIO UNITARIO</th>
            <th class="col-sm-1">PEDIDO</th>
            <th class="col-sm-1"></th>
            </thead>
            <tbody>                
            <?php 
                // $c=1;$t=0;
                // foreach ($model->repdisp as $repuesto) {
                // echo '<pre>';
                // var_dump($repuesto);
                // echo '</pre>';
                // // echo "--PHP--";
                // // echo "<script>console.log(" . json_encode($repuesto) . ");</script>";
             ?>                
             <tr id=<?= 'tr'.$repuesto["id"] ?>>
             <td><?= $c ?></td>                
             <td><?= $repuesto["nombre"] ?></td>
             <td><?= $repuesto["cantidad"] ?></td>
             <td><?= $repuesto["precio"] ?> Bs.</td>
             <td>
                    <input class="col-lg-6" type="number" v-model="cantidad" style="background: transparent;border: 0;padding: 0 0 0 0">
            </td>
            <td>
                <?=
                    Html::button(
                        '<i class="fa fa-shopping-cart"></i>',
                        [
                            'class' => 'btn btn-xs btn-info cart',
                            //'id'=>$repuesto["id"],
                            'title'=>'agregar pedido',
                            '@click'=>'agregarPedido(index)'
                        ]);
                  ?>                
                <?=
                    Html::button(
                        '<i class="fa fa-trash"></i>',
                        [
                            'class' => 'btn btn-xs btn-danger cart',
                            'id'=>$repuesto["id"],
                            'title'=>'quitar pedido',
                            '@click'=>'quitarPedido(index)'
                        ]);
                  ?>                
            </td>
             </tr>
        </tbody>
        <tfoot>
        </tfoot>
    </table>
<!--        Start Pagination -->
            <div class='pagination-container' >
                <nav>
                  <ul class="pagination">
                   <!-- Here the JS Function Will Add the Rows -->
                  </ul>
                </nav>
            </div>
<?php 
Modal::end();
 ?>

    <table class="table table-sm table-striped table-borderless" id="tb-rep-usa">
            <thead>
            <th class="col-sm-1">#</th>
            <th class="col-sm-2">FECHA</th>
            <th class="col-sm-6">REPUESTO</th>
            <th class="col-sm-1">CANTIDAD</th>
            <th class="col-sm-1">PRECIO</th>
            <th class="col-sm-1">
                <?= 
                    Html::button('<i class="fa fa-cog"></i><span class="label"> Repuestos</span>', [
                                                        'class'       => 'btn btn-primary', 
                                                        'title'       => 'Nuevo Vehiculo', 
                                                        'data-toggle' => 'modal', 
                                                        'data-target' => '#modal2', 
                                                        'id'          => 'modalbutton'
                                                    ]);
                 ?>
            </th>
            </thead>
            <tbody>
<?php 

            for($i=1;$i<101;$i++)
            {
                echo 
                '<tr class="rep-usa">'.
                    '<td>'.$i.'</td>'.
                    '<td></td>'.
                    '<td></td>'.
                    '<td></td>'.
                    '<td></td>'.
                    '<td>'.
                    Html::button(
                        '<span class="glyphicon glyphicon-trash"></span>',
                        [
                            'class' => 'btn btn-xs btn-danger btrash',
                            'title' => 'Quitar pedido',
                        ])
                    .'</td>'.
                    //'<td style="display: none;opacity: 0;size: 0;">'.
                    //'<td>'.
                    '</td>'.
                '</tr>';
            }
             ?>           
        </tbody>
        <tfoot>
            <td  class="precio" colspan="4">TOTAL</td><td class="precio"><?= $t ?> Bs.</td><td></td>
        </tfoot>
            <?php //} ?>
    </table>

    <?= $form->field($model, 'repu',[
        'inputOptions' => [
                    'value'=>'algo'
                    ]])->textInput() ?>
    <?= $form->field($model, 'reca')->textInput() ?>
</div> <!-- fin de instancia app-vue -->
    <div class="form-group">
        <?= Html::submitButton('Registrar', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>
</div>
