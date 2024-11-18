const reEx_userName = /^[A-Za-z0-9_]{4,15}$/
const reEx_userPassowrd = /^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[_$/])[A-Za-z\d_$/]{8,20}$/

console.log("connect successful with validations.js")

if (document.getElementById("formCreateUser")) {
    function validate_form_user() {
        const form = document.getElementById("formCreateUser")
    
        let userName = document.getElementById("userName").value
        let userPassword = document.getElementById("password").value
        let passwordConfirm = document.getElementById("passwordConfirm").value
    
        let spanValidate = document.getElementById("spanValidate")
        spanValidate.innerText = ""
        let warning = ""
    
        if (!reEx_userName.test(userName)) {
            warning += "El nombre de usuario no es válido (Solo se admiten letras y números, sin espacios y con una longitud mínima de 4 carácteres)<br><br>"
        }
    
        if (!reEx_userPassowrd.test(userPassword)) {
            warning += "La contraseña no es válida (Debe contener al menos una letra minúscula y una mayúscula, un número y un cáracter especial con una longitud mínima de 8 carácteres, para que sea segura)<br><br>"
        }
    
        if (userPassword.localeCompare(passwordConfirm)) {
            warning += "La confirmación de la contraseña no es igual <br><br>"
        }
    
        console.log("userName Test: "+reEx_userName.test(userName)+ " || Paswword Test: "+reEx_userPassowrd.test(userPassword)+" || Password Compare: "+userPassword.localeCompare(passwordConfirm))
    
        if (warning.length > 0) {
            spanValidate.innerHTML = warning
        } else {
            form.submit()
        }
    }
}


if (document.getElementById("formCreateEmployee")) {
    const formCreateEmployee = document.getElementById("formCreateEmployee")

    formCreateEmployee.addEventListener("submit", (e)=>{
        
    })
}

function validate_form_employee() {
}
