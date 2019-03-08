<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class MatrixAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
         'css/matrix/assets/libs/flot/css/float-chart.css',
         'css/matrix/dist/css/style.min.css',
         'css/site.css',
    ];
    public $js = [
    // 'css/matrix/assets/libs/jquery/dist/jquery.min.js',
    //<!-- Bootstrap tether Core JavaScript -->
    'css/matrix/assets/libs/popper.js/dist/umd/popper.min.js',
    'css/matrix/assets/libs/bootstrap/dist/js/bootstrap.min.js',
    'css/matrix/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js',
    'css/matrix/assets/extra-libs/sparkline/sparkline.js',
    //<!--Wave Effects -->
    'css/matrix/dist/js/waves.js',
    //<!--Menu sidebar -->
    'css/matrix/dist/js/sidebarmenu.js',
    //<!--Custom JavaScript -->
    'css/matrix/dist/js/custom.min.js',
    //<!--This page JavaScript -->
    //<!-- 'css/matrix/dist/js/pages/dashboards/dashboard1.js', -->
    //<!-- Charts js Files -->
    'css/matrix/assets/libs/flot/excanvas.js',
    'css/matrix/assets/libs/flot/jquery.flot.js',
    'css/matrix/assets/libs/flot/jquery.flot.pie.js',
    'css/matrix/assets/libs/flot/jquery.flot.time.js',
    'css/matrix/assets/libs/flot/jquery.flot.stack.js',
    'css/matrix/assets/libs/flot/jquery.flot.crosshair.js',
    'css/matrix/assets/libs/flot.tooltip/js/jquery.flot.tooltip.min.js',
    'css/matrix/dist/js/pages/chart/chart-page-init.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
//        'yii\bootstrap\BootstrapAsset',
    ];
}
