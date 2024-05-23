const mapContainer = document.getElementById("map_container");
const zoomIn = document.getElementById('zoom_in');
const zoomOut = document.getElementById('zoom_out');

let zoom = 500;

mapContainer.style.width = `${zoom}px`;

zoomIn.onclick = () => {
    zoom += 100;
    mapContainer.style.width = `${zoom}px`;
}

zoomOut.onclick = () => {
    zoom -= 100;
    mapContainer.style.width = `${zoom}px`;
}
