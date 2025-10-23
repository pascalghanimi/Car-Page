const image = document.getElementById("image");
const heading = document.getElementById("heading");
const info = document.getElementById("info");

const params = new URLSearchParams(window.location.search);
const id = params.get("id");


const items = [
  {
    heading: "Alpha A3",
    image: "images/car13.png",
    info: "The Alpha A3 combines efficiency with urban dynamics. Perfect for everyday life: compact, fully electric, and with sporty acceleration for city driving."
  },
  {
    heading: "Alpha A4",
    image: "images/car14.png",
    info: "The Alpha A4 offers more space and comfort – ideal for long distances. Equipped with extended range and intelligent driver assistance systems."
  },
  {
    heading: "Alpha A4X",
    image: "images/car15.png",
    info: "The Alpha A4X represents power and control. Dual-motor all-wheel drive and a design that perfectly blends elegance with strength."
  },
  {
    heading: "Alpha A5 GT",
    image: "images/car16.png",
    info: "The A5 GT is built for performance enthusiasts. Rapid acceleration, aerodynamic lines, and an interior inspired by pure sports car design."
  },
  {
    heading: "Alpha A6 Performance",
    image: "images/car17.png",
    info: "The flagship model: ultimate performance, maximum efficiency, and luxurious driving comfort. Designed for those who accept no compromises."
  }
];


image.src = items[id].image;
heading.textContent = items[id].heading;
info.textContent = items[id].info;