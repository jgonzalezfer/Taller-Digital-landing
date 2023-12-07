document.querySelector('.menu-toggle').addEventListener('click', function () {
    document.querySelector('nav ul').classList.toggle('show');
});

document.addEventListener('DOMContentLoaded', function () {

    // Función para validar el correo electrónico
    function isValidEmail(email) {
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return emailRegex.test(email);
    }

    // Función para gestionar el envío del formulario
    function handleFormSubmit(event) {
        event.preventDefault();

        const nameInput = document.getElementById('nombre');
        const emailInput = document.getElementById('email');
        const messageInput = document.getElementById('mensaje');

        const name = nameInput.value.trim();
        const email = emailInput.value.trim();
        const message = messageInput.value.trim();

        if (name === '' || email === '' || message === '' || !isValidEmail(email)) {
            alert('Rellene todos los campos con datos válidos.');
            return;
        }

        sendFormDataToPHP(name, email, message);
        console.log ('json', sendFormDataToPHP);
        alert('Formulario enviado correctamente en js');

    }

    // Función para enviar los datos del formulario a PHP
    function sendFormDataToPHP(name, email, message) {

        const formData = new FormData();

        formData.append('name', name);
        formData.append('email', email);
        formData.append('message', message);

        fetch('validador.php', {
            method: 'POST',
            body: formData
        })

        .then(response => {
            if (!response.ok) {
                throw new Error('Network response was not ok');
            }
            return response.json();
        })
        .then(data => {
            alert(data.message);
        })
        .catch(error => {
            console.error('Error:', error);
        });
    }

    const form = document.querySelector('form');
    form.addEventListener('submit', handleFormSubmit);
});