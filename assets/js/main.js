function register() {
    let nombre = document.getElementById('inputName');
    let email = document.getElementById('inputEmail');
    let contrasena = document.getElementById('inputPassword');
    let tos = document.getElementById('tosAccept');
    
    let isInputValid = true;
    let mailRegex = /\w+@\w+\.+[a-zA-Z]/;
    
    if (nombre.value == "") {
        alert("Por favor, ingresa un nombre válido");
        nombre.focus();
        nombre.style.backgroundColor = "#ff8080"
        isInputValid = false;
    } else {
        if (nombre.value.length > 45) {
            alert("Por favor, ingresa un nombre de menos de 45 caracteres");
            nombre.focus();
            nombre.style.backgroundColor = "#ff8080"
            isInputValid = false;
        } else {
            if (nombre.value.length < 4) {
                alert("Por favor, ingresa un nombre de al menos 4 caracteres");
                nombre.focus();
                nombre.style.backgroundColor = "#ff8080"
                isInputValid = false;
            } else {
                if (!mailRegex.test(email.value)) {
                    alert('Ingresa un email válido (¿tal vez no pusiste lo que va después del punto?');
                    email.focus();
                    email.style.backgroundColor = '#ff8080';
                    isInputValid = false;
                } else {
                    if (email.value.length > 45) {
                        alert('Ingresa un email de menos de 45 caracteres');
                        email.focus();
                        email.style.backgroundColor = '#ff8080';
                        isInputValid = false;
                    } else {
                        if (email.value.length < 8) {
                            alert('Ingresa un email de al menos de 8 caracteres');
                            email.focus();
                            email.style.backgroundColor = '#ff8080';
                            isInputValid = false;
                        } else {
                            if (contrasena.value.length < 8) {
                                alert('Ingresa una contraseña de al menos 8 caracteres');
                                contrasena.focus();
                                contrasena.style.backgroundColor = "#ff8080";
                                isInputValid = false;
                            } else {
                                if (contrasena.value.length > 45) {
                                    alert('Ingresa una contraseña de menos de 45 caracteres');
                                    contrasena.focus();
                                    contrasena.style.backgroundColor = "#ff8080";
                                    isInputValid = false;
                                } else {
                                    if (tos.checked == false) {
                                        alert('Por favor acepta los términos y condiciones')
                                        tos.focus();
                                        tos.style.color = "#ff8080";
                                        isInputValid = false;
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
    }
    return isInputValid;
}

function login() {
    let email = document.getElementById('inputEmail');
    let password = document.getElementById('inputPassword');
    
    let isInputValid = true;

    if (email.value = "") {
        alert('Ingresa un email!');
        email.focus();
        email.style.backgroundColor = '#ff8080';
        isInputValid = false;
    } else {
        if (!mailRegex.test(email)) {
            alert('Ingresa un email válido (¿tal vez no pusiste lo que va después del punto?');
            email.focus();
            email.style.backgroundColor = '#ff8080';
            isInputValid = false;
        } else {
            if (email.value.length < 8) {
                alert('Ingresa un email de al menos de 8 caracteres');
                email.focus();
                email.style.backgroundColor = '#ff8080';
                isInputValid = false;
            } else {
                if (email.value.length > 45) {
                    alert('Ingresa un email de menos de 45 caracteres');
                    email.focus();
                    email.style.backgroundColor = '#ff8080';
                    isInputValid = false;
                } else {
                    if (password.value.length < 8) {
                        alert('Ingresa una contraseña de al menos 8 caracteres');
                        contrasena.focus();
                        contrasena.style.backgroundColor = "#ff8080";
                        isInputValid = false;
                    } else {
                        if (password.value.length > 45) {
                            alert('Ingresa una contraseña de menos de 45 caracteres');
                            contrasena.focus();
                            contrasena.style.backgroundColor = "#ff8080";
                            isInputValid = false;
                        }
                    }
                }
            }
        }
    }
    return isInputValid;
}