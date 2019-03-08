<?php
use yii\widgets\Breadcrumbs;

?>
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <div class="page-wrapper">
    <div class="page-breadcrumb">
<!--         <?=
        Breadcrumbs::widget(
            [
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]
        ) ?> -->
            <div class="row">
                <!-- <div class="col-12 d-flex no-block"> -->
                    <div class="col-12">
                    <div class="ml-auto">
                    <?php echo $content ?>
                    </div>
                </div>
            </div>
    </div>
    </div>
<footer class="footer text-center">
        <p class="pull-left">&copy; AWAG <strong><?= date('Y') ?></strong></p><br/><br/>
</footer>
