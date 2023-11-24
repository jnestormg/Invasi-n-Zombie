const boton = document.getElementById("btn");
boton.addEventListener("click", () => {
    let gps = navigator.geolocation;
    gps.getCurrentPosition(success, error, options);
});

const options = {
    enableHighAccuracy: true,
    timeout: 5000,
    maximumAge: 0,
};
const success = (position) => {
    let crd = position.coords;
    console.log("latitud" + crd.latitude);
    console.log("longitud" + crd.longitude);
    console.log("mas o menos" + crd.accuracy);
    var a=crd.accuracy.toFixed(4);
    document.getElementById('lat').value = crd.latitude;
    document.getElementById('long').value = crd.longitude;
    document.getElementById('presc').value = a;

};
const error = (err) => {
    console.warn("Error(" + err.code + ")" + err.message);
};

function crear() {
    var articulo = document.createElement("input");
    articulo.id = "articulo";
    articulo.name = "articulo";
    articulo.class="form-control"

    document.body.appendChild(articulo);
}