
document.addEventListener("DOMContentLoaded", function() { 
 
//FOR THE EYEBALL ANIMATION
	const container = document.querySelector(".home .age-gate__wrapper");
  container.addEventListener("mousemove", (e) => {
  const eyes = document.querySelectorAll(".home .age-gate__additional-information p img:nth-child(2)");
  [].forEach.call(eyes, function (eye) {
    let mouseX = eye.getBoundingClientRect().right;
    let mouseY = eye.getBoundingClientRect().top;
    let radianDegrees = Math.atan2(e.pageX - mouseX, e.pageY - mouseY);
    let rotationDegrees = radianDegrees * (180 / Math.PI) * -1 + 180;
    eye.style.transform = `rotate(${rotationDegrees}deg)`;
  });
});
});

