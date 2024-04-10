function homePage() {
    window.location.href = 'home.html';
}

function index2() {
    window.location.href = 'index-2.html';
}

function barasoainPage() {
    window.location.href = 'barasoain.html';
}

function virtualTourPage() {
    window.location.href = 'virtual-tour.html';
}

function virtualLink() {
    window.location.href = 'https://www.youtube.com/watch?v=Eol_Y2iCXNs';
}

function arrangeVisit() {
    window.location.href = 'https://nhcp.gov.ph/museums/';
}

function feedback() {
    window.location.href = 'feedback.html';
}

function showVideo() {
    var imageButton = document.getElementById("image-button");
    var video = document.getElementById("video");
    imageButton.style.display = "none";
    video.classList.remove("d-none");
}

function teamPage() {
    window.location.href = 'team.html';
}

function viewAbout(frontId, backId) {
    var front = document.getElementById(frontId);
    var back = document.getElementById(backId);
    front.style.display = "none";
    back.style.display = "block";
}

function backAbout(frontId, backId) {
    var front = document.getElementById(frontId);
    var back = document.getElementById(backId);
    back.style.display = "none";
    front.style.display = "block";
}

function showPicture(imageSrc) {
    var modalImage = document.getElementById('highlightedImage');
    modalImage.src = imageSrc;
    $('#modalPicture').modal('show');
}

function quizModal() {
    $('#modalQuiz').modal('show');
}

function quizGame() {
    window.location.href = 'quiz.html';
}

document.addEventListener("DOMContentLoaded", function() {
    var images = document.querySelectorAll('.team-img');
    images.forEach(function(image) {
        var originalSrc = image.getAttribute('data-original-src');
        var hoverSrc = image.getAttribute('data-hover-src');
        image.addEventListener('mouseenter', function() {
            image.src = hoverSrc;
        });
        image.addEventListener('mouseleave', function() {
            image.src = originalSrc;
        });
    });
});

document.addEventListener("DOMContentLoaded", function() {
    const images = document.querySelectorAll(".hover-fx");
    
    images.forEach(image => {
        image.addEventListener("click", function() {
            const sectionId = this.id.replace("image", "section");
            const section = document.getElementById(sectionId);
            if (section) {
                smoothScrollTo(section);
            }
        });
    });
    
    function smoothScrollTo(element) {
        window.scrollTo({
            behavior: 'smooth',
            top: element.offsetTop
        });
    }
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
