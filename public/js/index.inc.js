$(document).ready(function() {
    bodySlides();
});




function bodySlides() {
    setInterval(function() {
        // find active photo
        var activePhoto = $('#data_div').find('input.slideshow.active');
        
        // if no active photo, get the last photo
        if (activePhoto.length == 0) {
            activePhoto = $('#data_div').find('input.slideshow:last');
        }
        
        // find next photo
        var nextPhoto = activePhoto.next('input.slideshow').length ? 
                activePhoto.next('input.slideshow') : $('#data_div').find('input.slideshow:first');
                
        $('body').css('background-image', "url(" + nextPhoto.val() + ")");
        activePhoto.removeClass('active');
        nextPhoto.addClass('active');
        
        
        // change project name font size for fun
        if ($('#project_name').hasClass('big')) {
            $('#project_name').animate({'font-size': '32px'}, 1000).removeClass('big');
        } else {
            $('#project_name').animate({'font-size': '70px'}, 1000).addClass('big');
        }
        
    }, 3000);
}

/*
function slides() {
    $('#slides').slides({
        preload: true,
        preloadImage: 'images/slides/loading.gif',
        play: 5000,
        pause: 2500,
        hoverPause: true,
        effect: 'fade',
        crossfade: true,
        animationStart: function(current){
            $('.caption').animate({
                bottom:-35
            },100);
            if (window.console && console.log) {
                // example return of current slide number
                console.log('animationStart on slide: ', current);
            };
        },
        animationComplete: function(current){
            $('.caption').animate({
                bottom:0
            },200);
            if (window.console && console.log) {
                // example return of current slide number
                console.log('animationComplete on slide: ', current);
            };
        },
        slidesLoaded: function() {
            $('.caption').animate({
                bottom:0
            },200);
        }
    })
}
*/