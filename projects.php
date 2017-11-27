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
    <link rel="stylesheet" href="dist/css/projects.css">
</head>
<body>
<?php
$sliderBanner = 'bread';
$namePage = 'Каталог проектов';
?>
<?php
include(__DIR__ . '/layout/header.php');
include(__DIR__ . '/layout/banner.php');
?>
<div class="projects">
    <div class="wrapper">
        <div class="projects__wrapper">
            <?php for ($f; $f < 12; $f++) { ?>
                <div class="projects__item">
                    <div class="projects__inner">
                        <div class="projects__img">
                            <img src="dist/img/news1.jpg" alt="">
                            <div class="projects__value">
                            <span class="projects__number button--green">
                                D 729
                            </span>
                                <span class="projects__area button--orange">
                                111 м2
                            </span>
                            </div>
                        </div>
                        <div class="projects__nav">
                            <ul>
                                <li>
                                <span>
                                    спальн.
                                </span>
                                    3
                                </li>
                                <li>
                                <span>
                                    с./у
                                </span>
                                    2
                                </li>
                                <li>
                                <span>
                                    матер.
                                </span>
                                    <img src="dist/img/material.png" alt="">
                                </li>
                            </ul>
                            <div class="projects__price">
                                Стоимость проекта:
                                <span>
                                29 990 <i class="fa fa-rub" aria-hidden="true"></i>
                            </span>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
        <center>
            <button class="button button--grey">
                Загрузить еще
            </button>
        </center>
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