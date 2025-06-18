const respuestas = [
    "A",
    undefined,
    undefined,
    "B", 
    undefined,
    "C",
    "C",
    "A",
    undefined,
    "C" 
];

for (let r in respuestas){
    console.log(respuestas[r]) 
}

console.log("Conteo de respuestas validas")
let contadorA = 0;
let contadorB = 0;
let contadorC = 0;

for (let r in respuestas){
    if (respuestas[r] === "A"){
        contadorA++
    }
    if (respuestas[r] === "B"){
        contadorB++
    }
    if (respuestas[r] === "C"){
        contadorC++
    }
}
console.log(contadorA);
console.log(contadorB);
console.log(contadorC);

console.log("Muestreo de respuestas validas")

for (let i = 0; i < respuestas.length; i++) {
    if (respuestas[i] !== undefined) {
        console.log(respuestas[i]);
    }
}

console.log("Remplazar lo valores undefined por Z")
for (let r in respuestas){
    if (respuestas[r] === undefined){
      respuestas[r] = "Z";
    }
    console.log(respuestas[r]) 
}
console.table(respuestas)




    

