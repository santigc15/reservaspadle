window.onload=()=>{
    

   let fecha=document.getElementById("fecha");
    fecha.onchange=()=>{
        
        let fechaSeleccionada=fecha.value;
        let pista=document.getElementById("idpista").value;
        let url="ajax.php?fecha="+fechaSeleccionada+"&pista="+pista;
        
        fetch(url)
        .then(data=>data.text())
        .then(datos => {
          
          
          function micallback(datos) {
            var opciones = datos.slice(1, -1)
            var opciones = opciones.split(",");
            var select = document.getElementById("turno");
            select.innerHTML = "";
            for (var i = 0; i < opciones.length; i++) {
              var opcion = document.createElement("option");
              opcion.value = i;
              opcion.text = opciones[i].trim();
              select.add(opcion);
            }
          }

        micallback(datos);






        })
        .catch(err => console.log(err));
    }
}