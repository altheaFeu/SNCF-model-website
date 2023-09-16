const buttons = document.querySelectorAll("[data-carousel-button]")

buttons.forEach(button => {
  // Add a sensor/button to the left and right carousel button
  button.addEventListener("click", () => {
    const offset = button.dataset.carouselButton === "next" ? 1 : -1
    const slides = button
      // Select the slide with a target data-slide closest to the data-carousel div
      .closest("[data-carousel]")
      .querySelector("[data-slides]")

    // Consider the selected slide as the new active slide (with target data-active)
    const activeSlide = slides.querySelector("[data-active]")
    let newIndex = [...slides.children].indexOf(activeSlide) + offset
    if (newIndex < 0) newIndex = slides.children.length - 1
    if (newIndex >= slides.children.length) newIndex = 0

    slides.children[newIndex].dataset.active = true
    delete activeSlide.dataset.active
  })
})