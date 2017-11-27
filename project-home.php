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
    <link rel="stylesheet" href="dist/css/garant.css">

    <?php include(__DIR__ . '/layout/head.php'); ?>
</head>
<body>
<?php
$sliderBanner = 'projects';
$namePage = 'Проектирование домов';
?>
<?php
include(__DIR__ . '/layout/header.php');
include(__DIR__ . '/layout/banner.php');
include(__DIR__ . '/layout/garant.php');
include(__DIR__ . '/layout/call-back.php');
?>

<?php
include(__DIR__ . '/layout/anvesen-this.php');
include(__DIR__ . '/layout/reviews.php');
include(__DIR__ . '/layout/free-calculate.php');
include(__DIR__ . '/layout/seo.php');
include(__DIR__ . '/layout/footer.php');
include(__DIR__ . '/layout/popup.php');
include(__DIR__ . '/layout/popup-review.php');
include(__DIR__ . '/layout/scripts.php');
?>

</body>
</html>