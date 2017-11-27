<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        anvensen
    </title>

    <?php include(__DIR__ . '/layout/head.php'); ?>
</head>
<body>
<?php
$sliderBanner = 'bread';
$namePage = 'Строительство каменных домов';
?>
<?php
include(__DIR__ . '/layout/header.php');
include(__DIR__ . '/layout/banner.php');
?>

<div class="news">
    <div class="wrapper wrapper-new">
        <div class="news__main">
            <div class="news-all__wrapper">
                <?php for ($s; $s < 9; $s++) { ?>
                    <div class="last-news__item news-all__item">
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
            <ul class="pagination">
                <li><a href="#!">предыдущая</a></li>
                <li><a href="#!">1</a></li>
                <li><a href="#!">2</a></li>
                <li><a href="#!">3</a></li>
                <li><a href="#!">...</a></li>
                <li><a href="#!">24</a></li>
                <li><a href="#!">следующая</a></li>
            </ul>
        </div>
        <div class="news__sidebar">
            <div class="news__sidebar-title">
                КАТЕГОРИИ
            </div>
            <div class="news__sidebar-item">
                <ul class="news__sidebar-list">
                    <li>
                        <a href="#">
                            Строительство
                        </a>
                    </li>
                    <li><a href="#!">Проектирование</a></li>
                    <li><a href="#!">Отделка дома</a></li>
                    <li><a href="#!">Инженерные системы</a></li>
                    <li><a href="#!">Строительные материалы</a></li>
                </ul>
            </div>
            <div class="news__sidebar-title">
                популярные статьи
            </div>
            <div class="news__sidebar-item">
                <div class="news__sidebar-cat">
                    <a href="#!">
                        Строительство
                    </a>
                </div>
                <div class="news__sidebar-new-title">
                    <a href="news-single.php">
                        Строительство дома с гаражом
                    </a>
                </div>
                <ul class="news-item__nav">
                    <li class="comment">
                        2
                    </li>
                    <li class="view">
                        322
                    </li>
                </ul>
            </div>
            <div class="news__sidebar-item">
                <div class="news__sidebar-cat">
                    <a href="#!">
                        Строительство
                    </a>
                </div>
                <div class="news__sidebar-new-title">
                    <a href="news-single.php">
                        Строительство дома с гаражом
                    </a>
                </div>
                <ul class="news-item__nav">
                    <li class="comment">
                        2
                    </li>
                    <li class="view">
                        322
                    </li>
                </ul>
            </div>
            <div class="news__sidebar-item">
                <div class="news__sidebar-cat">
                    <a href="#!">
                        Строительство
                    </a>
                </div>
                <div class="news__sidebar-new-title">
                    <a href="news-single.php">
                        Строительство дома с гаражом
                    </a>
                </div>
                <ul class="news-item__nav">
                    <li class="comment">
                        2
                    </li>
                    <li class="view">
                        322
                    </li>
                </ul>
            </div>
            <form action="" class="news__sidebar-form">
                <div class="news__sidebar-form-title">
                    Бесплатный расчет стоимости строительства дома!
                </div>
                <input type="text" placeholder="Имя" class="news__sidebar-input">
                <input type="text" placeholder="Телефон" class="news__sidebar-input">
                <input type="submit" class="button button--orange" value="Рассчитать смету">
            </form>
        </div>
    </div>
</div>
<?php
include(__DIR__ . '/layout/free-calculate.php');
include(__DIR__ . '/layout/footer.php');
include(__DIR__ . '/layout/popup.php');
include(__DIR__ . '/layout/scripts.php');
?>
</body>
</html>