<?php use yii\helpers\Url; ?>

<div class="info">
    <div class="author-logo">
        <img src="<?= Yii::getAlias('@web/img/shrek.jpg') ?>" alt="img">
    </div>
    <div class="desctiption">
        <span>Олесик Иван</span>
        <div class="sharedLine"></div>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <div class="back">
            <a href="<?= Url::to(['index']) ?>">Назад!</a>
        </div>
    </div>
</div>

<?php $this->registerCssFile('@web/css/author.css'); ?>
