function validacionForm() {

  var valor1 = document.getElementById('validado1').value;
  var valor2 = document.getElementById('validado2').value;
  var valor3 = document.getElementById('validado3').value;
  var valor4 = document.getElementById('validado4').value;

  if (valor1 == "" || valor2 == "" || valor3 == "" || valor4 == "") {
      document.getElementById('validado1').style.borderColor = "red";
      document.getElementById('validado2').style.borderColor = "red";
      document.getElementById('validado3').style.borderColor = "red";
      document.getElementById('validado4').style.borderColor = "red";
      document.getElementById("mensaje1").innerHTML = "¡No has rellenado algun campo!";
      document.getElementById("mensaje1").style.display='inline-block';

      var numero
      var letr
      var letra
      var expresion_regular_valor3
    
      expresion_regular_valor3 = /^\d{8}[a-zA-Z]$/;
    
      if(expresion_regular_valor3.test (valor3) == true){
        numero = valor3.substr(0,valor3.length-1);
        letr = valor3.substr(valor3.length-1,1);
        numero = numero % 23;
        letra='TRWAGMYFPDXBNJZSQVHLCKET';
        letra=letra.substring(numero,numero+1);
        if (letra!=letr.toUpperCase()) {
          //alert('Dni erroneo, la letra del NIF no se corresponde');
          return false;
        }else{
          //alert('Dni correcto');
          return false;
        }
      }else{
        //alert('Dni erroneo, formato no válido');
        return false;
      }
  }

  var numero
  var letr
  var letra
  var expresion_regular_valor3
  
  expresion_regular_valor3 = /^\d{8}[a-zA-Z]$/;
  
  if(expresion_regular_valor3.test (valor3) == true){
      numero = valor3.substr(0,valor3.length-1);
      letr = valor3.substr(valor3.length-1,1);
      numero = numero % 23;
      letra='TRWAGMYFPDXBNJZSQVHLCKET';
      letra=letra.substring(numero,numero+1);
    if (letra!=letr.toUpperCase()) {
        //alert('Dni erroneo, la letra del NIF no se corresponde');
        return false;
      }else{
        //alert('Dni correcto');
        return true;
      }
  }else{
      //alert('Dni erroneo, formato no válido');
      return false;
      
    }

}

function validaDNI(){
  var valor3 = document.getElementById('validado3').value;

  var numero
  var letr
  var letra
  var expresion_regular_valor3
  
  expresion_regular_valor3 = /^\d{8}[a-zA-Z]$/;
  
  if(expresion_regular_valor3.test (valor3) == true){
      numero = valor3.substr(0,valor3.length-1);
      letr = valor3.substr(valor3.length-1,1);
      numero = numero % 23;
      letra='TRWAGMYFPDXBNJZSQVHLCKET';
      letra=letra.substring(numero,numero+1);
    if (letra!=letr.toUpperCase()) {
        //alert('Dni erroneo, la letra del NIF no se corresponde');
        validado3.style.border = "solid red 5px";
      }else{
        //alert('Dni correcto');
        validado3.style.border = "solid green 5px";
      }
  }else{
      //alert('Dni erroneo, formato no válido');
      validado3.style.border = "solid red 5px";
    }
}

function validaCategoria(){
  var valor4 = document.getElementById('validado4').value;
  let hoy = new Date()
  let fechaNacimiento = new Date(valor4)
  let edad = hoy.getFullYear() - fechaNacimiento.getFullYear()
  let diferenciaMeses = hoy.getMonth() - fechaNacimiento.getMonth()
  if (
    diferenciaMeses < 0 ||
    (diferenciaMeses === 0 && hoy.getDate() < fechaNacimiento.getDate())
  ) {
    edad--
  }

  if (edad >= 7 && edad <= 12){
    document.getElementById("mensaje").innerHTML = "Te vas a inscribir en Alevin";
  }else if (edad > 12 && edad <=22){
    document.getElementById("mensaje").innerHTML = "Te vas a inscribir en Junior";
  }else if (edad > 22 && edad <=65){
    document.getElementById("mensaje").innerHTML = "Te vas a inscribir en Senior";
  }else{
    document.getElementById("mensaje").innerHTML = "No vas a ser inscrito a ninguna categoria";
  }
  document.getElementById("mensaje").style.display='inline-block';

}

