<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use yii\helpers\Url;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="<?= Yii::getAlias('@web/img/logo.png') ?>" type="image/png">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
    <header>
        <a href="<?= Url::to(['site/index']) ?>" class="logo">
            <img src="<?= Yii::getAlias('@web/img/logo.png') ?>" alt="logo">
        </a>
        <a href="http://www.brsu.by/" class="main-link" target="_blank">brsu.by</a>
    </header>

    <?= $content ?>

    <footer>
        <p>Конкурс "Студент года"</p>
        <span>Все права защищены © 2020</span>
    </footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
