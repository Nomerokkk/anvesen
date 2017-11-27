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
$namePage = 'Отзывы'
?>
<?php
include(__DIR__ . '/layout/header.php');
include(__DIR__ . '/layout/banner.php');
?>

<div class="reviews">
    <div class="wrapper">
        <div class="reviews__full">
            <?php for ($i; $i < 5; $i++) { ?>
                <div class="reviews__item">
                    <div class="reviews__img">
                        <img src="dist/img/reviews1.jpg" alt="">
                    </div>
                    <div class="reviews__desc">
                        Хочу выразить благодарность бригаде под руководством прораба Валентина Васильевича Щипунова за
                        качественно построенный дом серии Яуза. Работы выполнены в срок и качественно, без замечаний и
                        нареканий
                        <div class="reviews__nav">
                            <div class="reviews__name">
                                Белова А.С.
                            </div>
                            <a data-fancybox href="#modal-review" class="reviews__read">
                                Читать весь отзыв
                            </a>
                        </div>
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
</div>
<?php
include(__DIR__ . '/layout/last-news.php');
include(__DIR__ . '/layout/free-calculate.php');
include(__DIR__ . '/layout/footer.php');
include(__DIR__ . '/layout/popup.php');
include(__DIR__ . '/layout/popup-review.php');
include(__DIR__ . '/layout/scripts.php');
?>
</body>
</html>