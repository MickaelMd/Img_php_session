const canvas = document.getElementById("canvas_img");
const ctx = canvas.getContext("2d");

const image = new Image();
image.onload = function () {
  canvas.width = this.naturalWidth;
  canvas.height = this.naturalHeight;
  ctx.drawImage(image, 0, 0, canvas.width, canvas.height);
};

image.src = img;
console.log(img);
