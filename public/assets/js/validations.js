import { auth } from "../../assets/js/firebase.js";
import { createUserWithEmailAndPassword, updateProfile } from "https://www.gstatic.com/firebasejs/10.7.1/firebase-auth.js";

const reEx_userName = /^[A-Za-z0-9_]{4,15}$/
const reEx_userPassowrd = /^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[_$/])[A-Za-z\d_$/]{8,20}$/
const reEx_text = /^[a-zA-ZÁÉÍÓÚáéíóúÑñ0-9,.\-\s]{1,500}$/;
const reEx_name = /^[A-Za-zÁÉÍÓÚáéíóúÑñÜü]+(?:[\s][A-Za-zÁÉÍÓÚáéíóúÑñÜü]+)*$/;
const reEx_email = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
const reEx_no_phone = /^[0-9]{10}$/;
const reEx_password = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;
const reEx_date_born = /^((19|20)\d{2})-(0[1-9]|1[0-2])-(0[1-9]|[12]\d|3[01])$/
const reEx_no_space = /^\S*$/

console.log("connection successful with validations.js")

if (document.getElementById("formCreateUser")) {
    const formCreateUser = document.getElementById("formCreateUser");

    formCreateUser.addEventListener("submit", async (e) => {
        e.preventDefault();

        let userName = document.getElementById("userName").value.trim();
        let userPassword = document.getElementById("password").value.trim();
        let passwordConfirm = document.getElementById("passwordConfirm").value.trim();
        let employeeList = document.getElementById("employeesList");
        let userEmail = employeeList.options[employeeList.selectedIndex].dataset.email;
        let spanValidate = document.getElementById("spanValidate");
        spanValidate.innerText = "";
        let warning = "";

        if (!reEx_userName.test(userName)) {
            warning += "El nombre de usuario no es válido (Solo se admiten letras y números, sin espacios y con una longitud mínima de 4 carácteres)<br><br>";
        }

        if (!reEx_userPassowrd.test(userPassword)) {
            warning += "La contraseña no es válida (Debe contener al menos una letra minúscula y una mayúscula, un número y un cáracter especial con una longitud mínima de 8 carácteres, para que sea segura)<br><br>";
        }

        if (userPassword.localeCompare(passwordConfirm)) {
            warning += "La confirmación de la contraseña no es igual <br><br>";
        }

        console.log("userName Test: " + reEx_userName.test(userName) + " || Paswword Test: " + reEx_userPassowrd.test(userPassword) + " || Password Compare: " + userPassword.localeCompare(passwordConfirm));
        console.log("Email obtenido:", userEmail);

        if (warning.length > 0) {
            spanValidate.innerHTML = warning;
        } else {
            // Validar el formato del correo
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(userEmail)) {
                spanValidate.innerHTML = "El correo electrónico no tiene un formato válido.<br><br>";
                return;
            }

            // Llamar a la función de registro
            await registerUser(userEmail, userPassword, userName)
            setTimeout(() => { formCreateUser.submit() }, 2000)
        }
    });
}

async function registerUser(email, password, username) {
    try {
        const userCredential = await createUserWithEmailAndPassword(auth, email, password);
        const user = userCredential.user;

        await updateProfile(user, { displayName: username });

        console.log("Usuario registrado exitosamente:", user);
    } catch (error) {
        console.error("Error al registrar usuario:", error.message);
    }
}


if (document.getElementById("formCreateEmployee")) {
    const formCreateEmployee = document.getElementById("formCreateEmployee")
    const name = document.getElementById("name")
    const lastName1 = document.getElementById("lastName1")
    const lastName2 = document.getElementById("lastName2")
    const no_Phone = document.getElementById("no_Phone")
    const dateBorn = document.getElementById("dateBorn")
    const email = document.getElementById("email")
    const state = document.getElementById("state")
    const municipaly = document.getElementById("municipaly")
    const job = document.getElementById("job")
    const cologne = document.getElementById("cologne")
    const spanForm = document.getElementById("spanForm")

    formCreateEmployee.addEventListener("submit", (e) => {
        e.preventDefault()

        spanForm.innerText = ""
        let warning = ""

        if (!reEx_name.test(name.value)) {
            warning += "El nombre no es válido <br>"
        }

        if (!reEx_name.test(lastName1.value)) {
            warning += "El apellido paterno no es válido"
        }

        if (!reEx_name.test(lastName2.value)) {
            warning += "El apellido materno no es válido"
        }

        if (!reEx_no_phone.test(no_Phone.value)) {
            warning += "El número telefonico no es válido <br>"
        }

        if (!reEx_date_born.test(dateBorn.value)) {
            warning += "La fecha de nacimiento no es válida <br>"
        }

        if (!reEx_email.test(email.value)) {
            warning += "El correo no es válido"
        }

        if (state.value <= 0) {
            warning += "El estado no es válido <br>"
        }

        if (municipaly.value <= 0) {
            warning += "El municipio no es válido <br>"
        }

        if (job.value <= 0) {
            warning += "El Cargo/Puesto estado no es válido <br>"
        }

        if (!reEx_name.test(cologne.value)) {
            warning += "La colonia no es válida"
        }

        if (warning.length > 0) {
            spanForm.innerHTML = warning
        } else {
            formCreateEmployee.submit()
        }
    })
}