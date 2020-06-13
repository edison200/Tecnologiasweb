function usuarios(nombre, apellido, correo, contraseña,latitud,longitud, action) {

    this.correo = correo;
    this.contraseña = contraseña;
    this.nombre = nombre;
    this.apellido = apellido;
    this.action = action;
    this.latitud=latitud;
    this.longitud=longitud;

}

usuarios.prototype.addusuarios = function () {
    console.log(this.nombre + " " + this.apellido + " " + this.correo + " " + this.contraseña+ " "+this.latitud+ " "+this.longitud);
    $.ajax({
        type: "POST",
        url: this.action,
        data: {
            nombre: this.nombre,
            apellido: this.apellido,
            correo: this.correo,
            contraseña: this.contraseña,
            latitud:this.longitud,
            longitud:this.longitud
        },
        success: function (respuesta) {
            if (respuesta == 1) {
                alert("Usuario Registrado");
            }
        }
    });
}