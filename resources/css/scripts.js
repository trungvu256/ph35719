var album = [];
for (var i = 0; i < 3; i++) {
    album[i] = new Image();
    album[i].src = "layout/images/anh" + i + ".jpg";
}
var interval = setInterval(slideshow, 4000);
index = 0;

function slideshow() {
    index++;
    if (index > 3) {
        index = 0;
    }
    document.getElementById("banner").src = album[index].src;
}

function next() {
    index++;
    if (index > 3) {
        index = 0;
    }
    document.getElementById("banner").src = album[index].src;
}

function pre() {
    index--;
    if (index < 0) {
        index = 3;
    }
    document.getElementById("banner").src = album[index].src;
}

document.querySelector(".menu-icon").addEventListener("click", function () {
    document.querySelector(".menu").classList.toggle("show");
});
