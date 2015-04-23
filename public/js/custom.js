$(document).scroll(function() {
    var y = $(this).scrollTop();
    if (y > 600) {
        $('.topnav').fadeIn();
    } else {
        $('.topnav').fadeOut();
    }
});