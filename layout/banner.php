<?php if ($sliderBanner == 'slider') { ?>
    <div class="banner banner--slider j-banner">
        <div class="banner__item" style="background-image: url(dist/img/banner.jpg);">
            <div class="wrapper">
                <h1 class="banner__title">
                    СТРОИТЕЛЬСТВО КОТТЕДЖЕЙ ПОД КЛЮЧ<br>
                    В ПОДМОСКОВЬЕ
                </h1>
                <div class="banner__desc">
                    Строительство домов – это наша работа, но качественное строительство
                    комфортабельных современных домов – это наша специализация!
                </div>
                <div class="banner__btns">
                    <button class="button banner__button button--orange">
                        заказать расчет проекта
                    </button>
                    <button class="button banner__button button--transparent">
                        подробнее
                    </button>
                </div>
            </div>
        </div>
        <div class="banner__item" style="background-image: url(dist/img/banner.jpg);">
            <div class="wrapper">
                <h1 class="banner__title">
                    СТРОИТЕЛЬСТВО КОТТЕДЖЕЙ ПОД КЛЮЧ<br>
                    В ПОДМОСКОВЬЕ
                </h1>
                <div class="banner__desc">
                    Строительство домов – это наша работа, но качественное строительство
                    комфортабельных современных домов – это наша специализация!
                </div>
                <div class="banner__btns">
                    <button class="button banner__button button--orange">
                        заказать расчет проекта
                    </button>
                    <button class="button banner__button button--transparent">
                        подробнее
                    </button>
                </div>
            </div>
        </div>
    </div>
    <?php } else if ($sliderBanner == 'bread') { ?>
        <div class="banner">
            <div class="navigation-page">
                <div class="wrapper">
                    <div class="navigation-page__name">
                        <?php echo $namePage; ?>
                    </div>
                    <ul class="navigation-page__breadcump">
                        <li>
                            <a href="#!">
                                Главная
                            </a>
                        </li>
                        <li>
                            <a href="#!">
                                <?php echo $namePage; ?>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    <?php } else {
    if ($namePage == 'Проектирование домов') {
    ?>
    <div class="banner">
        <div class="navigation-page">
            <div class="wrapper">
                <div class="navigation-page__name">
                    <?php echo $namePage; ?>
                </div>
                <ul class="navigation-page__breadcump">
                    <li>
                        <a href="#!">
                            Главная
                        </a>
                    </li>
                    <li>
                        <a href="#!">
                            <?php echo $namePage; ?>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="wrapper">
            <h1 class="banner__title">
                Проектирование загородных домов и коттеджей
            </h1>
            <div class="banner__desc">
                Строительство домов – это наша работа, но качественное строительство
                комфортабельных современных домов – это наша специализация!
            </div>
            <div class="banner__btns">
                <button class="button banner__button button--orange">
                    заказать расчет проекта
                </button>
            </div>
        </div>
    </div>
        <?php } else { ?>
        <div class="banner">
            <div class="navigation-page">
                <div class="wrapper">
                    <div class="navigation-page__name">
                        <?php echo $namePage; ?>
                    </div>
                    <ul class="navigation-page__breadcump">
                        <li>
                            <a href="#!">
                                Главная
                            </a>
                        </li>
                        <li>
                            <a href="#!">
                                <?php echo $namePage; ?>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="wrapper">
                <h1 class="banner__title">
                    СТРОИТЕЛЬСТВО КОТТЕДЖЕЙ ПОД КЛЮЧ<br>
                    В ПОДМОСКОВЬЕ
                </h1>
                <div class="banner__desc">
                    Строительство домов – это наша работа, но качественное строительство
                    комфортабельных современных домов – это наша специализация!
                </div>
                <div class="banner__btns">
                    <button class="button banner__button button--orange">
                        заказать расчет проекта
                    </button>
                </div>
            </div>
        </div>

    <?php } ?>
<?php } ?>
