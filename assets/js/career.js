document.addEventListener('DOMContentLoaded', () => {
    const faqItems = document.querySelectorAll('.careerSec__faqItem');

    faqItems.forEach(item => {
        const question = item.querySelector('.careerSec__faqQstn');
        const answer = item.querySelector('.careerSec__faqAns');

        question.addEventListener('click', () => {
            const isOpen = question.classList.contains('active');
            if (!isOpen) {
                question.classList.add('active');
                answer.classList.add('active');
            } else {
                question.classList.remove('active');
                answer.classList.remove('active');
                answer.style.maxHeight = null;
            }
        });
    });
});

document.addEventListener("DOMContentLoaded", function () {
    const playButton = document.querySelector(".careerSec__vidPlayBtn");
    const overlay = document.querySelector(".careerSec__vidOverlay");
    const iframe = document.querySelector("iframe");
    const player = new Vimeo.Player(iframe);

    function hidePlayButtonAndOverlay() {
        playButton.style.transition = "opacity 0.3s ease";
        overlay.style.transition = "opacity 0.3s ease";

        playButton.style.opacity = "0";
        overlay.style.opacity = "0";

        setTimeout(() => {
            playButton.style.visibility = "hidden";
            overlay.style.visibility = "hidden";
        }, 300);
    }

    function showPlayButtonAndOverlay() {
        playButton.style.visibility = "visible";
        overlay.style.visibility = "visible";

        playButton.style.transition = "opacity 0.3s ease";
        overlay.style.transition = "opacity 0.3s ease";

        playButton.style.opacity = "1";
        overlay.style.opacity = "1";
    }

    playButton.addEventListener("click", () => {
        hidePlayButtonAndOverlay();
        player.play();
    });

    player.on("play", () => {
        hidePlayButtonAndOverlay();
    });

    player.on("pause", () => {
        showPlayButtonAndOverlay();
    });
});