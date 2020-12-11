<?php
use yii\helpers\Url; ?>
<div class="back">
    <a href="<?= Url::to(['roadmap']) ?>">Назад!</a>
</div>

<article>
            <div class="title-block">
                <p>Хатынь</p>
            </div>


            <div class="slider">
                <div class="nav nav-left" data-side="1">
                    <p><</p>
                </div>
                <div class="slider-window">
                    <div class="window-block">
                        <img src="<?= Yii::getAlias('@web/img/khatyn/k1.png') ?>" alt="world" class="image image1" data-id="1">
                        <img src="<?= Yii::getAlias('@web/img/khatyn/k2.png') ?>" alt="world" class="image image2" data-id="2">
                        <img src="<?= Yii::getAlias('@web/img/khatyn/k3.png') ?>" alt="world" class="image image3" data-id="3">
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
                <input type="hidden" name="vote" value="<?= $score ?>" id="vote" data-destination="хатынь">
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
                    Наверное, нет в мире места, где-бы не слышали о Хатыни. 22 марта 1943 года на тихую мирную деревню напали фашистские каратели. 149 жителей деревни, 75 из которых – дети, самому маленькому из них было всего лишь семь месяцев, согнали в колхозный сарай, объявив их заложниками, и заживо сожгли. Затем сожгли всю деревню: 26 хат Хатыни. Теперь здесь мемориал, полный скорби и гнева, напоминание о трагедии 136 деревень Беларуси, превращенных в пепел вместе с их жителями, и еще о сотнях сожженных деревень, из которых 186 уже не возродились, так как возрождать было некому. Комплекс создавался несколько лет, официально был открыт 5 июля 1969 года, он повторяет планировку бывшей деревни: на месте каждого сожженного дома стоит памятник-сруб, внутри которого – обелиск, напоминающий печную трубу, и колокол, который никогда не умолкает. В центре – 6-метровая скульптура «Непокоренный человек», изображающая мужчину с мертвым мальчиком на руках. Образом послужил выживший и нашедший своего смертельно раненого сына деревенский кузнец Иосиф Каминский. Это была обычная белорусская деревня, в которой жили мирные люди, такие как мы. Они любили, надеялись и мечтали, и все изменилось в один миг, когда пришел враг и отнял у них жизнь. Мы должны знать об этом и чтить память о невинных жертвах и о тех, кто погиб в боях за Родину, чтобы ужасы войны никогда не повторились. «…Люди, внимайте!... Слезы теперь не нужны. Вы разожгите от вечного факела Гнев против новой войны…» Это строки из стихотворения Натальи Кончаловской.
                </p>
                <h3>Полезные ссылки:</h3>
                <div class="links">
                    <a href="https://www.sb.by/articles/rana-pamyati.html" target="_blank">Болей інфармацыі: “Хатынь: как это было. Рана памяти”</a>
                    <a href="http://khatyn.museum.by/" target="_blank">Афіцыйны сайт: Государственное учреждение Государственный мемориальный комплекс „Хатынь“</a>
                    <a href="https://www.youtube.com/watch?v=MIsr0CNMUpg&t=26s " target="_blank">Відэа на ютуб “Хатынь. Архивные съемки времен СССР” (4.30 хвіліны)</a>
                </div>
            </div>
        </article>

<?php $this->registerCssFile('@web/css/view.css'); ?>
<?php $this->registerJsFile('@web/js/view.js'); ?>
