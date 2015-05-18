/*
 * Fade in topnav when scrolling
 *
 */
$(document).scroll(function() {
    var y = $(this).scrollTop();
    if (y > 750) {
        $('.topnav').fadeIn();
    } else {
        $('.topnav').fadeOut();
    }
});

if (window.location.hash && window.location.hash == '#_=_') {
    if (window.history && history.pushState) {
        window.history.pushState("", document.title, window.location.pathname);
    } else {
        // Prevent scrolling by storing the page's current scroll offset
        var scroll = {
            top: document.body.scrollTop,
            left: document.body.scrollLeft
        };
        window.location.hash = '';
        // Restore the scroll offset, should be flicker free
        document.body.scrollTop = scroll.top;
        document.body.scrollLeft = scroll.left;
    }
}

/*
 * Show hide user menu on click
 *
 */
 $(".user").click(function() {
	$(".user-menu").toggle();
	});	
 });
 
 
 
/*
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
*/


var registerEmailInput = document.getElementById('registerEmail');
var registerPasswordFieldBox = document.getElementById('registerPasswords');
var validateEmail = function(email) {
    var re = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
    return re.test(email);
}
var checkIfEmailIsValid = function() {
    if (!registerEmailInput) return;
    if (validateEmail(registerEmailInput.value)) registerPasswordFieldBox.classList.remove('hidden');
}
if (registerEmailInput) registerEmailInput.addEventListener('keyup', checkIfEmailIsValid);
