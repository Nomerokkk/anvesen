<?php if ($namePage == 'Строительство каменных домов' || $namePage == 'Отзывы') { ?>
<div class="last-news">
    <div class="wrapper">
        <div class="title-section">
            Вас может заинтересовать
        </div>
        <div class="desc-section">
            Сотрудники компании «Anvesen», ответственно подходят ко всему,
            что охватывает понятие «строительство дома»
        </div>
        <div class="last-news__wrapper j-slider-news-mob">
            <?php for ($im; $im < 3; $im++) { ?>
                <div class="last-news__item">
                    <div class="news-item">
                        <a href="news-single.php">
                            <img src="dist/img/news1.jpg" alt="">
                        </a>
                        <div class="news-item__cat">
                            Строительство
                        </div>
                        <div class="news-item__title">
                            <a href="news-single.php">
                                Строительство дома с гаражом
                            </a>
                        </div>
                        <ul class="news-item__nav">
                            <li class="calendar">
                                29 Августа 2017
                            </li>
                            <li class="comment">
                                2
                            </li>
                            <li class="view">
                                322
                            </li>
                        </ul>
                    </div>
                </div>
            <?php } ?>
        </div>
        <a href="#!" class="button button--grey last-news__read-all">
            Читать блог
        </a>
    </div>
</div>
<?php } else { ?>
    <div class="last-news">
        <div class="wrapper">
            <div class="title-section">
                последние статьи
            </div>
            <div class="desc-section">
                Сотрудники компании «Anvesen», ответственно подходят ко всему,
                что охватывает понятие «строительство дома»
            </div>
            <div class="last-news__wrapper j-slider-news-mob">
                <?php for ($im; $im < 3; $im++) { ?>
                    <div class="last-news__item">
                        <div class="news-item">
                            <a href="news-single.php">
                                <img src="dist/img/news1.jpg" alt="">
                            </a>
                            <div class="news-item__cat">
                                Строительство
                            </div>
                            <div class="news-item__title">
                                <a href="news-single.php">
                                    Строительство дома с гаражом
                                </a>
                            </div>
                            <ul class="news-item__nav">
                                <li class="calendar">
                                    29 Августа 2017
                                </li>
                                <li class="comment">
                                    2
                                </li>
                                <li class="view">
                                    322
                                </li>
                            </ul>
                        </div>
                    </div>
                <?php } ?>
            </div>
            <a href="#!" class="button button--grey last-news__read-all">
                Читать все
            </a>
        </div>
    </div>
<?php } ?>
