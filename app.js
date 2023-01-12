let precio = 600; // precio del producto
document.getElementById('precio').innerHTML = precio; // total
console.log(document.getElementById('select').value);   

function btnclick(){  
   
    total = precio * document.getElementById('cantidad').value;
    // descuento
    descuento = total * document.getElementById('select').value / 100;  
    document.getElementById('descuento').innerHTML = descuento;

}


function borrar(){
    document.getElementById('cantidad').value = '';
    document.getElementById('descuento').innerHTML = '';
}