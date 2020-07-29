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
function soloLetras(e) {
    key = e.keyCode || e.which;
    tecla = String.fromCharCode(key).toLowerCase();
    letras = " áéíóúabcdefghijklmnñopqrstuvwxyz";
    especiales = [8, 37, 39, 46];

    tecla_especial = false
    for(let i in especiales) {
        if(key == especiales[i]) {
            tecla_especial = true;
            break;
        }
    }

    if(letras.indexOf(tecla) == -1 && !tecla_especial){
        return false;
    }
}
function soloNumeros(e) {
    key = e.keyCode || e.which;
    tecla = String.fromCharCode(key).toLowerCase();
    numeros = "0123456789";
    especiales = [8, 37, 39, 46];

    tecla_especial = false
    for(let i in especiales) {
        if(key == especiales[i]) {
            tecla_especial = true;
            break;
        }
    }

    if(numeros.indexOf(tecla) == -1 && !tecla_especial){
        return false;
    }
}


