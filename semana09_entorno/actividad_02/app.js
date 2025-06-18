const valor = "hola";

function sumar(num1, num2){
    return +num1 +  +num2;
}
try{

    //console.log(valor());
   
   const resultado = sumar(5, 5);
   if (isNaN(resultado)){
    throw new Error("los parametros deben ser numeros");{
        console.log(resultado);
    }
    if (resultado<0){
        throw new Error("La suma debe ser mayor a cero")

    }

   }

}
catch(error){

    console.log(error);
    //console.log(error.message);
    //console.log(error.stack);
    //console.log(error.mane);


}
finally{

    console.log("este mensaje es de obligatorio");

}