function homePage() {
    window.location.href = 'home.html';
}

function index2() {
    window.location.href = 'index-2.html';
}

document.addEventListener('DOMContentLoaded', function() {

    setTimeout(function() {
        document.body.style.display = 'block';
    }, 2000); 
});



window.addEventListener('scroll', reveal);

function reveal() {
    var reveals = document.querySelectorAll('.reveal');

    for (var i = 0; i < reveals.length; i++) {
        var windowheight = window.innerHeight;
        var revealtop = reveals[i].getBoundingClientRect().top;
        var revealpoint = 150;
        
        if (revealtop < windowheight - revealpoint) {
            reveals[i].classList.add('active');
        } else {
            reveals[i].classList.remove('active');
        }
    }
}