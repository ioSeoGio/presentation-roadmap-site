<?php use yii\helpers\Url; ?>

<div class="info">
    <p class="vioce">По итогам голосования:</p>
    <div class="back">
        <a href="<?= Url::to(['index']) ?>">Назад!</a>
    </div>
    <div class="statistic">
        <div class="item">
            <span>Университет (<?= $first ?>%)</span>
            <div class="item-length item-length-2" data-length="<?= $first ?>"></div>
        </div>
        <div class="item">
            <span>Форт (<?= $second ?>%)</span>
            <div class="item-length item-length-2" data-length="<?= $second ?>"></div>
        </div>
        <div class="item">
            <span>Крепость (<?= $third ?>%)</span>
            <div class="item-length item-length-2" data-length="<?= $third ?>"></div>
        </div>
        <div class="item">
            <span>Музей (<?= $fourth ?>%)</span>
            <div class="item-length item-length-2" data-length="<?= $fourth ?>"></div>
        </div>
        <div class="item">
            <span>Хатынь (<?= $fifth ?>%)</span>
            <div class="item-length item-length-2" data-length="<?= $fifth ?>"></div>
        </div>
    </div>
</div>

<?php $this->registerCssFile('@web/css/statistic.css'); ?>
<?php $this->registerJsFile('@web/js/statistic.js'); ?>
