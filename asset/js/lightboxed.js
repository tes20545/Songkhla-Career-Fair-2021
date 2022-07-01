window.onload = (function() {
  let mainSlides = document.querySelectorAll(".main-slides > .gallery-slide");
  let thumbnailSlidesParent = document.querySelector(".thumbnail-slides");
  let mainSlidesCount = mainSlides.length;
  let actionButtons = document.querySelectorAll(
    ".main-slides > .slider-controller-button"
  );
  let slidesCount = document.querySelector(".all-slides-count");
  let slideCountCurr = document.querySelector(".curr-slide-count");
  let previousSlideButton = document.querySelector(".previous-slide-button");
  let nextSlideButton = document.querySelector(".next-slide-button");

  // ### Initializing the slider ###
  (function() {
    if (mainSlidesCount >= 2) {
      slideCountCurr.innerText = 1;
      slidesCount.innerText = mainSlidesCount;
      initializeThumbnailSlides();
      actionButtons.forEach(function(currButton) {
        currButton.style.display = "block";
      });
    }
  })();

  // Creates and attaches bottom thumbnail images for main slides
  function initializeThumbnailSlides() {
    for (let i = 0; i < mainSlidesCount; i++) {
      var createImage = document.createElement("img");
      createImage.src = mainSlides[i].src;
      createImage.classList = mainSlides[i].classList;
      createImage.classList.remove("gallery-slide");
      createImage.classList += " gallery-slide-thumbnail";
      createImage.width = 96;
      createImage.height = 90;
      thumbnailSlidesParent.appendChild(createImage);
    }
  }
  // ### THE END OF ### Initializing the slider

  // Determining current displaying image position in `mainSlides` array
  function currSliderImagePos() {
    for (let i = 0; i < mainSlides.length; i++) {
      if (
        window.getComputedStyle(mainSlides[i]).display !== "none" &&
        typeof mainSlides[i] !== "undefined"
      ) {
        return i;
      }
    }
    return false;
  }

  // Determining previous displaying image position in `mainSlides` array
  function prevSliderImagePos(pos) {
    if (pos >= 0 && typeof mainSlides[pos - 1] !== "undefined") {
      return pos - 1;
    }
    return false;
  }

  // Determining next displaying image position in `mainSlides` array
  function nextSliderImagePos(pos) {
    if (pos >= 0 && typeof mainSlides[pos + 1] !== "undefined") {
      return pos + 1;
    }
    return false;
  }

  function hideSlide(currSlide, duration) {
    thumbnailSlides[currSlide].style.border = "none";
    // mainSlides[currSlide].style.opacity = 0;
    mainSlides[currSlide].style.display = "none";
    setTimeout(function() {}, duration);
  }

  function showSlide(nextSlide, duration) {
    thumbnailSlides[nextSlide].style.border = "2px solid #00c6dc";
    // mainSlides[nextSlide].style.opacity = 1;
    mainSlides[nextSlide].style.display = "block";
    setTimeout(function() {}, duration);
  }

  let thumbnailSlides = document.querySelectorAll(
    ".thumbnail-slides > .gallery-slide-thumbnail"
  );
  thumbnailSlides[currSliderImagePos()].style.border = "2px solid #00c6dc";

  nextSlideButton.addEventListener("click", function() {
    let currentSliderImage = currSliderImagePos();
    let nextSliderImage = nextSliderImagePos(currentSliderImage);
    let imageTransitionDuration =
      window
        .getComputedStyle(mainSlides[currentSliderImage])
        .transitionDuration.replace("s", "") * 1000;

    if (currentSliderImage !== false && nextSliderImage !== false) {
      hideSlide(currentSliderImage, imageTransitionDuration);
    }

    if (nextSliderImage !== false) {
      slideCountCurr.innerText = nextSliderImage <= mainSlides.length
        ? nextSliderImage + 1
        : mainSlides.length;
      showSlide(nextSliderImage, imageTransitionDuration);
    }
  });

  previousSlideButton.addEventListener("click", function() {
    let currentSliderImage = currSliderImagePos();
    let prevSliderImage = prevSliderImagePos(currentSliderImage);
    let imageTransitionDuration =
      window
        .getComputedStyle(mainSlides[currentSliderImage])
        .transitionDuration.replace("s", "") * 1000;

    if (currentSliderImage !== false && prevSliderImage !== false) {
      hideSlide(currentSliderImage, imageTransitionDuration);
    }

    if (prevSliderImage !== false) {
      slideCountCurr.innerText = prevSliderImage <= mainSlides.length
        ? currentSliderImage
        : mainSlides.length;
      showSlide(prevSliderImage, imageTransitionDuration);
    }
  });

  let changeSlide = document.querySelector(".thumbnail-slides");

  changeSlide.addEventListener("click", function(e) {
    if (e.target.tagName === "IMG") {
      let clickedImagePos = Array.prototype.indexOf.call(
        e.currentTarget.children,
        e.target
      );
      let currentSliderImage = currSliderImagePos();
      let imageTransitionDuration =
        window
          .getComputedStyle(mainSlides[0])
          .transitionDuration.replace("s", "") * 1000;

      if (currentSliderImage !== false) {
        hideSlide(currentSliderImage, imageTransitionDuration);
      }

      if (clickedImagePos >= 0) {
        slideCountCurr.innerText = currentSliderImage <= mainSlides.length
          ? clickedImagePos + 1
          : mainSlides.length;
        showSlide(clickedImagePos, imageTransitionDuration);
      }
    }
  });
})();
