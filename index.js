const right = document.getElementById("right");
const left = document.getElementById("left");
const topImage = document.getElementById("top-img");
const bottomImage = document.getElementById("bottom-img");
const carouselItems = document.querySelectorAll("[data-item]");
const carouselButtons = document.querySelectorAll("[data-carousel-btn]")


carouselButtons.forEach(btn => {
    btn.addEventListener("click", () => {
        carouselButtons.forEach(b => b.classList.remove("active"));

        btn.classList.add("active");
        carouselItems.forEach(item => {
            if (btn.dataset.carouselBtn === item.dataset.item) {
                item.scrollIntoView({
                    behavior: "smooth",
                    inline: "center",
                    block: "nearest"
                });
            }
        })
    })
})



let index = 0;

const images = [
    "images/car1.jpg",
    "images/car2.jpg",
    "images/car3.jpg",
    "images/car4.jpg",
    "images/car5.jpg",
    "images/car6.jpg",
]


let front = topImage;
let back = bottomImage;

right.addEventListener("click", () => {
  right.disabled = true;
  let next = (index + 1) % images.length;

  back.src = images[next];

  front.classList.remove("active");
  back.classList.add("active");

  back.addEventListener("transitionend", () => {
    [front, back] = [back, front];
    index = next;
    right.disabled = false;
  }, {once: true});  
});

left.addEventListener("click", () => {
    left.disabled = true;
    let next = (index - 1 + images.length) % images.length;

    back.src = images[next];
    front.classList.remove("active");
    back.classList.add("active");

    back.addEventListener("transitionend", () => {
        [front, back] = [back, front];
        index = next;
        left.disabled = false;
    }, {once: true});
})

