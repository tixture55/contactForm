$(function(){
    var header = ('header');
    var headerheight = $(header).outerHeight();
    var heightFunc = function () {
        var mainheight = $('main').css('padding-top', headerheight);
    }
    heightFunc();

    $('a[href^="#"]').on('click', function () {
        var Href;
        var position ;
        Href = $(this).attr("href");
        position = $(Href).offset().top;
        $('body,html').animate({
            scrollTop: position - headerheight
        }, 800, 'swing');
        return false;
    });

 var currentFunc = function () {
        var sectionTop = new Array;
        var nowScroll;
        $('section').each(function (i) {
            sectionTop[i] = $(this).offset().top;
            sectionTop[i] = sectionTop[i] - headerheight;
        });
        $(window).scroll(function () {
            nowScroll = $(window).scrollTop();
            if (sectionTop[0] <= nowScroll && sectionTop[1] > nowScroll) {
                $('header nav ul li').eq(0).addClass('current');
            } else {
                $('header nav ul li').eq(0).removeClass('current');
            }
            if (sectionTop[2] <= nowScroll && sectionTop[3] > nowScroll) {
                $('header nav ul li').eq(2).addClass('current');
            } else {
                $('header nav ul li').eq(2).removeClass('current');
            }
            if (sectionTop[3] <= nowScroll && sectionTop[4] > nowScroll) {
                $('header nav ul li').eq(3).addClass('current');

  } else {
                $('header nav ul li').eq(3).removeClass('current');
            }
            if (sectionTop[4] <= nowScroll && sectionTop[5] > nowScroll) {
                $('header nav ul li').eq(4).addClass('current');
            } else {
                $('header nav ul li').eq(4).removeClass('current');
            }
            if (sectionTop[8] <= nowScroll && sectionTop[9] > nowScroll) {
                $('header nav ul li').eq(5).addClass('current');
            } else {
                $('header nav ul li').eq(5).removeClass('current');
            }
        });
    }
    currentFunc();
});
