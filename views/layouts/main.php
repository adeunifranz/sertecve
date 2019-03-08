<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use mdm\admin\components\Helper;
AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

    <?php
    NavBar::begin([
        'brandLabel' => '<span class="glyphicon glyphicon-wrench"></span> '.Yii::$app->name. '<span class="glyphicon glyphicon-home"></span>',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
            ['label' => '
                <span class="glyphicon glyphicon-briefcase" aria-hidden="true"></span>
                Trabajo',
                'url' => ['/trabajo'],
                'title' => 'Principal',
                 'visible'  => Helper::checkRoute('/site/index')
             ],
            // ['label' => '
            //     <span class="glyphicon glyphicon-usd" aria-hidden="true"></span>
            //      Ventas', 'url' => ['/site/index'],
            //      'visible'  => Helper::checkRoute('/site/index')
            //  ],
            ['label' => '
                <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                 Cliente', 
                    'items' => [
                        ['label' => '
                            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                             Registrar', 'url' => ['/cliente/create'], 'visible'  => Helper::checkRoute('/cliente/create')
                        ],
                        ['label' => '
                            <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                             Consultar', 'url' => ['/cliente/index'], 'visible'  => Helper::checkRoute('/cliente/index')
                        ]
                    ],
                 'visible'  => Helper::checkRoute('/cliente/index')
            ],
            ['label' => '
                <span class="glyphicon glyphicon-scale" aria-hidden="true"></span>
                 Vehiculo', 
                    'items' => [
                        ['label' => '
                            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                             Registrar', 'url' => ['/vehiculo/create'], 'visible'  => Helper::checkRoute('/vehiculo/create')
                        ],
                        ['label' => '
                            <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                             Consultar', 'url' => ['/vehiculo/index'], 'visible'  => Helper::checkRoute('/vehiculo/index')
                        ]
                    ],
                 'visible'  => Helper::checkRoute('/vehiculo/index')
            ],
            ['label' => '
                <span class="glyphicon glyphicon-folder-close" aria-hidden="true"></span>
                 Personal', 
                    'items' => [
                        ['label' => '
                            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                             Registrar', 'url' => ['/personal/create'], 'visible'  => Helper::checkRoute('/personal/create')
                        ],
                        ['label' => '
                            <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                             Consultar', 'url' => ['/personal/index'], 'visible'  => Helper::checkRoute('/personal/index')
                        ]
                    ],
                 'visible'  => Helper::checkRoute('/personal/index')
            ],
            ['label' => '
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                 Repuesto', 
                    'items' => [
                        ['label' => '
                            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                             Registrar', 'url' => ['/repuesto/create'], 'visible'  => Helper::checkRoute('/repuesto/create')
                        ],
                        ['label' => '
                            <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                             Consultar', 'url' => ['/repuesto/index'], 'visible'  => Helper::checkRoute('/repuesto/index')
                        ]
                    ],
                 'visible'  => Helper::checkRoute('/repuesto/index')
            ],
            ['label' => '
                <span class="glyphicon glyphicon-wrench" aria-hidden="true"></span>
                 Servicio', 
                    'items' => [
                        ['label' => '
                            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                             Registrar', 'url' => ['/servicio/create'], 'visible'  => Helper::checkRoute('/servicio/create')
                        ],
                        ['label' => '
                            <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                             Consultar', 'url' => ['/servicio/index'], 'visible'  => Helper::checkRoute('/servicio/index')
                        ]
                    ],
                 'visible'  => Helper::checkRoute('/servicio/index')
            ],
            ['label' => 'Acerca', 'url' => ['/site/about'], 'visible'  => Helper::checkRoute('/site/about')],
            ['label' => 'RBAC', 'url' => ['/rbac'], 'visible'  => Helper::checkRoute('/rbac/*')],
            ['label'=>'Usuario',
            'items'=>[
            ['label' => 'Registrar usuario', 'url' => ['/site/signup'], 'visible'  => Helper::checkRoute('/site/signup')],
            Yii::$app->user->isGuest ? (
                ['label' => 'Iniciar sesion', 'url' => ['/site/login']]
            ) : (
                '<li>'
                . Html::beginForm(['/site/logout'], 'post')
                . Html::submitButton(
                    '<span class="glyphicon glyphicon-lock" aria-hidden="true"></span>
                    Cerrar sesion <br>                    
                    ' . Yii::$app->user->identity->username,
                    ['class' => 'btn btn-link logout']
                )
                . Html::endForm()
                . '</li>'
            )
            ]
            ]
        ],
        'encodeLabels' => false,
    ]);
    NavBar::end();
    ?>
<div class="wrap">
    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
            <div class="pattern">
                <?= $content ?>            
            </div>
    </div>
</div>

<footer class="footer navbar-fixed-bottom">
    <div class="container">
        <p class="pull-left">&copy; <?= date('Y') ?> Todos los derechos reservados</p>

    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
