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
<body class="building">
<?php
$namePage = 'Строительство домов';
$sliderBanner = 'building';
include(__DIR__ . '/layout/header.php');
include(__DIR__ . '/layout/banner.php');
include(__DIR__ . '/layout/list-service.php');
include(__DIR__ . '/layout/we-build-home.php');
include(__DIR__ . '/layout/our-work.php');
include(__DIR__ . '/layout/free-calculate.php');
include(__DIR__ . '/layout/reviews.php');
include(__DIR__ . '/layout/anvesen-this.php');
?>

<div class="get-home">
    <div class="wrapper">
        <div class="get-home__title">
            Получите дом мечты от компании «Anvesen»
        </div>
        <div class="get-home__desc">
            Наш главный девиз: надёжность, комфорт и долговечность!
        </div>
        <button data-fancybox data-src="#zvonok" class="button button--orange">
            Заказать звонок
        </button>
        <div class="get-home__call-us">
            или позвоните по телефону
        </div>
        <a href="tel:+7 (911) 903-67-79" class="get-home__number">
            +7 (911) 903-67-79
        </a>
    </div>
</div>

<?php
include(__DIR__ . '/layout/seo.php');
include(__DIR__ . '/layout/footer.php');
include(__DIR__ . '/layout/popup.php');
include(__DIR__ . '/layout/popup-review.php');
include(__DIR__ . '/layout/scripts.php');
?>
</div>
<script>
    setTimeout(function () {
        var filterizd = $('.our-work__works').filterizr();
    }, 500);
</script>
</body>
</html>