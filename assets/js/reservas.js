window.onload=()=>{
    

   let fecha=document.getElementById("fecha");
    fecha.onchange=()=>{
        
        let fechaSeleccionada=fecha.value;
        let pista=document.getElementById("idpista").value;
        let url="ajax.php?fecha="+fechaSeleccionada+"&pista="+pista;
        var turnosDisponibles;
        fetch(url)
        .then(data=>data.text())
        .then(datos => {
          
          
          for (let i = 0; i < datos.length; i++) {
            
            const miSelect = document.getElementById('turno');
            
            const option = new Option(datos[i].text, datos[i].valueOf);
            
            
            miSelect.add(option);
          }
        






        })
        .catch(err => console.log(err));
    }
}