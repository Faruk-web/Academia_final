// JavaScript
document.addEventListener("DOMContentLoaded", function () {
    const lazyImages = document.querySelectorAll(".lazy-load");

    const observer = new IntersectionObserver((entries, observer) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          const img = entry.target;
          img.src = img.dataset.src;
          img.classList.remove("lazy-load");
          observer.unobserve(img);
        }
      });
    });

    lazyImages.forEach((img) => {
      observer.observe(img);
    });
  });
// ================ backgrount=================
document.addEventListener("DOMContentLoaded", function () {
    const lazyBackgrounds = document.querySelectorAll(".lazy-background");

    lazyBackgrounds.forEach((element) => {
      const imageSrc = element.getAttribute("data-src");
      element.style.backgroundImage = `url(${imageSrc})`;
    });
  });

// iframe ======================
document.addEventListener("DOMContentLoaded", function () {
    const lazyIframes = document.querySelectorAll(".lazy-load");

    const observer = new IntersectionObserver((entries, observer) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          const iframe = entry.target;
          iframe.src = iframe.getAttribute("data-src");
          iframe.classList.remove("lazy-load");
          observer.unobserve(iframe);
        }
      });
    });

    lazyIframes.forEach((iframe) => {
      observer.observe(iframe);
    });
  });
