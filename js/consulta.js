async function global(){
    var Vmedicamentos=[];
var cantidad=[];
var cant;
var result;
var produc;
var producto = function(id,nombre,cantidad,subtotal){
    var obj = {
        id :id,
        nombre: nombre,
        cantidad: cantidad,
        subtotal: subtotal
    }
    return obj;
}
    async function getData(url) {

        const response = await fetch(url);
        const data = await response.json();
        return data;
    }

    const consulta = await getData("../PHP/prueba.php");
    const consulta2 = await getData("../PHP/validar.php");
    var select = document.getElementById("Medica");
    document.getElementById("Nombre").innerText = consulta2.nombre;
    document.getElementById("Apellido").innerText = consulta2.apellido;
    document.getElementById("Latitud").innerText = consulta2.latitud;
    document.getElementById("Longitud").innerText = consulta2.longitud;
    for (var i = 0; i < consulta.length; i++) {
      var nuevo = document.createElement("option");
      nuevo.value = consulta[i].Nombre;
      nuevo.innerHTML = consulta[i].Nombre;
      select.options.add(nuevo);    
    }
    function obtenerPrecio(){
        var pro = document.getElementById("Medica").value;
       
        var canti = document.getElementById("canti").value;
        if(pro != ""){
        consulta.forEach((item) => {
            if(pro == item.Nombre){
                if(produc != ""){
               cant = item.Precio;
               result = canti * cant;
               produc = producto(item.id,item.Nombre,cant,result)
               Vmedicamentos.push(produc);
            }
            }

        });
        }
        var total=0;
    for (var i = 0; i < Vmedicamentos.length; i++) {
        total += Vmedicamentos[i].subtotal;
    }
    var prod = document.getElementById("prod");
    if(produc != ""){
        var fila="<tr><td>"+produc.id+"</td><td>"+produc.nombre+"</td><td>"+produc.cantidad+"</td><td>"+produc.subtotal+"</td></tr>";
        $('#prod').append(fila);
        document.getElementById("total").innerText = total;
        }
    }
    button = document.getElementById('comparar'); 
    if(button!= null){
    button.addEventListener('click', function() { 
        obtenerPrecio();
    }); 
    }
}
global();





