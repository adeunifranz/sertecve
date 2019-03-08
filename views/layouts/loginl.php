<?php 
use yii\helpers\Html;
use app\assets\LoginAsset;

LoginAsset::register($this);
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
<video id="my-video" class="video" autoplay muted loop>
   <source src="videos/TMA.mp4" type="video/mp4">
</video>
              <div class="box">
              <div class="force-overflow">
                <?= $content ?>
              </div>
              </div>
<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; <?= date('Y') ?> Todos los derechos reservados</p>

    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
