alert("hola mundo");

let contador = Number(prompt("ingresa un valor"));
let cadena2 = "*";

for(let i = 1; i<= contador; i++){
    console.log(cadena2.repeat(i))
}
for(let i = contador; i >= 1; i-- ){
   console.log(cadena2.repeat(i))
}
