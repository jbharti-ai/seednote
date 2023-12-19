function openGooglePage() {
  // Open Google page in a new tab or window
var formUrl = 'https://docs.google.com/forms/d/e/1FAIpQLScRq2XQ6A3YGMYtDyKO_sgOemi5xgX6xFk9cqZQKBg4TJ2bYQ/viewform?vc=0&c=0&w=1&flr=0';  // Your Google Form URL here
  window.open(formUrl, '_blank');
}


// Hero carousel indicators
let heroCarouselIndicators = document.querySelector("#hero-carousel-indicators");
let heroCarouselItems = document.querySelectorAll('#heroCarousel .carousel-item');

heroCarouselItems.forEach((item, index) => {
  heroCarouselIndicators.innerHTML += (index === 0)
    ? "<li data-bs-target='#heroCarousel' data-bs-slide-to='" + index + "' class='active'></li>"
    : "<li data-bs-target='#heroCarousel' data-bs-slide-to='" + index + "'></li>";
});
