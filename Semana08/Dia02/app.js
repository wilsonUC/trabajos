//console.log(document.getElementById("titulo"));
//const title = document.getElementById("titulo");
//console.log(title);
let title  = document.getElementById("titulo");
title.textContent = "Hola Mundo JS";

//const parrafo = document.getElementsByClassName("parrafo");
//console.log("parrafo")

const  parrafo = document.querySelector(".parrafo");
parrafo.style.color = "gold";
parrafo.style.border = "solid 4px blue";
parrafo.style.background = "black";
parrafo.style.padding = "50px";
parrafo.style.fontWeight = "bold";
parrafo.style.fontSize = "50px";

 let image = document.querySelector("img");
 const main = document.querySelector("main");
 const div = document.querySelector("div");
 image.style.border = "solid 6px black";

//let line = document.createElement("a");
//line.appendChild("body")

// Crear un nuevo elemento con texto en español
let link = document.createElement("a");
link.textContent = "¡Bienvenido a Segway!";
link.style.color = "blue";
link.style.fontSize = "24px";
link.style.margin = "20px";
link.style.background = "black";
link.style.color = "white";
link.style.padding = "20px";
link.style.borderRadius = "15px"
link.style.textDecoration

link.href = "https://www.segway.com"
main.appendChild(link);


/*let link = document.createElement("a");
link.textContent = "ingresa a Google";
link.style.color = "blue";
link.style.fontSize = "24px";
link.style.margin = "20px";
link.style.background = "black";
link.style.color = "white";
link.style.padding = "20px";
link.style.borderRadius = "15px"
link.href = "https://google.com"
main.appendChild(link);
*/
let divs = document.createElement("h1");
divs.textContent = "Hola Mundo";

div.appendChild(divs);

   
    //eventos
  


const btnEnviar = document.querySelector(".btn");
const content = document.querySelector(".contenedor");

btnEnviar.addEventListener("click", function(){
    //console.log("hiciste click");
    const valor = prompt("ingrese nombre");
    const parrafo  = document.createElement("p")
    parrafo.textContent = valor;
    content.appendChild(parrafo)
} );

