function add_doctors()                                    
{                
    var date = document.forms["form-patient"]["fecha"];  
    var id_doctor = document.forms["form-patient"]["id_doctor"]; 
    var motivo =document.forms["form-patient"]["motivo"]
   
    if (date.value == "")                                  
    { 
        window.alert("Por favor la fecha de la cita"); 
        name.focus(); 
        return false; 
    } 
    if (id_doctor.value == "")                                  
    { 
        window.alert("Por favor escoja un doctor"); 
        email.focus(); 
        return false; 
    } 
    if (motivo.value == "")                                  
    { 
        window.alert("Por favor escoja su motivo de cita"); 
        password.focus(); 
        return false; 
    } 

return true; 
} 