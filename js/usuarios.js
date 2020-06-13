function usuarios(nombre, apellido, correo, contraseña, action) {

    this.correo = correo;
    this.contraseña = contraseña;
    this.nombre = nombre;
    this.apellido = apellido;
    this.action = action;
}

usuarios.prototype.addusuarios = function () {
    console.log(this.nombre + " " + this.apellido + " " + this.correo + " " + this.contraseña);
    $.ajax({
        type: "POST",
        url: this.action,
        data: {
            nombre: this.nombre,
            apellido: this.apellido,
            correo: this.correo,
            contraseña: this.contraseña
        },
        success: function (respuesta) {
            if (respuesta == 1) {
                alert("Usuario Registrado");
            }
        }
    });0
}