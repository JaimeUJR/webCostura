// Import and Initialize services
import { auth } from "../../assets/js/firebase.js"
import { signInWithEmailAndPassword, setPersistence, browserSessionPersistence, } from "https://www.gstatic.com/firebasejs/10.7.1/firebase-auth.js"

const formLogin = document.getElementById("formLogin");

formLogin.addEventListener("submit", async (e) => {
    e.preventDefault();

    // Inputs
    const email = document.getElementById("email").value.trim();
    const password = document.getElementById("password").value.trim();
    const loginError = document.getElementById("loginError");

    loginError.textContent = ""; // Limpiar mensajes de error previos

    try {
        // Configura la persistencia para mantener la sesión activa
        await setPersistence(auth, browserSessionPersistence);

        // Inicio de sesion
        const userCredential = await signInWithEmailAndPassword(auth, email, password);
        const user = userCredential.user;

        // Guardar el usuario en LocalStorage
        localStorage.setItem("user", JSON.stringify(user));
        console.log("Usuario guardado en local storage:", user);
        //console.log("Inicio de sesión exitoso:");

        // Redirigir al usuario a otra página
        window.location.href = "../../index.php"
    } catch (error) {
        console.error("Error al iniciar sesión:", error.code, error.message);

        // Mostrar mensajes de error
        switch (error.code) {
            case "auth/user-not-found":
                loginError.textContent = "Usuario no encontrado. Verifica tus credenciales.";
                break;
            case "auth/wrong-password":
                loginError.textContent = "Contraseña incorrecta.";
                break;
            case "auth/invalid-email":
                loginError.textContent = "El correo no es válido.";
                break;
            default:
                loginError.textContent = "Error al iniciar sesión. Inténtalo de nuevo.";
        }
    }
})