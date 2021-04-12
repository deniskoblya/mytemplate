var burgerCtr = document.querySelector("#burger-menu");
var menuCtr = document.querySelector("#mobile-menu");
burgerCtr.addEventListener("click", function () {
    this.classList.toggle("active");
    menuCtr.classList.toggle("show_mobile_menu");
});

jQuery(document).ready(function () {

    $(".phone").mask("+380 (99) 999-99-99");

    // FORMS 


    jQuery('.send-form').click(function () {
        var form = jQuery(this).closest('form');

        if (form.valid()) {
            form.css('opacity', '.5');
            var actUrl = form.attr('action');

            jQuery.ajax({
                url: actUrl,
                type: 'post',
                dataType: 'html',
                data: form.serialize(),
                success: function (data) {
                    form.html(data);
                    form.css('opacity', '1');
                    //form.find('.status').html('форма отправлена успешно');
                    //$('#myModal').modal('show') // для бутстрапа
                },
                error: function () {
                    form.find('.status').html('серверная ошибка');
                }
            });
        }
    });


    // скрипт табов //
    $('ul.tabs__caption').on('click', 'li:not(.active)', function () {
        $(this)
            .addClass('active').siblings().removeClass('active')
            .closest('div.tabs').find('div.tabs__content').removeClass('active').eq($(this).index()).addClass('active');
    });
    // скрипт табов //



    jQuery(".m1").click(function () {
        jQuery('html, body').animate({
            scrollTop: jQuery(".sec3").offset().top
        }, 400);
    });

    jQuery(".m11").click(function () {
        jQuery('html, body').animate({
            scrollTop: jQuery(".sec3").offset().top
        }, 400);

        jQuery('#burger-menu').click();
    });



    // Counter -----------------------
    var timeSpend = 86400000 * 50;

    if (jQuery.cookie('firstOpen') != undefined) {
        var interval = ((new Date()).getTime() - jQuery.cookie('firstOpen'));
        if (interval > timeSpend) {
            timeSpend = 0;
        } else {
            timeSpend -= interval;
        }
    } else {
        jQuery.cookie('firstOpen', (new Date()).getTime());
    }

    jQuery('.clock').countdown({
        until: timeSpend / 1000,
        format: 'DHMS'
    });

    /*
    //var now = new Date();
    //var tomorrow = new Date(now.getFullYear(), now.getMonth(), now.getDate()+1);
    
    var now = parseInt(nowDateTime);
    var end = parseInt(endDateTime);
    
    if ( now > end ) {
    	hideBlock();
    }

    var diff = end - now;
    var timeSpend = Math.round(diff);

    jQuery('.clock').countdown({until: timeSpend, format: 'DHM', onExpiry: hideBlock});
    */
});

/*
	900 		- 200
	screeHeight	- X
*/
var screeHeight = jQuery(window).height();
var offSet = 200;

if (screeHeight > 930) {
    offSet = 200;
} else {
    offSet = screeHeight * 200 / 900;
    offSet = offSet.toFixed();
}

wow = new WOW({
    animateClass: 'animated',
    offset: offSet,
    callback: function (box) {
        console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
    }
});

wow.init();



