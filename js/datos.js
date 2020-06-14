async function global(){
    
    async function getData(url) {

        const response = await fetch(url);
        const data = await response.json();
        return data;
    }
    const consulta2 = await getData("../PHP/datos.php");
    var Id=consulta2[0].Id;
    $.ajax({
        type: "POST",
        url: "../PHP/usuario.php",
        data: {
           Id: this.Id
        }
    });
    const consulta3 = await getData("../PHP/usuario.php");
    document.getElementById("Nombre").innerText = consulta3.nombre;
    document.getElementById("Apellido").innerText = consulta3.apellido;
    document.getElementById("Latitud").innerText = consulta3.latitud;
    document.getElementById("Longitud").innerText = consulta3.longitud;
}
global();
