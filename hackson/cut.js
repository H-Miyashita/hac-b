let i = 0;
function autoclick() {
  setInterval(drawVideo, 16);
}

let drawVideo = function () {
  var elem = document.getElementById("player");
  var video = elem.contentWindow;
  // document.querySelector(".html5-video-player")
  console.log(video);
  var canvas = document.getElementById("c");
  canvas.getContext("2d").drawImage(video, 0, 0, 480, 270);
};
