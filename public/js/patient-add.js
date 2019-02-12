function add_patients()                                    
{ 
    var name = document.forms["form-patient"]["name"];               
    var fecha = document.forms["form-patient"]["fecha_nac"];    
    var email = document.forms["form-patient"]["correo"];  
    var sex =  document.forms["form-patient"]["sexo"];  
    var password = document.forms["form-patient"]["password"];  
    var state = document.forms["form-patient"]["procedencia"];
     var phone = document.forms["form-patient"]["telefono"];    
   
    if (name.value == "")                                  
    { 
        window.alert("Por favor inserte su nombre"); 
        name.focus(); 
        return false; 
    } 
    if (fecha.value == "")                                  
    { 
        window.alert("Por favor inserte su fecha de nacimiento"); 
        fecha.focus(); 
        return false; 
    } 
    if (email.value == "")                                  
    { 
        window.alert("Por favor inserte su correo electronico"); 
        email.focus(); 
        return false; 
    } 
    if (sex.value == "")                                  
    { 
        window.alert("Por favor inserte su genero"); 
        sex.focus(); 
        return false; 
    } 
    if (password.value == "")                                  
    { 
        window.alert("Por favor inserte su password"); 
        password.focus(); 
        return false; 
    } 
    if (state.value == "")                                  
    { 
        window.alert("Por favor inserte el estado de donde proviene"); 
        state.focus(); 
        return false; 
    } 
    if (phone.value == "")                                  
    { 
        window.alert("Por favor inserte su telefono"); 
        phone.focus(); 
        return false; 
    } 
return true; 
} 