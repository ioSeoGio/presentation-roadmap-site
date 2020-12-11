<?php
use yii\helpers\Url; ?>
<div class="back">
    <a href="<?= Url::to(['roadmap']) ?>">Назад!</a>
</div>

<article>
            <div class="title-block">
                <p>Брестская крепость-герой!</p>
            </div>


            <div class="slider">
                <div class="nav nav-left" data-side="1">
                    <p><</p>
                </div>
                <div class="slider-window">
                    <div class="window-block">
                        <img src="<?= Yii::getAlias('@web/img/fortress/f1.png') ?>" alt="world" class="image image1" data-id="1">
                        <img src="<?= Yii::getAlias('@web/img/fortress/f2.png') ?>" alt="world" class="image image2" data-id="2">
                        <img src="<?= Yii::getAlias('@web/img/fortress/f3.png') ?>" alt="world" class="image image3" data-id="3">
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
                <input type="hidden" name="vote" value="<?= $score ?>" id="vote" data-destination="крепость">
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
                <h3>Кароткае</h3>
                <p>
                    Первые удары немецко-фашистских захватчиков 22 июня 1941 года приняла на себя Брестская крепость. Более месяца гарнизон крепости держал оборону в полном окружении и изоляции без обеспечения водой, пищей и боеприпасами. Уже был захвачен Минск, немцы приближались к Смоленску, а пограничники лейтенанта Андрея Кижеватова и солдаты гарнизона крепости под командованием майора Петра Гаврилова сражались, истекая кровью, до последнего патрона и вздоха. Подвиг защитников Брестской крепости стал примером мужества и отваги, верности присяге и воинскому долгу. 8 мая 1965 года крепости присвоено звание «крепость-герой», а в 1971 году открыт мемориальный комплекс «Брестская крепость-герой». Ты там увидишь монумент «Мужество», скульптурную композицию «Жажда», обелиск «Штык», площадь Церемониалов, Вечный огонь. Все это впечатляет, напоминает, предупреждает и не забывается никогда.
                </p>
                <h3>Доўгае</h3>
                <p>
                    В 1833 году по проекту инженер-генерала К. И. Оппермана, в центре старого города началось строительство пограничной крепости. Первый камень в основание крепости был заложен 1 июня 1836 г.; 26 апреля 1842 г. крепость была введена в строй.
                    С началом I мировой войны крепость усиленно готовилась к обороне, однако в ночь на 13 августа 1915 года в ходе общего отступления была оставлена и частично взорвана русскими войсками. 3 марта 1918 года в цитадели, в так называемом «Белом дворце» был подписан Брестский мир. Крепость находилась в руках немцев до конца 1918 года; затем под контролем поляков; в 1920 г. занята Красной Армией, но вскоре вновь отбита поляками и в 1921 по Рижскому миру отошла к Польше. Использовалась как казармы, военный склад и политическая тюрьма; в 1930-е гг. там были заключены оппозиционные политические деятели.
                    Брест 22 сентября 1939 г. вошла танковая бригада Красной Армии под командованием комбрига С.М. Кривошеина. В пограничной Брестской крепости разместились части Красной Армии.
                    К 22 июня 1941 года в крепости дислоцировалось всего 7-8 тысяч человек, не считая членов семей (300 семей военнослужащих). С немецкой стороны штурм крепости был поручен около 17 тысяч человек во взаимодействии с 2 танковыми дивизиями Гудериана. По плану, крепостью следовало овладеть к 12 часам первого дня войны.
                    22 июня в 3:15 по крепости был открыт артиллерийский огонь, заставший гарнизон врасплох. В результате были уничтожены склады, водопровод, прервана связь, нанесены крупные потери гарнизону.
                    В 3:45 начался штурм. Неожиданность атаки привела к тому, что единого скоординированного сопротивления гарнизон оказать не смог и был разбит на несколько отдельных очагов. Примерно половина гарнизона с частью техники сумела покинуть крепость и соединиться со своими частями; к 9 часам утра крепость с остававшимися в ней 3,5-4 тысячами человек была окружена.
                    К вечеру 24 июня немцы овладели Волынским и Тереспольским укреплением; остатки гарнизона последнего, видя невозможность держаться, ночью переправились в Цитадель. Таким образом, оборона сосредоточилась в Цитадели под командованием майора П.М. Гаврилова.
                    Ежедневно защитникам крепости приходилось отбивать 7-8 атак, при чем применялись огнемёты; 29-30 июня был предпринят непрерывный двухдневный штурм крепости, в результате которого немцам удалось овладеть штабом Цитадели и взять в плен капитана Зубачева и Фомина (Фомин, как комиссар, был выдан одним из пленных и немедленно расстрелян; Зубачев впоследствии умер в лагере).
                    Организованная оборона крепости на этом закончилась; оставались лишь изолированные очаги сопротивления (сколько-нибудь крупные из них были подавлены в течение следующей недели) и одиночные бойцы. Так, Гаврилов сумел собрать вокруг себя группу солдат и продолжал сопротивление, и только 23 июля ранеными попали в плен среди последних защитников крепости.
                    Впервые об обороне Брестской крепости стало известно из штабного немецкого донесения, захваченного в бумагах разгромленной части в феврале 1942 г. под Орлом. Заслуга восстановления памяти героев крепости во многом принадлежит писателю и историку С.С. Смирнову благодаря книге «Брестская крепость».

                </p>
                <h3>Полезные ссылки:</h3>
                <div class="links">
                    <a href="https://warspot.ru/9351-krepost-na-sliyanii-buga-i-muhavtsa" target="_blank">Интерактивная карта Брестской крепости</a>
                    <a href="https://brest-fortress.by/" target="_blank">Афіцыйны сайт “Мемориальный комплекс «Брестская крепость-герой”</a>
                    <a href="https://www.youtube.com/watch?v=j7K7keX1fYE" target="_blank">“Загадки Брестской крепости | Телеканал "История"” (26.53 хвіліны)</a>
                    <a href="https://www.youtube.com/watch?v=jUzGyns9TCE " target="_blank">Художественный фильм 2010 г. “Брестская крепость” об обороне Брестской крепости во время Великой Отечественной войны в июне-июле 1941 года.</a>
                </div>
            </div>

        </article>

<?php $this->registerCssFile('@web/css/view.css'); ?>
<?php $this->registerJsFile('@web/js/view.js'); ?>
