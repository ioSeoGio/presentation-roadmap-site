<?php
use yii\helpers\Url; ?>
<div class="back">
    <a href="<?= Url::to(['roadmap']) ?>">Назад!</a>
</div>

<article>
            <div class="title-block">
                <p>Университет А.С. Пушкина</p>
            </div>


            <div class="slider">
                <div class="nav nav-left" data-side="1">
                    <p><</p>
                </div>
                <div class="slider-window">
                    <div class="window-block">
                        <img src="<?= Yii::getAlias('@web/img/university/u1.png') ?>" alt="world" class="image image1" data-id="1">
                        <img src="<?= Yii::getAlias('@web/img/university/u2.png') ?>" alt="world" class="image image2" data-id="2">
                        <img src="<?= Yii::getAlias('@web/img/university/u3.png') ?>" alt="world" class="image image3" data-id="3">
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
                <input type="hidden" name="vote" value="<?= $score ?>" id="vote" data-destination="университет">
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
                <h3>Старый корпус БрГУ</h3>
                <p>
                    Здание, где в настоящее время размещается БрГУ им. А.С. Пушкина, так называемый старый корпус, было спроектировано и построено в 1904-1905 г.г., в честь рождения сына царя Николая II Цесаревича Алексея.
                    Как и предполагалось изначально, в нем разместилась мужская гимназия. В 1915 году, с приходом в Брест-Литовск Первой Мировой войны, она была закрыта.
                    В 1918 году здесь были организованы тайные гимназические курсы под руководством ксендза Фабиана Щербицкого, которые легализовали свою деятельность после вступления польских войск в Брест-над-Бугом. С осени 1919 года опеку над ними взяла Польска Матеж Школьна, и вскоре в здании бывшей государственной русской гимназии была организована гимназия на шесть классов. В середине сентября представитель просвещения Гражданского Управления Восточных Земель присвоил ей статус государственной, которая по предложению тогдашнего председателя Польской Матежи Школьной пана Снарского получила имя Ромуальда Траугутта.
                    Гимназия им. Ромуальда Траугутта существовала до сентября 1939 года. В период оккупации Бреста фашистскими войсками 15-22 сентября 1939 года здание временно использовалось под госпиталь. На протяжении оккупации 1941-1944 годов здание также использовалось в качестве немецкого военного госпиталя.
                    С 1 сентября 1944 по 1 марта 1945 в здании размещался госпиталь №1057 для военнослужащих Советской армии. Часть здания использовалась в качестве общежития торгово-кооперативных курсов. В июне 1945 в здании бывшей гимназии, в соответствии с Постановлением СНК БССР от 6 июня 1945 года, разместили Брестский учительский институт. 4 июня 1949 года институту присвоено имя А.С.Пушкина.
                </p>
                <h3>Полезные ссылки:</h3>
                <div class="links">
                    <a href="https://virtualbrest.ru/news38161.php" target="_blank">Болей інфармацыі: “Гимназия им. Наследника Цесаревича Алексея, ныне старый корпус БрГУ им. Пушкина”</a>
                    <a href="https://www.youtube.com/watch?v=F2f6W3IuLD0&feature=emb_err_woyt" target="_blank">Відэа на ютуб “БРЕСТСКАЯ МУЖСКАЯ ГИМНАЗИЯ” (3.37 хвіліны)</a>
                </div>
            </div>

        </article>

<?php $this->registerCssFile('@web/css/view.css'); ?>
<?php $this->registerJsFile('@web/js/view.js'); ?>
