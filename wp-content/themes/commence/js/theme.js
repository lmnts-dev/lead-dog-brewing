
document.addEventListener("DOMContentLoaded", function() { 
 
//FOR THE EYEBALL ANIMATION
	const container = document.querySelector(".home .age-gate__wrapper");
  container.addEventListener("mousemove", (e) => {
    const eyes = document.querySelectorAll(".home .age-gate__additional-information p img:nth-child(2)");
    [].forEach.call(eyes, function (eye) {
      window.addEventListener('mousemove', (evt) => {
        const x = -(window.innerWidth / 2 - evt.pageX) / 80;
        const y = -(window.innerHeight / 2 - evt.pageY) / 80;
        eye.style.transform = `translateY(${y}%) translateX(${x}%)`;

      });
    });
  });
});

  //Beer Dropdown
let beerLinks = document.querySelectorAll('.beer--mobile-link');
let linksArray = Array.from(beerLinks);
let beerDetails = document.querySelector('beer-details');
console.log(beerDetails, 'deets');

linksArray.map((link) => {
  console.log(link, 'link here');
  link.addEventListener("click", () => { console.log(link, 'link here'); });
  })


