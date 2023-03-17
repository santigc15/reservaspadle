window.onload=()=>{
    

   let fecha=document.getElementById("fecha");
    fecha.onchange=()=>{
        
        let fechaSeleccionada=fecha.value;
        let pista=document.getElementById("idpista").value;
        let url="ajax.php?fecha="+fechaSeleccionada+"&pista="+pista;
        
        fetch(url)
        .then(data=>data.json())
        .then(datos=>{
            turnos=datos;
            console.log(turnos)
            let options="<option>Turnos:</option>";
            let select=document.getElementById("turno");
            for (let index = 0; index < turnos.length; index++) {
                turnos[index];
                options+=`<option value=${turnos[index].id}>${turnos[index].horario}</option>`;
            }
            select.innerHTML=options;

        })
        .catch(err => console.log(err));
    }
}