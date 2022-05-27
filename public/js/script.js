function saludoArchivo(){
    alert("Hola desde archivo")
}

function leer(){
    var nombre=document.getElementById('nombre').value;
    var mensaje=document.getElementById('mensaje');
    mensaje.innerHTML="El comentario con remitente "+nombre+" fue enviado";
    //alert(nombre);
}

function suma (){
    var a=document.getElementById('aNum').value;
    var b=document.getElementById('bNum').value;
    var resultado = parseInt(a)+parseInt(b);
    mensaje.innerHTML="El resultado de la suma es: "+resultado;
}

function resta (){
    var a=document.getElementById('aNum').value;
    var b=document.getElementById('bNum').value;
    var resultado = parseInt(a)-parseInt(b);
    mensaje.innerHTML="El resultado de la resta es: "+resultado;
}

function multiplicacion (){
    var a=document.getElementById('aNum').value;
    var b=document.getElementById('bNum').value;
    var resultado = parseInt(a)*parseInt(b);
    mensaje.innerHTML="El resultado de la multiplicacion es: "+resultado;
}

function division (){
    var a=document.getElementById('aNum').value;
    var b=document.getElementById('bNum').value;
    var resultado = parseInt(a)/parseInt(b);
    mensaje.innerHTML="El resultado de la division es: "+resultado;
}