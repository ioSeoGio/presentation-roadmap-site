<?php
use yii\helpers\Url; ?>
<div class="back">
    <a href="<?= Url::to(['roadmap']) ?>">Назад!</a>
</div>

<article>
            <div class="title-block">
                <p>Курган Славы!</p>
            </div>


            <div class="slider">
                <div class="nav nav-left" data-side="1">
                    <p><</p>
                </div>
                <div class="slider-window">
                    <div class="window-block">
                        <img src="<?= Yii::getAlias('@web/img/glory/g1.png') ?>" alt="world" class="image image1" data-id="1">
                        <img src="<?= Yii::getAlias('@web/img/glory/g2.png') ?>" alt="world" class="image image2" data-id="2">
                        <img src="<?= Yii::getAlias('@web/img/glory/g3.png') ?>" alt="world" class="image image3" data-id="3">
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
                <input type="hidden" name="vote" value="<?= $score ?>" id="vote" data-destination="курган">
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
                    В 27 километрах восточнее Минска над равнинной территорией возвышается величественный 35-метровый холм – Курган Славы. Он был возведен в 1969 году в память о грандиозной военной операции «Багратион», в результате которой Беларусь была полностью освобождена от немецко-фашистских захватчиков. В боях участвовали войска 1-го, 2-го и 3-го Белорусских фронтов, 1-го Прибалтийского фронта и партизанские подразделения. При насыпке холма сюда была доставлена земля из городов-героев Москвы, Ленинграда, Волгограда, Севастополя, Одессы, Киева, из Брестской крепости-героя, из городов и сел, прославившихся боевыми подвигами. Была замурована капсула с наказом потомкам. Четыре штыка высотой 35 метров на вершине кургана – символ братства воинов четырех фронтов. Штыки при сильном ветре слегка, еле заметно, покачиваются. Каменные ступени, их 241, ведут на смотровую площадку, с которой хорошо представляется панорама былых сражений, где была окружена и уничтожена 100-тысячная группировка фашистских войск. Торжественное открытие комплекса состоялось в 1969 году.
                </p>

                <h3>Полезные ссылки:</h3>
                <div class="links">
                    <a href="https://www.youtube.com/watch?v=s7pboWdcYxo" target="_blank">Відэа на ютуб “Мемориальный комплекс "Курган Славы" | Обелиски великого подвига” (2.31 хвіліны)</a>
                </div>
            </div>

        </article>

<?php $this->registerCssFile('@web/css/view.css'); ?>
<?php $this->registerJsFile('@web/js/view.js'); ?>
