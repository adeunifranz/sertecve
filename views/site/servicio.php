<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\personal */
/* @var $form ActiveForm */
/*$CSS=<<< CSS
.tm-main-top {
    margin-bottom: 30px;
}
@media (min-width: 1220px)
.uk-grid {
    margin-left: -40px;
}
.uk-grid {
    margin-left: -30px;
}
.uk-grid {
    display: -ms-flexbox;
    display: -webkit-flex;
    display: flex;
    -ms-flex-wrap: wrap;
    -webkit-flex-wrap: wrap;
    flex-wrap: wrap;
    margin: 0;
    padding: 0;
    list-style: none;
}
article, aside, details, figcaption, figure, footer, header, main, nav, section, summary {
    display: block;
}
article, aside, details, figcaption, figure, footer, header, hgroup, nav, section {
    display: block;
}
.grid-content article, aside, details, figcaption, figure, footer, header, hgroup, menu, nav, section {
    display: block;
}
user agent stylesheet
article, aside, footer, header, hgroup, main, nav, section {
    display: block;
}
.uk-grid {
    display: -ms-flexbox;
    display: -webkit-flex;
    display: flex;
    -ms-flex-wrap: wrap;
    -webkit-flex-wrap: wrap;
    flex-wrap: wrap;
    margin: 0;
    padding: 0;
    list-style: none;
}
.tm-block {
    color: #000000;
}
.uk-grid:before, .uk-grid:after {
    content: "";
    display: block;
    overflow: hidden;
}
.uk-grid:after {
    clear: both;
}
.uk-grid:before, .uk-grid:after {
    content: "";
    display: block;
    overflow: hidden;
}

.blured {
    display: none !important;
    opacity: 0;
}
.pattern {
    display: none !important;
    opacity: 0;
}
.scrollbar {
    margin-left: 0;
    float: left;
    width: 100%;
    background: rgba(255,255,255,.3);
    overflow-y: scroll;
    margin-bottom: 25px;
    position: relative;
    border-radius: 15px;
    z-index: 5;
}
.wrap > .container {
    padding: 70px 15px 20px;
    background-color: transparent;
}
CSS;
$this->registerCSS($CSS);*/
?>

<style type="text/css">
.detalle{
border:0;background-color: transparent;
}
.texto {
    text-align: justify;
    background-color: rgba(255,255,255,.1);
}
.foto {
    height: 250px;
    width: 100%;
}

.foto:hover {
    -moz-transform: translate(-2px, -2px);
    -ms-transform: translate(-2px, -2px);
    -o-transform: translate(-2px, -2px);
    -webkit-transform: translate(-2px, -2px);
    transform: translate(-2px, -2px);
    box-shadow: 2px 2px 10px #33d;
}
</style>
<div class="site-servicio">

<!-- <section id="tm-main-top" class="tm-main-top uk-grid" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin="">
<div class="uk-width-1-1 uk-width-medium-2-3 uk-row-first"><div class="uk-panel" style="min-height: 372px;">
    <p><img src="images/bienvenido_a_la_comunidad.jpg" alt="bienvenido a la comunidad" style="display: block; margin-left: auto; margin-right: auto;"></p></div></div>

<div class="uk-width-1-1 uk-width-medium-1-3"><div class="uk-panel" style="min-height: 372px;">
    <p><img src="images/revision_general.jpg" alt="revision general" style="display: block; margin-left: auto; margin-right: auto;"></p></div></div>
</section> -->

    <div class="body-content">

        <div class="row">
            <h1 align="center">Le ofrecemos</h1>
            <div class="col-lg-6">
                <h4 class="col-lg-12">Revision General</h4>
                <button class="col-lg-12 detalle" style="" data-toggle="collapse" data-target="#texto1">
                    <img class="foto col-lg-12" src="images/revision_general.jpg">
                </button>
                <div id="texto1" class="texto">
                    <strong>Inspección visual</strong>
                        <li>Sistema de luces</li>
                        <li>Sistema de alimentación de aire y combustible</li>
                        <li>Parabrisas y vidrios</li>
                        <li>Carrocería, puertas y asientos</li>
                        <li>Espejos de retrovisor, bocina</li>
                        <li>Limpiaparabrisas</li>
                        <li>Cinturones de seguridad</li>
                        <li>Llantas y neumáticos</li>
                        <li>Velocímetro e instrumentos</li>
                <strong>Inspección mecánica</strong>
                        <li>Sistema de dirección</li>
                        <li>Sistema de frenos</li>
                        <li>Estructura del chasis,</li>
                        <li>Sistema de suspensión</li>
                        <li>Sistema de escape</li>
                        <li>Emisión de contaminantes.</li>
                </div>
            </div>
            <div class="col-lg-6">
                <h4 class="col-lg-12">Cambio de Aceite</h4>
                <button class="col-lg-12 detalle" style="" data-toggle="collapse" data-target="#texto2">
                    <img class="foto col-lg-12" src="images/cambiaraceite-1462899049.jpg">
                </button>
                <div id="texto2" class="collapse texto">
                    <strong>Inspección visual</strong>
                        <li>Sistema de luces</li>
                        <li>Sistema de alimentación de aire y combustible</li>
                        <li>Parabrisas y vidrios</li>
                        <li>Carrocería, puertas y asientos</li>
                        <li>Espejos de retrovisor, bocina</li>
                        <li>Limpiaparabrisas</li>
                        <li>Cinturones de seguridad</li>
                        <li>Llantas y neumáticos</li>
                        <li>Velocímetro e instrumentos</li>
                <strong>Inspección mecánica</strong>
                        <li>Sistema de dirección</li>
                        <li>Sistema de frenos</li>
                        <li>Estructura del chasis,</li>
                        <li>Sistema de suspensión</li>
                        <li>Sistema de escape</li>
                        <li>Emisión de contaminantes.</li>
                </div>
            </div>
            <div class="col-lg-6">
                <h4 class="col-lg-12">Cambio de neumaticos</h4>
                <button class="col-lg-12 detalle" style="" data-toggle="collapse" data-target="#texto3">
                    <img class="foto col-lg-12" src="images/cambiodeneumaticos-1462897742.jpg">
                </button>
                <div id="texto3" class="collapse texto">
                    <strong>Inspección visual</strong>
                        <li>Sistema de luces</li>
                        <li>Sistema de alimentación de aire y combustible</li>
                        <li>Parabrisas y vidrios</li>
                        <li>Carrocería, puertas y asientos</li>
                        <li>Espejos de retrovisor, bocina</li>
                        <li>Limpiaparabrisas</li>
                        <li>Cinturones de seguridad</li>
                        <li>Llantas y neumáticos</li>
                        <li>Velocímetro e instrumentos</li>
                <strong>Inspección mecánica</strong>
                        <li>Sistema de dirección</li>
                        <li>Sistema de frenos</li>
                        <li>Estructura del chasis,</li>
                        <li>Sistema de suspensión</li>
                        <li>Sistema de escape</li>
                        <li>Emisión de contaminantes.</li>
                </div>
            </div>            
            <div class="col-lg-6">
                <h4 class="col-lg-12">Lavado de automovil</h4>
                <button class="col-lg-12 detalle" style="" data-toggle="collapse" data-target="#texto4">
                    <img class="foto col-lg-12" src="images/lavadodeautomovil-1461602608.jpg">
                </button>
                <div id="texto4" class="collapse texto">
                    <strong>Inspección visual</strong>
                        <li>Sistema de luces</li>
                        <li>Sistema de alimentación de aire y combustible</li>
                        <li>Parabrisas y vidrios</li>
                        <li>Carrocería, puertas y asientos</li>
                        <li>Espejos de retrovisor, bocina</li>
                        <li>Limpiaparabrisas</li>
                        <li>Cinturones de seguridad</li>
                        <li>Llantas y neumáticos</li>
                        <li>Velocímetro e instrumentos</li>
                <strong>Inspección mecánica</strong>
                        <li>Sistema de dirección</li>
                        <li>Sistema de frenos</li>
                        <li>Estructura del chasis,</li>
                        <li>Sistema de suspensión</li>
                        <li>Sistema de escape</li>
                        <li>Emisión de contaminantes.</li>
                </div>
            </div>                        
        </div>

    </div>
</div><!-- site-servicio -->
