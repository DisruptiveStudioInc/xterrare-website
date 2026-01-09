let currentIndex = 0;
const slider = document.getElementById("slider-map");
const slides = document.querySelectorAll(".slide");

function showSlide(index) {
  const offset = -index * slides[0].offsetWidth;
  slider.style.transform = `translateX(${offset}px)`;
}

function prevSlide() {
  currentIndex = currentIndex > 0 ? currentIndex - 1 : slides.length - 1;
  showSlide(currentIndex);
}

function nextSlide() {
  currentIndex = currentIndex < slides.length - 1 ? currentIndex + 1 : 0;
  showSlide(currentIndex);
}
