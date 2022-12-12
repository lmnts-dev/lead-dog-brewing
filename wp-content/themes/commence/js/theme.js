
document.addEventListener("DOMContentLoaded", function() { 
 
//FOR THE EYEBALL ANIMATION
	const container = document.querySelector(".home .age-gate__wrapper");
  container.addEventListener("mousemove", (e) => {
  const eyes = document.querySelectorAll(".home .age-gate__additional-information p img:nth-child(2)");
  [].forEach.call(eyes, function (eye) {
    window.addEventListener('mousemove', (evt) => {
      const x = -(window.innerWidth / 2 - evt.pageX) / 50;
      const y = -(window.innerHeight / 2 - evt.pageY) / 50;
      eye.style.transform = `translateY(${y}px) translateX(${x}px)`;

    });
  });
});
});

