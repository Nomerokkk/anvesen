<div class="garant">
    <div class="wrapper">
        <div class="title-section">
            ПРЕИМУЩЕСТВА И ГАРАНТИИ
        </div>
        <div class="desc-section">
            Сотрудники компании «Anvesen», ответственно подходят ко всему,
            что охватывает понятие «строительство дома»
        </div>
        <div class="garant__wrapper">
            <?php
            $arrg = [
                ['name' => 'Эксклюзивная архитектура', 'img' => 'dist/img/garant1.png', 'desc' => 'стиль, точно отвечающий вашим представлениям о красоте'],
                ['name' => 'Комфорт и эргономика', 'img' => 'dist/img/garant2.png', 'desc' => 'продуманная организация пространства для каждого члена вашей семьи'],
                ['name' => 'Профессионализм', 'img' => 'dist/img/garant3.png', 'desc' => 'профильные разделы проекта разрабатывают архитекторы, конструкторы, инженеры и дизайнеры'],
                ['name' => 'Полный пакет документации', 'img' => 'dist/img/garant4.png', 'desc' => 'детальное представление всех аспектов вашего дома и исчерпывающие данные для строительства'],
            ];
            foreach ($arrg as $item) {
                ?>
                <div class="garant__item">
                    <div class="garant__inner">
                        <img src="<?php echo $item['img']; ?>" alt="">
                        <div class="garant__title">
                            <?php echo $item['name']; ?>
                        </div>
                        <div class="garant__desc">
                            <?php echo $item['desc']; ?>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>