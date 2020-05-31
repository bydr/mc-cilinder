jQuery(document).ready(function () {
    console.log('LOADDD');

    /*Преобразование img в svg*/
    function imgToSvgConvert(element) {
        var img = jQuery(element);
        var imgID = img.attr('id');
        var imgClass = img.attr('class');
        var imgURL = img.attr('src');
        jQuery.get(imgURL, function (data) {
            // Get the SVG tag, ignore the rest
            var svg = jQuery(data).find('svg');
            // Add replaced image's ID to the new SVG
            if (typeof imgID !== 'undefined') {
                svg = svg.attr('id', imgID);
            }
            // Add replaced image's classes to the new SVG
            if (typeof imgClass !== 'undefined') {
                svg = svg.attr('class', imgClass + ' replaced-svg');
            }
            // Remove any invalid XML tags as per http://validator.w3.org
            svg = svg.removeAttr('xmlns:a');
            // Replace image with new SVG
            img.replaceWith(svg);
        }, 'xml');
    }

    jQuery('img.svg').each(function () {
        imgToSvgConvert(jQuery(this));
    });

    /*Фиксированное главное меню при прокрутке*/
    jQuery(window).on('scroll', function () {
        var top = window.pageYOffset || document.documentElement.scrollTop;
        // var navOffset = jQuery('#navbar-main-menu').offset().top;
        var headerTopHeight = parseFloat(jQuery('#header-top').css('height'));
        if (top >= headerTopHeight) {
            /*Установка padding-top следующего за главным меню контейнера при sticky, для плавности*/
           /* if (!jQuery('#navbar-main-menu').hasClass('sticky')) {
                var paddingTopNextContainer = parseFloat(jQuery('#navbar-main-menu').next('.container-fluid').css('padding-top'));
                paddingTopNextContainer += 60;
                jQuery('#navbar-main-menu').next('.container-fluid').css('padding-top', paddingTopNextContainer + 'px' );
            }
          //  jQuery('#navbar-main-menu').addClass('sticky');
        } else {
            /*Установка padding-top следующего за главным меню контейнера без sticky, как было до*/
            if (jQuery('#navbar-main-menu').hasClass('sticky')) {
                var paddingTopNextContainer = parseFloat(jQuery('#navbar-main-menu.sticky').next('.container-fluid').css('padding-top'));
                paddingTopNextContainer -= 60;
                jQuery('#navbar-main-menu.sticky').next('.container-fluid').css('padding-top', paddingTopNextContainer + 'px' );
            }
            jQuery('#navbar-main-menu').removeClass('sticky');
        }
    });

    /*Переключение выбранных столбиков в таблице в секции .series-section на Главной*/
    jQuery('.offer-table .item').on('click', function () {
        jQuery('.offer-table .item').removeClass('selected');
        jQuery(this).addClass('selected');
    });

    /*Слайдер Комментарии на Главной и подобные*/
    if (jQuery('.review-slider').length) {
        var slickElement = jQuery('.review-slider');
        slickElement.on('init', function () {
            jQuery(this).css('visibility', 'visible');
            console.log('INIT review-slider');
        });
        jQuery('.review-slider').slick({
            arrows: true, /*Стрелки навигации*/
            dots: false, /*Точки навигации*/
            autoplay: false, /*Автопрокрутка*/
            infinite: true,
            variableWidth: false,
            fade: false,
            autoplaySpeed: 5000, /*Интервал смены слайдов*/
            speed: 1000, /*Скорость анимации*/
            lazyLoad: 'progressive', /*Ленивая загрузка 'ondemand' or 'progressive'*/
            waitForAnimate: true, /*Ждать окончания анимации*/
            slidesToShow: 3,
            slidesToScroll: 1,
            responsive: [
                {
                    breakpoint: 992,
                    settings: {
                        slidesToShow: 2
                    }
                },
                {
                    breakpoint: 576,
                    settings: {
                        slidesToShow: 1
                    }
                }
            ]
        });
    }

    /*Слайдер таблицы на главной на адаптиве и подобные*/
    if (jQuery(window).width() < 1200) {
        jQuery('.offer-table-slider').slick({
            arrows: true, /*Стрелки навигации*/
            dots: false, /*Точки навигации*/
            autoplay: false, /*Автопрокрутка*/
            infinite: false,
            variableWidth: false,
            fade: false,
            autoplaySpeed: 5000, /*Интервал смены слайдов*/
            speed: 1000, /*Скорость анимации*/
            lazyLoad: 'progressive', /*Ленивая загрузка 'ondemand' or 'progressive'*/
            waitForAnimate: true, /*Ждать окончания анимации*/
            slidesToShow: 3,
            slidesToScroll: 1,
            responsive: [
                {
                    breakpoint: 992,
                    settings: {
                        slidesToShow: 2
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 1
                    }
                }
            ]
        });
    }

    /*Блок Читать далее*/
    if (jQuery('.read-more-block-wrapper').length) {
        jQuery('.read-more-block-wrapper .read-more-open, .read-more-block-wrapper .mist').on('click', function () {
            jQuery(this).closest('.read-more-block-wrapper').addClass('open');
        });
        jQuery('.read-more-block-wrapper .read-more-close').on('click', function () {
            jQuery(this).closest('.read-more-block-wrapper').removeClass('open');
        });
    }







    /*Показать еще на странице Каталога и подобное*/
    if (jQuery('.load-more-block').length && jQuery('.load-more-block').is(':visible')) {
        jQuery('.load-more-block').closest('.row').find('.item').hide();
        jQuery('.load-more').on('click', function () {
            console.log('Load More');
            var n = 4;
            jQuery(this).closest('.row').find('.item').each(function (index, value) {
                if (jQuery(this).is(':hidden') && n > 0) {
                    jQuery(this).show();
                    n--;
                }
            });
            if (!jQuery(this).closest('.row').find('.item:hidden').length) {
                jQuery(this).hide();
            }
        });
        jQuery('.load-more').trigger('click');
    }

    /*Показать еще на странице Блога и подобное*/
    /*
    if ($('.loadMoreBlockBlog').length && $('.loadMoreBlockBlog').is(':visible')) {
        $('.loadMoreBlockBlog').closest('.item-wrapper').find('.item').hide();
        $('.loadMoreBlockBlog .load-more').on('click', function () {
            var n = 4;
            $(this).closest('.item-wrapper').find('.item').each(function (index, value) {
                if ($(this).is(':hidden') && n > 0) {
                    $(this).show();
                    n--;
                }
            });
            if (!$(this).closest('.item-wrapper').find('.item:hidden').length) {
                $(this).hide();
            }
        });
        $('.loadMoreBlockBlog .load-more').trigger('click');
    }
    */

    /*Галерея на сингле страницы товара*/
    if (jQuery('.product-gallery').length) {
        var galleryMinHeight = 320;
        var thumbWidthHeight = 63;
        if (jQuery(window).width() < 992) {
            galleryMinHeight = 299;
            thumbWidthHeight = 59;
        }
        if (jQuery(window).width() < 576) {
            galleryMinHeight = 212;
            thumbWidthHeight = 60;
        }

        var api = jQuery('.product-gallery').unitegallery({
            theme_enable_hidepanel_button: false,
            theme_hide_panel_under_width: null,
            gallery_min_width: 150,
            gallery_min_height: galleryMinHeight,
            gallery_background_color: "#ffffff",
            gallery_control_keyboard: false,
            gallery_theme: "compact",
            slider_scale_mode: "fill",
            slider_control_zoom: false,
            slider_transition: "fade",
            theme_panel_position: "bottom",
            thumb_width: thumbWidthHeight,
            thumb_height: thumbWidthHeight,
            thumb_border_width: 1,						//thumb border width
            thumb_border_color: "#E8E8E8",				//thumb border color
            thumb_over_border_width: 1,					//thumb border width in mouseover state
            thumb_over_border_color: "#2FB2CA",			//thumb border color in mouseover state
            thumb_selected_border_width: 1,				//thumb width in selected state
            thumb_selected_border_color: "#2FB2CA",		//thumb border color in selected state
            thumb_color_overlay_effect: true,
            thumb_overlay_color: "#ffffff",
            thumb_overlay_opacity: 0.8,
            thumb_overlay_reverse: true,
            theme_enable_text_panel: false,
            strippanel_background_color: "#ffffff",
            strip_space_between_thumbs: 5,
            slider_enable_arrows: true,
            slider_arrows_skin: "dr-default-skin",						//skin of the slider arrows, if empty inherit from gallery skin
            slider_arrow_left_align_hor:"left",	  		//left, center, right - left arrow horizonal align
            slider_arrow_left_align_vert:"middle", 		//top, middle, bottom - left arrow vertical align
            slider_arrow_left_offset_hor: 0,		  	//left arrow horizontal offset
            slider_arrow_left_offset_vert:0,		  	//left arrow vertical offset
            slider_arrow_right_align_hor:"right",   	//left, center, right - right arrow horizontal algin
            slider_arrow_right_align_vert:"middle", 	//top, middle, bottom - right arrow vertical align
            slider_arrow_right_offset_hor: 0,	   		//right arrow horizontal offset
            slider_arrow_right_offset_vert:0,	   		//right arrow vertical offset
            slider_enable_fullscreen_button: false,
            slider_enable_progress_indicator: false,
            slider_enable_play_button: false,
            slider_enable_zoom_panel: false,
            slider_control_swipe: false,
            slider_enable_text_panel: false,
            strippanel_padding_top: 80,
            strippanel_padding_bottom: 0,
            strippanel_padding_left: 0,
            strippanel_padding_right: 0,
            strippanel_enable_buttons: false
        });
        jQuery('.product-gallery .ug-slide-wrapper').on('click',function (event) {
            var image = jQuery(this).find('.ug-item-wrapper').clone();
            jQuery.fancybox.open(image);
            jQuery('.fancybox-content img').css('left', 0);
            jQuery('.fancybox-content').css('height', jQuery('.fancybox-content img').css('height'));
            jQuery('.fancybox-content').css('width', jQuery('.fancybox-content img').css('width'));
            event.stopPropagation();
        });
    }

});
