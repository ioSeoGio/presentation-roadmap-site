<?php use yii\helpers\Url; ?>

<div class="info">
    <div class="author-logo">
        <img src="<?= Yii::getAlias('@web/img/author.png') ?>" alt="img">
    </div>
    <div class="desctiption">
        <span>Макаревич Владислав</span>
        <div class="sharedLine"></div>
        <p>
            Студент 2 курса специальность
            «История и обществоведческие дисциплины»
            исторического факультета.
            <br>
            <b>Рабочая группа проекта:</b> <br>
            <b>Юзвук И.И.</b>  – студент 4 курса, группа «А», исторический факультет<br>
            <b>Курадовец А.В.</b>  – студентка 4 курса, группа «Б», исторический факультет<br>
            <b>Игнатюк Т.А.</b> – студентка 3 курса, группа «А», исторический факультет<br>
        </p>
        <a href="<?= Url::to(['index']) ?>" class="go-back">вернуться!</a>
    </div>
</div>

<?php $this->registerCssFile('@web/css/author.css'); ?>
