<?php
use yii\helpers\Url; ?>
<div class="back">
    <a href="<?= Url::to(['roadmap']) ?>">Назад!</a>
</div>

<article>
            <div class="title-block">
                <p>5 Форт</p>
            </div>


            <div class="slider">
                <div class="nav nav-left" data-side="1">
                    <p><</p>
                </div>
                <div class="slider-window">
                    <div class="window-block">
                        <img src="<?= Yii::getAlias('@web/img/fort/f1.png') ?>" alt="world" class="image image1" data-id="1">
                        <img src="<?= Yii::getAlias('@web/img/fort/f2.png') ?>" alt="world" class="image image2" data-id="2">
                        <img src="<?= Yii::getAlias('@web/img/fort/f3.png') ?>" alt="world" class="image image3" data-id="3">
                    </div>
                    <div class="window-helpers">
                        <div class="helpers" data-helper="1"></div>
                        <div class="helpers helper-none" data-helper="2"></div>
                        <div class="helpers helper-none" data-helper="3"></div>
                    </div>
                </div>
                <div class="nav nav-right" data-side="0">
                    <p>></p>
                </div>
            </div>

            <div class="vote" data-active="0">
                <p>Хотелось бы Вам посетить данное место?</p>
                <input type="hidden" name="vote" value="<?= $score ?>" id="vote" data-destination="форт">
                <div class="stars">
                    <img src="<?= Yii::getAlias('@web/img/star.png') ?>" alt="star" class="star" data-id="1">
                    <img src="<?= Yii::getAlias('@web/img/star.png') ?>" alt="star" class="star" data-id="2">
                    <img src="<?= Yii::getAlias('@web/img/star.png') ?>" alt="star" class="star" data-id="3">
                    <img src="<?= Yii::getAlias('@web/img/star.png') ?>" alt="star" class="star" data-id="4">
                    <img src="<?= Yii::getAlias('@web/img/star.png') ?>" alt="star" class="star" data-id="5">
                </div>
            </div>

            <div class="shareLine"></div>

            <div class="text">
                <h3>История</h3>
                <p>
                    5 форт – уникальный памятник русской фортификации конца XIX–начала ХХ веков. Расположен в южной части г.Бреста, в 3 км от мемориального комплекса «Брестская крепость-герой».
                    5 форт построен в 1879–1880 годах как одно из передовых укреплений крепости. В ходе модернизации 1886–1889 гг. на форту построена сводчатая обсыпанная землёй казарма. Для обстрела водяного рва были построены два капонира и два полукапонира. Все вновь возведенные казематы были построены из кирпича. В 1906–1913 гг. под руководством военного инженера Ивана Осиповича Белинского (1876–1976), в процессе очередной модернизации, форт был существенно усилен, став одним из фортов второй (внутренней) фортовой линии Брест-Литовской крепости.
                    Накануне Первой мировой войны в форту размещалась 6-я рота Брест-Литовской крепостной артиллерии. В августе 1915 года форт, был оставлен русской армией. С 1915 по 1918 гг. в форту размещались кайзеровские войска. С 1921 по 1939 гг., здесь располагались интендантские склады IX корпуса польской армии.
                    С апреля 1941 г. в форту размещался 3-й батальон 44-го стрелкового полка 42-й стрелковой дивизии. 22 июня 1941 г. форт в ходе ожесточенного боя был захвачен частями вермахта.
                    В июле 1944 г. форт был освобожден воинами 1295-го стрелкового полка 160-й стрелковой дивизии 70-й армии I Белорусского фронта. В послевоенные годы размещались войсковые склады, с конца 1960-х годов не использовался.
                    Филиал «Музей 5 форт» можно посетить как индивидуально, так и в составе экскурсионных групп. Посетители могут осмотреть казарму, капониры и полукапониры, потерны и другие фортовые сооружения.
                    Мощь бетонных укреплений, подземные галереи и казематы не оставят равнодушными посетителей форта.
                </p>
                <h3>Полезные ссылки:</h3>
                <div class="links">
                    <a href="http://5fort.fortress.museum.by/" target="_blank">Афіцыйны сайт “Музей “5 форт”</a>
                    <a href="https://posmotrim.by/article/fort-nomer-5.html" target="_blank">Болей інфармацыі: “Пятый форт Брестской крепости история”</a>
                    <a href="https://www.youtube.com/watch?v=frWe1tZr13Y" target="_blank">Відэа на ютуб “Пятый форт Брестской крепости” (4,26 хвіліны)</a>
                </div>
            </div>

        </article>

<?php $this->registerCssFile('@web/css/view.css'); ?>
<?php $this->registerJsFile('@web/js/view.js'); ?>
