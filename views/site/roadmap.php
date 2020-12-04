<?php use yii\helpers\Url; ?>

<div class="map">Наш Маршрут!</div>

<div class="back">
    <a href="<?= Url::to(['index']) ?>">Назад!</a>
</div>

<article>
    <div class="road">
        <div class="road-item special-road-item-1 special-road-color-1">
            <div class="road-item-action">
                <div class="point">
                    <img src="<?= Yii::getAlias('@web/img/point.png') ?>" alt="point">
                </div>
                <img src="<?= Yii::getAlias('@web/img/university.png') ?>" alt="">
                <p>
                    Старый корпус БрГУ
                </p>
                <a href="<?= Url::to(['view', 'destination' => 'university']) ?>">Перейти!</a>
            </div>
        </div>
        <div class="road-item special-road-item-2 special-road-color-2">
            <div class="road-item-action">
                <div class="point">
                    <img src="<?= Yii::getAlias('@web/img/point.png') ?>" alt="point">
                </div>
                <img src="<?= Yii::getAlias('@web/img/fort.png') ?>" alt="">
                <p>
                    5 Форт
                </p>
                <a href="<?= Url::to(['view', 'destination' => 'fort']) ?>">Перейти!</a>
            </div>
        </div>
    </div>

    <div class="road road-special">
        <div class="road-item special-road-item-1 special-road-color-1">
            <div class="road-item-action">
                <div class="point">
                    <img src="<?= Yii::getAlias('@web/img/point.png') ?>" alt="point">
                </div>
                <img src="<?= Yii::getAlias('@web/img/fortres.png') ?>" alt="">
                <p>
                    Брестская крепость
                </p>
                <a href="<?= Url::to(['view', 'destination' => 'fortress']) ?>">Перейти!</a>
            </div>
        </div>
        <div class="road-item special-road-item-2 special-road-color-2">
            <div class="road-item-action">
                <div class="point">
                    <img src="<?= Yii::getAlias('@web/img/point.png') ?>" alt="point">
                </div>
                <img src="<?= Yii::getAlias('@web/img/museum.png') ?>" alt="">
                <p>
                    Минск (музей ВОВ)
                </p>
                <a href="<?= Url::to(['view', 'destination' => 'museum']) ?>">Перейти!</a>
            </div>
        </div>
    </div>

    <div class="road road-none">
        <div class="road-item special-road-item-1 special-road-color-1">
            <div class="road-item-action">
                <div class="point">
                    <img src="<?= Yii::getAlias('@web/img/point.png') ?>" alt="point">
                </div>
                <img src="<?= Yii::getAlias('@web/img/monument.png') ?>" alt="">
                <p>
                    Хатынь
                </p>
                <a href="<?= Url::to(['view', 'destination' => 'khatyn']) ?>">Перейти!</a>
            </div>
        </div>
    </div>
</article>

<?php $this->registerCssFile('@web/css/roadmap.css'); ?>
