/*$(document).scroll(function() {
    var y = $(this).scrollTop();
    if (y > 600) {
        $('.topnav').fadeIn();
    } else {
        $('.topnav').fadeOut();
    }
});*/

var scrollToTop;
var topNav = document.getElementsByClassName('topnav');
var topNavPosition = function () {
    scrollToTop = window.scrollY;

    if (scrollToTop > 600) {
        topNav[0].classList.remove('fadeOut');
        topNav[0].classList.add('fadeIn');

        return
    }
    topNav[0].classList.remove('fadeIn');
    topNav[0].classList.add('fadeOut');
}

window.onscroll = topNavPosition;