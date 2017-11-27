<section class="list-service-full">
    <div class="wrapper">
        <div class="title-section">
            СПИСОК НАШИХ УСЛУГ
        </div>
        <div class="desc-section">
            Сотрудники компании «Anvesen», ответственно подходят ко всему,
            что охватывает понятие «строительство дома»
        </div>
        <div class="list-service-full__wrapper j-service-slider-mob">
            <?php
            $arrs = [
                ['name' => 'Строительство домов', 'id' => 1],
                ['name' => 'Проектирование домов', 'id' => 2],
                ['name' => 'Инженерные системы', 'id' => 3],
                ['name' => 'Отделка дома', 'id' => 4],
                ['name' => 'Продажа стройматериалов', 'id' => 5],
            ];
            foreach ($arrs as $item) {
                ?>
                <div class="list-service-full__item">
                    <img src="dist/img/service-f<?php echo $item['id']; ?>.png" alt="">
                    <div class="list-service-full__title">
                        <?php echo $item['name']; ?>
                    </div>
                    <div class="list-service-full__desc">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin
                        gravida
                        dolor sit amet lacus accumsan et viverra justo commodo.
                    </div>
                    <a href="project-home.php" class="button button--grey">
                        Подробнее
                    </a>
                </div>
            <?php } ?>
        </div>
    </div>
</section>