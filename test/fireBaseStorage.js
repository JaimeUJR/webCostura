// Import the functions 
import { initializeApp } from "https://www.gstatic.com/firebasejs/9.0.0/firebase-app.js";
import { getStorage, ref, uploadBytes, listAll, getDownloadURL, getMetadata } from "https://www.gstatic.com/firebasejs/9.0.0/firebase-storage.js";

// https://firebase.google.com/docs/web/setup#available-libraries

// Your web app's Firebase configuration
// For Firebase JS SDK v7.20.0 and later, measurementId is optional
const firebaseConfig = {
  apiKey: "AIzaSyDEYsU5ka9djRZVjRl9xU6laKgCT5pdM8U",
  authDomain: "jujr-6af06.firebaseapp.com",
  projectId: "jujr-6af06",
  storageBucket: "jujr-6af06.firebasestorage.app",
  messagingSenderId: "529522870704",
  appId: "1:529522870704:web:56de781d4764c762116e75",
  measurementId: "G-Z9Y4VQFWTF"
};

// Initialize Firebase 
const app = initializeApp(firebaseConfig);
const storage = getStorage()  // Iniciar el Servicio de Storage



// Constantes
const formTestApi = document.getElementById("formTestApi")

formTestApi.addEventListener("submit", async (e)=>{
  e.preventDefault() // Evitamos que Refresque la Página

  // Inputs
  const testFile = document.getElementById("testFile") //Capturar los inputs
  const testText = document.getElementById("testText") //El nombre de los inputs

  const storageRef = ref(storage, testText.value) // Creamos nuestra referencia y el segundo parametro corresponde a el nombre del archivo
  const resultUpLoad =  await uploadBytes(storageRef, testFile.files[0]) // Subimos la imagen a FireBase Storage (con await esperamos que nos responda) necesitamos la refencia y como segundo parametro la imagen

  // Mostramos lo que ocurre (Valor del input Text, valor que nos devuelve el input File y Mensaje de Exito)
  containerShow.innerHTML = `<span>¡Operación exitosa! Se guardó correctamente con el nombre: (${formTestApi["testText"].value})</span>`
  console.log(testFile.files[0]); // Mostramos en consola lo que devuelve el input File para mejor observación

  console.log(resultUpLoad); // Visualizamos en consola la respuesta de uploadBytes()

  //Reiniciamos inputs
  testFile.value = null
  testText.value = null
})

// Constantes para Visualizar las Imagenes
const containerShow = document.getElementById("containerShow")
const bntCargar = document.getElementById("bntCargar")

// Evento para Cargar las Imagenes
bntCargar.addEventListener("click", async (e)=> {
  bntCargar.disabled = true //Se deshabilita el botón para evitar multiples recargas
  const listRef = ref(storage, '');  // Indicamos la ubicacion de las imágenes
  const imgs = await listAll(listRef) // Devuelve todas las Imagenes Dentro de la Úbicacion indicada
  console.log(imgs.items); // Mostramos en Consola para Mejor Visualización

  containerShow.innerHTML = "" // Reseteamos el contenido del contendor

  // Iteracion de elementos
  imgs.items.forEach(async img => {
    let url = await getDownloadURL(img) // Obtenemos la url de la imagen
    let metaUlr = ref(storage, url)
    let metaData = await getMetadata(metaUlr)
    
    // Creación de elemento
    let div = document.createElement("div")
    let imgTag = document.createElement("img")
    let h4 = document.createElement("h4")

    imgTag.src = url
    imgTag.alt = img.name

    h4.innerHTML = `
      Nombre de la imagen: <b>${img.name}</b> <br>
      Tamaño de la imagen: <b>${metaData.size / 1024} KB</b> <br>
      Tipo de imagen: <b>${metaData.contentType}</b> <br>
    `
    div.appendChild(imgTag)
    div.appendChild(h4)
    div.classList.add("containerIMGs")

    //Reinicio e insercción en el contenedor
    containerShow.appendChild(div)

    setTimeout(() => {
      bntCargar.disabled = false; // Rehabilitar el botón después de 5 segundos
    }, 5000);

    /* Pruebas de visualización
    console.log(img);
    console.log(url);
    console.log(metaData);
    console.log(metaData.contentType);
    console.log(imgTag);
    console.log(div);
    console.log(" - - - - - - - - - - -  - - - - - - ");
    
    (code old) containerShow.innerHTML += `<img src="${url}" alt="${img.name}"> <p>Nombre de la imagen: <b>${img.name}</b></p>` // Mostramos */
});
  
})