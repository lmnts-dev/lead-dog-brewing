
document.addEventListener("DOMContentLoaded", function() { 
 
//FOR THE EYEBALL ANIMATION
  const container = document.querySelector(".age-gate__wrapper");
  console.log(container, 'container here');
  container.addEventListener("mousemove", (e) => {
    const eyes = document.querySelectorAll(".age-gate__additional-information p img:nth-child(2)");
    [].forEach.call(eyes, function (eye) {
      window.addEventListener('mousemove', (evt) => {
        const x = -(window.innerWidth / 2 - evt.pageX) / 100;
        const y = -(window.innerHeight / 2 - evt.pageY) / 40;
        eye.style.transform = `translateY(${y}%) translateX(${x}px)`;

      });
    });
  });
});

  //Beer Dropdown
let beerLinks = document.querySelectorAll('.eael-tab-item-trigger');
let linksArray = Array.from(beerLinks);

linksArray.map((link) => {
  link.addEventListener("click", () => { window.scrollTo(0, 0); });
  })


