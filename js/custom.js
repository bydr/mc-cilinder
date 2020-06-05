jQuery(document).ready(function () {

    $('.modal-configurator__btn-show').on('click', function () {
        showModal('.modal-configurator');
    });

    $('.dr-modal-close').on('click', function () {
        hideModal($(this));
    });

    let navItems = $('.dr-tabs-wrapper .nav-item');
    navItems.on('click', function () {
        if (!$(this).hasClass('active')) {
            navItems.removeClass('active');
            $(this).addClass('active');
        }

    });

    function showModal(el) {
            $(el).addClass('is-active');
            $('html').addClass('modal-is-active');
    }

    function hideModal(el) {
        el.closest('.dr-modal').removeClass('is-active');
        $('html').removeClass('modal-is-active');
    }


    let selectColor = $("select[id='id-color-cilinder']");
    function setColorCilinder(select) {
        select
            .closest('.table-cell__wrapper')
            .find(".color-cilinder")
            .removeClass()
            .addClass('color-cilinder')
            .toggleClass(`color-cilinder__${select.val()}`);
    }

    selectColor.each(function () {
        setColorCilinder($(this));
    });

    selectColor.on('change', function () {
        setColorCilinder($(this));
    });

});
