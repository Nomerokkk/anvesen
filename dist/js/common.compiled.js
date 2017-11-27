'use strict';

var _createClass = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }();

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

var Common = function () {
    function Common() {
        _classCallCheck(this, Common);

        this.initUI();
        this.bindEvents();
    }

    _createClass(Common, [{
        key: 'initUI',
        value: function initUI() {
            $('.j-banner').slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                dots: true,
                arrows: false
            });

            $('.j-reviews').slick({
                slidesToShow: 2,
                slidesToScroll: 2,
                dots: false,
                arrows: true,
                prevArrow: '<button class="arrows__prev"></button>',
                nextArrow: '<button class="arrows__next"></button>',
                responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }]
            });

            if ($(window).width() < 768) {
                $('.j-slider-news-mob, .j-service-slider-mob').slick({
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    dots: false,
                    arrows: true,
                    prevArrow: '<button class="arrows__prev"></button>',
                    nextArrow: '<button class="arrows__next"></button>'
                });
            }

            $('.our-work__nav li').on('click', function (event) {
                event.preventDefault();

                $('.our-work__nav li').removeClass('active');
                $(this).addClass('active');
            });

            $('[data-fancybox="modal-gallery"]').fancybox({
                arrows: true,
                toolbar: false,
                buttons: ['close'],
                idleTime: false,
                baseClass: 'modal-gallery-fancybox',
                btnTpl: {
                    arrowLeft: '<button data-fancybox-prev class="modal-gallery-fancybox__arrow-left" title="{{PREV}}">' + '</button>',

                    arrowRight: '<button data-fancybox-next class="modal-gallery-fancybox__arrow-right" title="{{NEXT}}">' + '</button>'
                },
                transitionEffect: 'zoom-in-out',
                animationEffect: 'zoom-in-out',
                loop: true
            });
        }
    }, {
        key: 'bindEvents',
        value: function bindEvents() {
            $('.j-seo-read').on('click', function (event) {
                event.preventDefault();

                $('.j-seo-text').toggleClass('seo__text--open');
                $(this).remove();
            });

            $('.toggle-menu').on('click', function () {
                $('.j-menu-mob').fadeIn();
            });
            $('.j-menu-close').on('click', function () {
                $('.j-menu-mob').fadeOut();
            });
            $('.j-submenu-open').on('click', function () {
                var text = $(this).text();

                $(this).siblings('.submenu').slideToggle();
                $(this).text(text == '+' ? '—' : '+');
            });

            $('.faq__button').on('click', function () {
                $(this).closest('.faq__item').find('.faq__desc').slideToggle();
                $(this).toggleClass('faq__button--open');
            });
        }
    }]);

    return Common;
}();

$(function () {
    new Common();
});