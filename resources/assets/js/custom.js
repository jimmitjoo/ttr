$(document).scroll(function() {
    var y = $(this).scrollTop();
    if (y > 750) {
        $('.topnav').fadeIn();
    } else {
        $('.topnav').fadeOut();
    }
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
