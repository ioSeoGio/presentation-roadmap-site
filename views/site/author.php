<?php use yii\helpers\Url; ?>

<div class="info">
    <div class="author-logo">
        <img src="<?= Yii::getAlias('@web/img/shrek.jpg') ?>" alt="img">
    </div>
    <div class="desctiption">
        <span>Имя Фамилия</span>
        <div class="sharedLine"></div>
        <p>Тут будет описание автора проекта. Советуем написать побольше.<br> Разработчик back-end - <b>Ярослав Морсиков</b>. <br> Разработчик front-end - <b>Олесик Иван</b>. <br> <br>Aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <a href="<?= Url::to(['index']) ?>" class="go-back">вернуться!</a>
    </div>
</div>

<?php $this->registerCssFile('@web/css/author.css'); ?>
