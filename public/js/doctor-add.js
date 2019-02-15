function add_doctors()                                    
{ 
    var name = document.forms["form-patient"]["nombre"];                 
    var email = document.forms["form-patient"]["correo"];  
    var password = document.forms["form-patient"]["password"];  
    var especialidad = document.forms["form-patient"]["especialidad"]; 
   
    if (name.value == "")                                  
    { 
        window.alert("Por favor inserte su nombre"); 
        name.focus(); 
        return false; 
    } 
    if (email.value == "")                                  
    { 
        window.alert("Por favor inserte su correo electronico"); 
        email.focus(); 
        return false; 
    } 
    if (password.value == "")                                  
    { 
        window.alert("Por favor inserte su contraseña"); 
        password.focus(); 
        return false; 
    } 
    if (especialidad.value == "")                                  
    { 
        window.alert("Por escoja su especialidad como medico"); 
        state.focus(); 
        return false; 
    } 
return true; 
} 