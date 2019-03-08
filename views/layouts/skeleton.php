<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\widgets\Breadcrumbs;
use app\assets\SkeletonAsset;

SkeletonAsset::register($this);
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

<div class="wrap">
	<nav>
		<div class="container">
			<div>
				<ul>
					<li class="active"><a href="/sertecve2/web/index.php?r=site/index">Home</a></li>
					<li><a href="/sertecve2/web/index.php?r=site/about">About</a></li>
					<li><a href="/sertecve2/web/index.php?r=site/contact">Contact</a></li>
					<li><a href="/sertecve2/web/index.php?r=site/login">Login</a></li>
				</ul>
			</div>
		</div>
	</nav>
<!-- 				<ul class="colorbars">
					<li class="l" style="background-color: rgb(221, 153, 170);"></li>
					<li class="l" style="background-color: rgb(170, 119, 136);"></li>
					<li class="l" style="background-color: rgb(68, 34, 51);"></li>
					<li class="l" style="background-color: rgb(119, 85, 102);"></li>
					<li class="l" style="background-color: rgb(238, 204, 221);"></li>
					<li class="l" style="background-color: rgb(136, 119, 153);"></li>
					<li class="l" style="background-color: rgb(51, 68, 85);"></li>
					<li class="l" style="background-color: rgb(102, 119, 136);"></li>
					<li class="l" style="background-color: rgb(153, 170, 187);"></li>
					<li class="l" style="background-color: rgb(204, 221, 238);"></li>
					<li class="l" style="background-color: rgb(119, 153, 136);"></li>
				 	<li class="l" style="background-color: rgb(238, 221, 204);"></li>
					<li class="l" style="background-color: rgb(170, 153, 136);"></li>
					<li class="l" style="background-color: rgb(170, 68, 17);"></li>
					<li class="l" style="background-color: rgb(68, 34, 17);"></li>
					<li class="l" style="background-color: rgb(221, 102, 51);"></li>
					<li class="l" style="background-color: rgb(119, 68, 51);"></li>
					<li class="l" style="background-color: rgb(136, 102, 102);"></li>
					<li class="l" style="background-color: rgb(221, 170, 170);"></li>
					<li class="l" style="background-color: rgb(221, 119, 119);"></li>
				</ul> -->

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        
        <?= $content ?>
    </div>
</div>
<footer class="footer">
    <div class="container">
    	<div class="row">
	        <div class="one-half column" align="left">&copy; My Company <?= date('Y') ?></div>
	        <div class="one-half column" align="right"><?= Yii::powered() ?></div>
        </div>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
