<?php use yii\helpers\Url; ?>

<article>
    <div class="block">
        <div class="info">
            <h1>Начать увлекательную экскурсию!</h1>
            <span>Перед вами появиться карта, которая позволит двигаться по указанным пунктам и узнавать новое!</span>
            <a href="<?= Url::to(['roadmap']) ?>">Вперед!</a>
        </div>
        <img src="<?= Yii::getAlias('@web/img/world.png') ?>" class="info-image">
    </div>
    <div class="block block-reverse color-2">
        <div class="info">
            <h1>Посмотреть статистику!</h1>
            <span>Тут вы можете посмотреть результаты опроса пользователей системы!</span>
            <a href="<?= Url::to(['statistic']) ?>">Вперед!</a>
        </div>
        <img src="<?= Yii::getAlias('@web/img/statistic.png') ?>" class="info-image">
    </div>
    <div class="block color-3">
        <div class="info">
            <h1>Информация об авторе!</h1>
            <span>Немного о себе и успехах своего универсистета!</span>
            <a href="<?= Url::to(['author']) ?>">Вперед!</a>
        </div>
        <img src="<?= Yii::getAlias('@web/img/books.png') ?>" class="info-image">
    </div>
</article>

<?php $this->registerCssFile('@web/css/index.css'); ?>
