document.addEventListener('DOMContentLoaded', function slides()
{
    const signUpButton = document.getElementById('signUp');
    const signInButton = document.getElementById('signIn');
    const container = document.getElementById('container');
    const emailInputs = document.querySelectorAll('input[type="email"]');
    const Inputs = document.querySelectorAll('input'); // Cambiado a 'querySelectorAll'

    signUpButton.addEventListener('click', () => {
        container.classList.add('right-panel-active');
    });

    signInButton.addEventListener('click', () => {
        container.classList.remove('right-panel-active');
    });

    emailInputs.forEach(input => { // Itera sobre todos los campos de entrada de correo electrónico
        input.addEventListener('blur', function() {
            const regex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;

            if (!regex.test(this.value)) {
                alert('El email debe tener el formato "nombre@dominio.com"');
                // Cambiar el enfoque al siguiente elemento del formulario
                this.nextElementSibling.focus();
            }
        });
    });
});

function redireccionar() {
    if (Inputs!=""){
        window.location.href = "../Empresa/empresas.html";
    }
}