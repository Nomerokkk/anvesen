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
$namePage = 'Наши работы';
?>
<?php
include(__DIR__ . '/layout/header.php');
include(__DIR__ . '/layout/banner.php');
include(__DIR__ . '/layout/our-work.php');
?>


<?php
include(__DIR__ . '/layout/footer.php');
include(__DIR__ . '/layout/popup.php');
include(__DIR__ . '/layout/scripts.php');
?>
<script>
    var filterizd = $('.our-work__works').filterizr();
</script>
</body>
</html>