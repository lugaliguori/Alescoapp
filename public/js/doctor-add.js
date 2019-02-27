function add_doctors()                                    
{ 
    var name = document.forms["form-patient"]["nombre"];
    var lastname = document.forms["form-patient"]["apellido"];                       
    var email = document.forms["form-patient"]["correo"];  
    var password = document.forms["form-patient"]["password"];  
    var especialidad = document.forms["form-patient"]["especialidad"]; 
    var hora = document.forms["form-patient"]["horario"];
    var pacientes = document.forms["form-patient"]["pacientes_dia"];
       
    if (name.value == "")                                  
    { 
        window.alert("Por favor inserte su nombre"); 
        name.focus(); 
        return false; 
    } 
     if (lastname.value == "")                                  
    { 
        window.alert("Por favor inserte su apellido"); 
        lastname.focus(); 
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
        especialidad.focus(); 
        return false; 
    }
    if (hora.value == "")
    {
        window.alert("Por favor inserta la hora en la que empezara a atender");
        hora.focus();
        return false;
    } 
    if (pacientes.value == "")
    {
        window.alert("Por favor inserta la cantidad de pacientes que espera atender diario");
        pacientes.focus();
        return false;
    } 
return true; 
} 