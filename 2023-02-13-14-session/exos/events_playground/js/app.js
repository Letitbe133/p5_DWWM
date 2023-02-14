const color = document.querySelector("#color");
const display = document.querySelector(".color-display");

const colorValues = {};

color.addEventListener("input", (e) => {
  const { id, value } = e.target;
  if (e.target.matches("input[type=range]")) {
    colorValues[id] = value;
  }
  updateColor(display, colorValues);
});

const updateColor = (elem, objColor) => {
  const { hue, saturation, lightness } = objColor;
  const hsl = `hsl(${hue} ${saturation}% ${lightness}%)`;
  elem.style.background = hsl;
};
