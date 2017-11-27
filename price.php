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
$namePage = 'Цены'
?>
<?php
include(__DIR__ . '/layout/header.php');
include(__DIR__ . '/layout/banner.php');
?>

<div class="price">
    <div class="wrapper">
        <div class="price__desc">
            В нашей строительной компании «ANVESEN» определена следующая ориентировочная стоимость <br>
            строительства индивидуальных жилых домов (коттеджей) в комплектациях
        </div>
        <div class="price__table">
            <div class="price__row price__row--head">
                <div class="price__cell price__cell--long">
                    <div class="price__bg">
                        НАИМЕНОВАНИЕ
                    </div>
                </div>
                <div class="price__cell">
                    <div class="price__bg">
                        Эконом
                        <span>(От 11 200)</span>
                    </div>
                </div>
                <div class="price__cell">
                    <div class="price__bg">
                        Бизнес
                        <span>(От 17 500)</span>
                    </div>
                </div>
                <div class="price__cell">
                    <div class="price__bg">
                        Люкс
                        <span>(От 23 000)</span>
                    </div>
                </div>
                <div class="price__cell">
                    <div class="price__bg">
                        Люкс +
                        <span>(От 54 000)</span>
                    </div>
                </div>
            </div>
            <?php for ($s; $s < 10; $s++) { ?>
                <div class="price__row">
                    <div class="price__cell price__cell--long price__cell-data">
                        <div class="price__bg-cell">
                            <div class="bg-cell">
                                фундамент
                            </div>
                        </div>
                        <div class="price__bg-cell">
                            <div class="price__bg-row">
                                <div class="bg-cell">
                                    монолитный железобетонный (согласно проекта)
                                </div>
                            </div>
                            <div class="price__bg-row">
                                <div class="bg-cell">
                                    монолитный железобетонный (согласно проекта)
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="price__cell">
                        <div class="price__bg">
                            <div class="price__plus button--green">
                                +
                            </div>
                        </div>
                    </div>
                    <div class="price__cell">
                        <div class="price__bg">
                            <div class="price__plus button--green">
                                +
                            </div>
                        </div>
                    </div>
                    <div class="price__cell">
                        <div class="price__bg">
                            <div class="price__plus button--orange">
                                —
                            </div>
                        </div>
                    </div>
                    <div class="price__cell">
                        <div class="price__bg">
                            <div class="price__plus button--orange">
                                —
                            </div>
                        </div>
                    </div>
                </div>
                <div class="price__row">
                    <div class="price__cell price__cell--long price__cell-data">
                        <div class="price__bg-cell">
                            <div class="bg-cell">
                                Несущие стены
                            </div>
                        </div>
                        <div class="price__bg-cell">
                            <div class="price__bg-row">
                                <div class="bg-cell">
                                    монолитный железобетонный (согласно проекта)
                                    монолитный железобетонный (согласно проекта)
                                    монолитный железобетонный (согласно проекта)
                                </div>
                            </div>
                            <div class="price__bg-row">
                                <div class="bg-cell">
                                    монолитный железобетонный (согласно проекта)
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="price__cell">
                        <div class="price__bg">
                            <div class="price__plus button--green">
                                +
                            </div>
                        </div>
                    </div>
                    <div class="price__cell">
                        <div class="price__bg">
                            <div class="price__plus button--green">
                                +
                            </div>
                        </div>
                    </div>
                    <div class="price__cell">
                        <div class="price__bg">
                            <div class="price__plus button--orange">
                                —
                            </div>
                        </div>
                    </div>
                    <div class="price__cell">
                        <div class="price__bg">
                            <div class="price__plus button--orange">
                                —
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
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