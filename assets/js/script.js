// Aside Icons Toggle Funtion
$(document).ready(function () {
  $(".asidebtn").on("click", function () {
    $(this).find(".toggle-icon").toggleClass("fa-angle-right fa-angle-down");
  });
});

lozad(".lazy", {
  load: function (ele) {
    ele.src = ele.dataset.src;
    ele.onload = function () {
      //  ele.classList.add('fade');   // Add 'fade' class after the image is loaded
    };
  },
}).observe();

document.addEventListener("DOMContentLoaded", () => {
  const videos = document.querySelectorAll("video[data-src]");
  const observer = new IntersectionObserver((entries, obs) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        const video = entry.target;
        video.src = video.dataset.src;
        video.load(); // starts downloading the video
        obs.unobserve(video);
      }
    });
  });

  videos.forEach((video) => observer.observe(video));
});

// Tooltip
const tooltipTriggerList = document.querySelectorAll(
  '[data-bs-toggle="tooltip"]'
);
const tooltipList = [...tooltipTriggerList].map(
  (tooltipTriggerEl) => new bootstrap.Tooltip(tooltipTriggerEl)
);
