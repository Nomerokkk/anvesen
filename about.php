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
    <link rel="stylesheet" href="dist/css/about-us.css">
</head>
<body>

<?php
$namePage = 'О компании';
include(__DIR__ . '/layout/header.php');
include(__DIR__ . '/layout/banner.php');
include(__DIR__ . '/layout/list-service.php');
include(__DIR__ . '/layout/anvesen-this.php');
include(__DIR__ . '/layout/our-result.php');
?>
<div class="about-us">
    <div class="wrapper">
        <div class="about-us__img">
            <img src="dist/img/company.jpg" alt="">
        </div>
        <div class="about-us__text">
            <div class="title-section">
                КОМПАНИЯ "ANVESEN"
            </div>
            <div class="desc-section">
                Наш главный девиз: надёжность, комфорт и долговечность!
            </div>
            <div class="about-us__desc">
                «Anvesen» - активно и динамично развивающаяся строительная компания. Мы специализируемся на
                строительстве
                домов и коттеджей различной сложности, при этом наши демократичные цены не влияют на качество
                выполненных
                работ. Используя передовые технологии и самые надёжные материалы, мы сможем построить дом Вашей мечты.
            </div>
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