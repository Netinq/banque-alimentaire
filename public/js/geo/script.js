// import { geojson } from './locations.js'

mapboxgl.accessToken = "pk.eyJ1IjoibmV0aW5xIiwiYSI6ImNra2N0azJvajBpOWoycHFydWRkcWo5MXMifQ.iCXY_CWx5r8KEOHHCGu3iw";

const map = new mapboxgl.Map({
    container: "map",
    style: "mapbox://styles/netinq/ckkfj803901yr17p70dmlf1h4",
    center: [-0.57918, 44.837789],
    zoom: 12,
});

geojson.features.forEach(function (marker) {
    let el = document.createElement("div");
    el.className = "marker";
    el.style.width = marker.properties.iconSize[0] + "px";
    el.style.height = marker.properties.iconSize[1] + "px";
    el.addEventListener("click", () => {
        Array.from(document.getElementsByClassName("marker")).forEach((elem) => elem.classList.remove('selected'));
        el.classList.add('selected');
        document.getElementById("part_title").innerText = marker.properties.name;
        document.getElementById("part_place").innerText = marker.properties.size;
        let action = document.getElementById("form").action;
        action = action.replace(-1, marker.properties.id);
        document.getElementById("form").action = action;
        document.getElementById("container").classList.remove("hide");
        document.getElementById("container").animate([
            { transform: "translateY(50px)", opacity: 0 },
            { transform: "translateY(0)", opacity: 1 },],
            { duration: 300, }
        );
    });
    new mapboxgl.Marker(el).setLngLat(marker.geometry.coordinates).addTo(map);
});

document.addEventListener("click", (event) => {
    if (event.target.classList.contains("mapboxgl-canvas"))
    {
        Array.from(document.getElementsByClassName("marker")).forEach((elem) => elem.classList.remove("selected"));
        document.getElementById("container").classList.add("hide");
    }
})
