contenido = [[1, 2, 3], [4, 5, 6]]

console.log(contenido)

console.log("Vamos a iterar");

i = 1
contenido.forEach(element => {
    console.log("Empezamo a iterar" + i);
    element.forEach(e =>{
        console.log(e);

    })
    console.log("Terminamos de iterar los subelemtos");

    i++
});