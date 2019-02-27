function add_cita()                                    
{                
    var date = document.forms["form-patient"]["fecha"];  
    var id_doctor = document.forms["form-patient"]["id_doctor"]; 
    var motivo =document.forms["form-patient"]["motivo"]
   
    if (date.value == "")                                  
    { 
        window.alert("Por favor la fecha de la cita"); 
        date.focus(); 
        return false; 
    } 
    if (id_doctor.value == "")                                  
    { 
        window.alert("Por favor escoja un doctor"); 
        id_doctor.focus(); 
        return false; 
    } 
    if (motivo.value == "")                                  
    { 
        window.alert("Por favor escoja su motivo de cita"); 
        motivo.focus(); 
        return false; 
    } 

return true; 
} 