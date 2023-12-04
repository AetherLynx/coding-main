// ZOOM CONTAINER CODE

const zoomin = document.getElementById("zoomin");
const zoomout = document.getElementById("zoomout");
const zoomvalue = document.getElementById("zoomvalue");
const zoomreset = document.getElementById("reset");

let curzoom = parseFloat(localStorage.getItem("curzoom")) || 0.95;
let curzoomr = Math.round(curzoom * 100) / 100;

document.body.style.zoom = curzoom;
zoomvalue.innerHTML = curzoomr;
updateZoomValue();

zoomin.addEventListener("click", () => {
    curzoom += 0.05;
    updateZoom();
});

zoomout.addEventListener("click", () => {
    curzoom -= 0.05;
    updateZoom();
});

zoomreset.addEventListener("click", () => {
    curzoom = 0.95;
    updateZoom();
});

function updateZoom() {
    curzoom = Math.max(0.5, Math.min(1.5, curzoom));
    document.body.style.zoom = curzoom;
    curzoomr = Math.round(curzoom * 100) / 100;
    localStorage.setItem("curzoom", curzoom);
    updateZoomValue();
}

function updateZoomValue() {
    if (curzoomr.toString().length === 3) {
        zoomvalue.innerHTML = `${curzoomr}0`;
    } else if (curzoomr.toString().length === 1) {
        zoomvalue.innerHTML = `${curzoomr}.00`;
    } else {
        zoomvalue.innerHTML = curzoomr;
    }
}



// RESPONSIVE ICONS CODE
var icon = document.getElementById('restart-icon');
const restartext = document.getElementById('restart-text');

document.getElementById('restart').addEventListener("click", () => {
    icon.setAttribute('class', 'fa-solid fa-arrows-rotate fa-spin fa-lg');
    restartext.innerHTML = "Reiniciando..."
})


//FOXY

const audio = document.getElementById('screamer-audio');
const img = document.getElementById('screamer-img')

setTimeout(() => {
    audio.play()
    img.style.display = 'block'
}, 5000)

audio.addEventListener('ended', () => {
    img.style.display = 'none'
})
