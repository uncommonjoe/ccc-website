var body = $('body');
var isMobile = false;

$(document).ready(function() {
    checkSize();
    mobileNavigation();
    pace();

    $(window).resize(checkSize);

    $('.side-nav-button').click(function() {
        navigation();
    });

    $('#overlay').click(function() {
        navigation();
    });
});

function checkSize() {
    if ($('.window-mobile').css('float') == 'none') {
        isMobile = true;
    } else {
        isMobile = false;
    }
}

function mobileNavigation() {
    /**** Show #top-fixed-nav after scrolling down a little bit ****/
    if (!isMobile) {
        $('#top-fixed-nav').hide();

        $(function() {
            $(window).scroll(function() {
                if ($(this).scrollTop() > 300) {
                    $('#top-fixed-nav').fadeIn();
                } else {
                    $('#top-fixed-nav').fadeOut();
                }
            });
        });
    }
}

function navigation() {
    body.toggleClass('nav-open');

    if (body.hasClass('nav-open')) {
        body.on('touchmove', function(e) {
            e.preventDefault();
        });

        body.css('overflow', 'hidden');
    } else {
        body.css('overflow', 'auto');
        body.unbind('touchmove');
    }
}

function pace() {
    paceOptions = {
        ajax: true,
        document: true,
        eventLag: false
    };

    Pace.on('done', function() {
        $('.animate-down, .animate-up').css('transform', 'scaleY(0)');

        setTimeout(function() {
            $('#preloader').css({
                'z-index': '0',
                'bottom': 'auto'
            });
            $('#preloader .row').css('height', '0');
        }, 900);
    });
}