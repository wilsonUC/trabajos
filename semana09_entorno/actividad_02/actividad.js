aniosnaci = prompt("Ingresa tu año de nacimiento");
actual = prompt("ingresa el año actual");

let edad = actual - aniosnaci;

try {
    if (isNaN(edad)){
        throw new Error("Los datos ingresados deben ser numeros");
    }
    /*if (edad < 0){
        throw new Error("la edad no puede ser menor de cero")
    }*/
    if (aniosnaci > actual && actual > 0){
        throw new Error("Tu año de nacimiento no puede ser mayor al año actual");
    }
    /*if (edad > 120){
        throw new Error("La edad no puedes ser mayor a 120");
    }*/
    if (aniosnaci <= 0 || actual <= 0){
        throw new Error("tu año de nacimiento o el año actual no puede ser negativo 0 igual cero");
    }
    console.log("Tu edad es: " + edad);
}
catch(error){
console.log(error)
}
finally{
console.log("proceso finalizado")
}








//console.log("Tu eedad actual es "  + edad);