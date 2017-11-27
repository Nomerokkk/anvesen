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
    <link rel="stylesheet" href="dist/css/contacts.css">

    <?php include(__DIR__ . '/layout/head.php'); ?>
</head>
<body>
<?php
$sliderBanner = 'bread';
$namePage = 'Контакты'
?>
<?php
include(__DIR__ . '/layout/header.php');
include(__DIR__ . '/layout/banner.php');
?>
<div class="contacts">
    <div class="wrapper">
        <div class="contacts__bl">
            <div class="contacts__title">
                контактная информация
            </div>
            <div class="contacts__desc">
                <span>«Anvesen»</span> - активно и динамично <br>
                развивающаяся строительная компания
            </div>
            <ul class="contacts__info">
                <li>
                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                    Москва, Зеленоград, <br>
                    проезд 4801, д.8 стр. 9
                </li>
                <li>
                    <i class="fa fa-phone" aria-hidden="true"></i>
                    +7(495)150-38-36
                </li>
                <li>
                    <i class="fa fa-envelope" aria-hidden="true"></i>
                    info@starij-gorod.ru
                </li>
                <li>
                    <i class="fa fa-clock-o" aria-hidden="true"></i>
                    с 9:00 до 19:00
                </li>
            </ul>
        </div>
        <div class="contacts__bl">
            <div class="contacts__title">
                связаться с нами
            </div>
            <div class="contacts__desc">
                Не стесняйтесь задать нам вопрос! Вы получите полную консультацию от наших специалистов.
                Наш главный девиз: надёжность, комфорт и долговечность!
            </div>
            <form action="" class="contacts__form">
                <div class="contacts__form-top">
                    <input type="text" placeholder="Имя" class="contacts__input">
                    <input type="text" placeholder="Телефон" class="contacts__input">
                </div>
                <textarea name="" id="" cols="30" rows="5" placeholder="Текст вопроса"
                          class="contacts__textarea"></textarea>
                <input type="submit" class="button button--green contacts__button" value="Отправить сообщение">
            </form>
        </div>
    </div>
</div>

<div class="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2230.147961005681!2d37.19807721566738!3d56.01611008062461!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46b51446ef781a2b%3A0x2fd44d7ce79bdc41!2zNDgwMS3QuSDQv9GALdC0LCA4LCDQl9C10LvQtdC90L7Qs9GA0LDQtCwg0JzQvtGB0LrQstCwLCDQoNC-0YHRltGPLCAxMjQ0NjA!5e0!3m2!1suk!2sua!4v1511713035703"
            width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>
<?php
include(__DIR__ . '/layout/free-calculate.php');
include(__DIR__ . '/layout/footer.php');
include(__DIR__ . '/layout/popup.php');
include(__DIR__ . '/layout/scripts.php');
?>

</body>
</html>