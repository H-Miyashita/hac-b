let i = 0;
function submitclick() {
    var elem = document.getElementById("player");
  console.log(elem);
  var video = elem.contentWindow.postMessage("ando","https://www.youtube.com/watch?v=zkNzxsaCunU");
  addEventListener('message', function(event) {
    console.log(event);
});
  console.log(video);

}

let drawVideo = function () {

  // 
  // document.querySelector(".html5-video-player")
  // console.log(video);
  // var canvas = document.getElementById("c");
  // canvas.getContext("2d").drawImage(video, 0, 0, 480, 270);
};
