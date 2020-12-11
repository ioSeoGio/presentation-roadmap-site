<?php
use yii\helpers\Url; ?>
<div class="back">
    <a href="<?= Url::to(['roadmap']) ?>">Назад!</a>
</div>

<article>
            <div class="title-block">
                <p>Музей ВОВ</p>
            </div>


            <div class="slider">
                <div class="nav nav-left" data-side="1">
                    <p><</p>
                </div>
                <div class="slider-window">
                    <div class="window-block">
                        <img src="<?= Yii::getAlias('@web/img/museum/m1.png') ?>" alt="world" class="image image1" data-id="1">
                        <img src="<?= Yii::getAlias('@web/img/museum/m2.png') ?>" alt="world" class="image image2" data-id="2">
                        <img src="<?= Yii::getAlias('@web/img/museum/m3.png') ?>" alt="world" class="image image3" data-id="3">
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
                <input type="hidden" name="vote" value="<?= $score ?>" id="vote" data-destination="музей">
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
                    Музей гостеприимно распахивает свои двери для всех, кто интересуется историей Великой Отечественной и Второй мировой войн. Это крупнейшее национальное хранилище материальных и духовных памятников военной истории.
                    Рожденный среди руин и пепла в только что освобожденном Минске в октябре 1944 года, на протяжении всей своей истории музей выполняет высокую миссию по сохранению и увековечению памяти о Великой Победе над фашизмом.
                    Величественное здание музея возведено в знаковом месте белорусской столицы – рядом со стелой "Минск – город-герой" – и входит в музейно-парковый комплекс "Победа". Архитектура здания впечатляет масштабами и символизмом, в нем гармонично соединились монументальность и современные технологии. Нестандартные пространственно-архитектурные приемы и образные решения создают у посетителя ощущение величайшей трагедии и одновременно погружают в атмосферу мужества и подвига.
                    Площадь 10 экспозиционных залов составляет 4200 кв.м, где представлено свыше 8 тыс. экспозиционных материалов. Фонды музея состоят из 30 коллекций и насчитывают свыше 155 тыс. единиц хранения: фотографии, документы, письма и личные вещи участников Великой Отечественной войны.
                    Музей является самым посещаемым в Беларуси. Он был и всегда будет местом живой народной памяти

                </p>
                <h3>Полезные ссылки:</h3>
                <div class="links">
                    <a href="http://war.museum.by/" target="_blank">Афіцыйны сайт Учреждение ”Белорусский государственный музей истории Великой Отечественной войны”</a>
                    <a href="https://www.youtube.com/watch?v=BBmen5TQXns" target="_blank">Відэа на ютуб “Музей истории Великой Отечественной войны (промо)”</a>
                </div>
            </div>

        </article>

<?php $this->registerCssFile('@web/css/view.css'); ?>
<?php $this->registerJsFile('@web/js/view.js'); ?>
