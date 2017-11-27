<?php if ($namePage == 'Наши работы') { ?>
    <div class="our-work">
        <div class="wrapper">
            <div class="our-work__wrapper">
                <ul class="our-work__nav">
                    <li class="active" data-filter="all">
                        <a href="#!" class="button">
                            все дома
                        </a>
                    </li>
                    <li data-filter="1">
                        <a href="#!" class="button">
                            деревянные дома
                        </a>
                    </li>
                    <li data-filter="2">
                        <a href="#!" class="button">
                            кирпичные дома
                        </a>
                    </li>
                    <li data-filter="3">
                        <a href="#!" class="button">
                            из пеноблоков
                        </a>
                    </li>
                    <li data-filter="4">
                        <a href="#!" class="button">
                            каркасные дома
                        </a>
                    </li>
                </ul>
                <div class="our-work__works">
                    <?php
                    $arrg = [
                        ['img' => 'dist/img/work1.jpg', 'sort' => '2, 4', 'id' => '1'],
                        ['img' => 'dist/img/work1.jpg', 'sort' => '1, 3', 'id' => '2'],
                        ['img' => 'dist/img/work1.jpg', 'sort' => '1, 4', 'id' => '3'],
                        ['img' => 'dist/img/work1.jpg', 'sort' => '1, 3', 'id' => '4'],
                        ['img' => 'dist/img/work1.jpg', 'sort' => '1, 2', 'id' => '5'],
                        ['img' => 'dist/img/work1.jpg', 'sort' => '3, 4', 'id' => '6'],
                    ];
                    foreach ($arrg as $item) {
                        ?>
                        <a data-fancybox="modal-gallery" href="#image-<?php echo $item['id']; ?>"
                           class="our-work__item filtr-item j-modal-gallery"
                           data-category="<?php echo $item['sort']; ?>" rel="gallery1">
                            <div class="our-work__img">
                                <img src="<?php echo $item['img']; ?>" alt="">
                            </div>
                        </a>
                    <?php }
                    foreach ($arrg as $item) {
                        ?>
                        <div class="modal-gallery" id="image-<?php echo $item['id']; ?>">
                            <img src="dist/img/popup-gal.jpg" alt="">
                            <div class="modal-gallery__title">
                                ПОНРАВИЛОСЬ УВИДЕННОЕ? МЫ СДЕЛАЕМ ВАМ ДАЖЕ ЛУЧШЕ!
                            </div>
                            <div class="modal-gallery__wrapper">
                                <div class="modal-gallery__desc">
                                    Расчитайте смету по Вашему проекту, это абсолютно <span>БЕСПЛАТНО!</span>
                                </div>
                                <a href="#!" class="button button--orange">
                                    рассчитать смету
                                </a>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
            <a href="#!" class="button button--grey our-work__more">
                Смотреть все
            </a>
        </div>
    </div>
<?php } else { ?>
    <div class="our-work">
        <div class="wrapper">
            <div class="title-section">
                НАШИ РАБОТЫ
            </div>
            <div class="desc-section">
                Сотрудники компании «Anvesen», ответственно подходят ко всему,
                что охватывает понятие «строительство дома»
            </div>
            <div class="our-work__wrapper">
                <ul class="our-work__nav">
                    <li class="active" data-filter="all">
                        <a href="#!" class="button">
                            все дома
                        </a>
                    </li>
                    <li data-filter="1">
                        <a href="#!" class="button">
                            деревянные дома
                        </a>
                    </li>
                    <li data-filter="2">
                        <a href="#!" class="button">
                            кирпичные дома
                        </a>
                    </li>
                    <li data-filter="3">
                        <a href="#!" class="button">
                            из пеноблоков
                        </a>
                    </li>
                    <li data-filter="4">
                        <a href="#!" class="button">
                            каркасные дома
                        </a>
                    </li>
                </ul>
                <div class="our-work__works">
                    <?php
                    $arrg = [
                        ['img' => 'dist/img/work1.jpg', 'sort' => '2, 4', 'id' => '1'],
                        ['img' => 'dist/img/work1.jpg', 'sort' => '1, 3', 'id' => '2'],
                        ['img' => 'dist/img/work1.jpg', 'sort' => '1, 4', 'id' => '3'],
                        ['img' => 'dist/img/work1.jpg', 'sort' => '1, 3', 'id' => '4'],
                        ['img' => 'dist/img/work1.jpg', 'sort' => '1, 2', 'id' => '5'],
                        ['img' => 'dist/img/work1.jpg', 'sort' => '3, 4', 'id' => '6'],
                    ];
                    foreach ($arrg as $item) {
                        ?>
                        <a data-fancybox="modal-gallery" href="#image-<?php echo $item['id']; ?>"
                           class="our-work__item filtr-item j-modal-gallery"
                           data-category="<?php echo $item['sort']; ?>" rel="gallery1">
                            <div class="our-work__img">
                                <img src="<?php echo $item['img']; ?>" alt="">
                            </div>
                        </a>
                    <?php }
                    foreach ($arrg as $item) {
                        ?>
                        <div class="modal-gallery" id="image-<?php echo $item['id']; ?>">
                            <img src="dist/img/popup-gal.jpg" alt="">
                            <div class="modal-gallery__title">
                                ПОНРАВИЛОСЬ УВИДЕННОЕ? МЫ СДЕЛАЕМ ВАМ ДАЖЕ ЛУЧШЕ!
                            </div>
                            <div class="modal-gallery__wrapper">
                                <div class="modal-gallery__desc">
                                    Расчитайте смету по Вашему проекту, это абсолютно <span>БЕСПЛАТНО!</span>
                                </div>
                                <a href="#!" class="button button--orange">
                                    рассчитать смету
                                </a>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
            <a href="#!" class="button button--grey our-work__more">
                Смотреть все
            </a>
        </div>
    </div>
<?php } ?>