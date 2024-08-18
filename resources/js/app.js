import './bootstrap';

function init(){
    changeColorHeader();
}

function changeColorHeader()
{
    var headerHeight = $('.header').height();
    var headerOrPosition = $('.header').offset().top;

    $(window).scroll(function(){
        var scroll = $(window).scrollTop();
        if(scroll > 100) {
            $('.header').addClass('active');
        }else{
            $('.header').removeClass('active');
        }
    });
}

document.addEventListener('DOMContentLoaded', init);
