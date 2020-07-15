let btnEnviar = document.getElementById('send');

btnEnviar.addEventListener('click', (event) => {
    let nombre = document.getElementById('nombre').value;
    let correo = document.getElementById('correo').value;
    let celular = document.getElementById('celular').value;
    let interes = document.getElementById('interes').value;
    let check = document.getElementById('check').checked;
    let error = document.getElementById('error')

    if (!check) {
        error.style.display = 'initial'
        event.preventDefault()
        return;
    } else if (nombre.trim() === '' || correo.trim() === '' || celular.trim() === '' || interes.trim() === '') {
        error.style.display = 'initial'
        event.preventDefault()
        return;
    }
});