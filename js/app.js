var optenerDatos = function () {

    var nombre = document.getElementById("nombre").value;
    var apellido = document.getElementById("apellido").value;
    var correo = document.getElementById("correo").value;
    var contraseña = document.getElementById("contraseña").value;
    var latitud = document.getElementById("lat").value;
    var longitud = document.getElementById("lon").value;

    if (nombre == "") {
        document.getElementById("nombre").focus();
    } else {
        if (apellido == "") {
            document.getElementById("apellido").focus();
        } else {
            if (correo == "") {
                document.getElementById("correo").focus();
            } else {
                if (contraseña == "") {
                    document.getElementById("contraseña").focus();
                } else {
                    var user = new usuarios(nombre, apellido, correo, contraseña,latitud,longitud, "../PHP/insertar.php");
                    
                    user.addusuarios();
                    document.getElementById("nombre").value = "";
                    document.getElementById("apellido").value = "";
                    document.getElementById("correo").value = "";
                    document.getElementById("contraseña").value = "";
                    document.getElementById("latitud").value = "";
                    document.getElementById("longitud").value = "";
                }
            }
        }
    }
}