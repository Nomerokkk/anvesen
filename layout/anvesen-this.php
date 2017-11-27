
<?php if($namePage == 'О компании') { ?>
<div class="anvessen-this">
    <div class="wrapper">
        <div class="title-section">
            "anvesen" - ЭТО
        </div>
        <div class="desc-section">
            Наш главный девиз: надёжность, комфорт и долговечность!
        </div>
        <div class="anvessen-this__wrapper">
            <?php
            $arrgs2 = [
                ['name' => 'Индивидуальное проектирование', 'id' => 1],
                ['name' => 'Самые надежные материалы', 'id' => 2],
                ['name' => 'Низкие для Москвы цены', 'id' => 3],
                ['name' => 'Гарантия и постобслуживание', 'id' => 4],
                ['name' => 'Строительство под ключ', 'id' => 5],
                ['name' => 'Отделка, ремонт монтаж', 'id' => 6],
                ['name' => 'Опытные строители славяне', 'id' => 7],
                ['name' => 'Открытость на всех этапах', 'id' => 8],
            ];
            foreach ($arrgs2 as $item) {
            ?>
                <div class="anvessen-this__item">
                    <div class="anvessen-this__img">
                        <img src="dist/img/about<?php echo $item['id']; ?>.png" alt="">
                    </div>
                    <div class="anvessen-this__title">
                        <?php echo $item['name']; ?>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>
<?php } else { ?>
    <div class="anvessen-this">
        <div class="wrapper">
            <div class="title-section">
                "anvesen" - ЭТО
            </div>
            <div class="desc-section">
                Наш главный девиз: надёжность, комфорт и долговечность!
            </div>
            <div class="anvessen-this__wrapper">
                <?php
                $arrgs = [
                    ['name' => 'Десятки типовых и авторских проектов коттеджей', 'id' => 1],
                    ['name' => 'Услуги дизайнера', 'id' => 2],
                    ['name' => 'Возможность внесения в проект индивидуальных правок', 'id' => 3],
                    ['name' => 'Оперативность', 'id' => 4],
                    ['name' => 'Опыт строителей и инженеров', 'id' => 5],
                    ['name' => 'Только высококачественные материалы', 'id' => 6],
                    ['name' => 'Наличие сертификатов и гарантии', 'id' => 7],
                    ['name' => 'Открытость на всех этапах', 'id' => 8],
                ];
                foreach ($arrgs as $item) {
                    ?>
                    <div class="anvessen-this__item">
                        <div class="anvessen-this__img">
                            <img src="dist/img/anvesen<?php echo $item['id']; ?>.png" alt="">
                        </div>
                        <div class="anvessen-this__title">
                            <?php echo $item['name']; ?>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
<?php } ?>
