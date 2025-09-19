// JavaScript para controlar o vídeo do YouTube
document.addEventListener("DOMContentLoaded", function () {
    const iframe = document.getElementById("video-frame");
    const videoSection = document.getElementById("video-section");

    // função para mandar "play" via API do YouTube
    function playVideo() {
        iframe.contentWindow.postMessage('{"event":"command","func":"playVideo","args":""}', '*');
    }
    function pauseVideo() {
        iframe.contentWindow.postMessage('{"event":"command","func":"pauseVideo","args":""}', '*');
    }

    // Detectar quando a seção está visível na tela
    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                playVideo();
            } else {
                pauseVideo();
            }
        });
    }, { threshold: 0.5 });

    observer.observe(videoSection);

    // Play/pause ao passar o mouse
    videoSection.addEventListener("mouseenter", playVideo);
    videoSection.addEventListener("mouseleave", pauseVideo);
});
