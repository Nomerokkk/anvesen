<section class="we-build-home">
    <div class="wrapper">
        <div class="title-section">
            КАКИЕ ДОМА МЫ СТРОИМ?
        </div>
        <div class="desc-section">
            Сотрудники компании «Anvesen», ответственно подходят ко всему,
            что охватывает понятие «строительство дома»
        </div>
        <div class="we-build-home__wrapper">
            <?php
            $arrg = [
                ['name' => 'Каркасно щитовые дома', 'img' => 'dist/img/home1.jpg'],
                ['name' => 'Из оцилиндрованного бруса', 'img' => 'dist/img/home1.jpg'],
                ['name' => 'Дома из бруса', 'img' => 'dist/img/home1.jpg'],
                ['name' => 'Дома из пеноблоков', 'img' => 'dist/img/home1.jpg'],
                ['name' => 'Дома из клеенного бруса', 'img' => 'dist/img/home1.jpg'],
                ['name' => 'Из газобетонных блоков', 'img' => 'dist/img/home1.jpg'],
                ['name' => 'Каркасные дома', 'img' => 'dist/img/home1.jpg'],
            ];
            foreach ($arrg as $item) {
                ?>
                <div class="we-build-home__item">
                    <div class="we-build-home__img">
                        <img src="<?php echo $item['img'];?>" alt="">
                        <div class="we-build-home__title">
                            <?php echo $item['name']; ?>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>