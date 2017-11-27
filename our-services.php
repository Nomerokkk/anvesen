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
$sliderBanner = 'asdasd';
$namePage = 'Услуги'
?>
<?php
include(__DIR__ . '/layout/header.php');
include(__DIR__ . '/layout/banner.php');
include(__DIR__ . '/layout/list-service-full.php');
include(__DIR__ . '/layout/our-work.php');
include(__DIR__ . '/layout/reviews.php');
include(__DIR__ . '/layout/free-calculate.php');
include(__DIR__ . '/layout/seo.php');
?>


<?php
include(__DIR__ . '/layout/footer.php');
include(__DIR__ . '/layout/popup.php');
include(__DIR__ . '/layout/popup-review.php');
include(__DIR__ . '/layout/scripts.php');
?>
<script>
    setTimeout(function () {
        var filterizd = $('.our-work__works').filterizr();
    }, 500);
</script>
</body>
</html>