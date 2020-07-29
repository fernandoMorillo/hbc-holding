<!doctype html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" href="icon.png">
    <link rel="stylesheet" href="CSS/owl.carousel.css">
    <link rel="stylesheet" href="CSS/owl.theme.default.min.css">
    <link rel="stylesheet" href="CSS/bulma.min.css">
    <link rel="stylesheet" href="CSS/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Merriweather+Sans:wght@300&display=swap" rel="stylesheet">
    <title>HBC - HOLDING</title>
</head>

<body>
    <header>
        <div class="contenedor-logo">
            <img class="logoPrincipal" src="img/hbcnormal.png" alt="logo-hbc" width="105" height="80">
        </div>
    </header>

    <section class="principal pb-5 pt-5">
        <div class="columns">
            <div class="column uno">
                <div class="column pt-6">
                    <h1>ASESORÍA FINANCIERA Y RECUPERACIÓN DE VIDA
                        CREDITICIA AL INSTANTE</h1>
                </div>
                <div class="column">
                    <div class="column ml-5 subtexto">
                        <h4 class="txt-titular2">DE LA MANO DE NUESTROS ASESORES JURIDICOS Y FINANCIEROS
                            TE BRINDAMOS UNA ASESORIA INTEGRAL :</h4>
                    </div>
                    <div class="container pt-3">
                        <ul class="container bulletpoint">
                            <li>Ajustamos tu presupuesto y te diseñamos un plan financiero.</li>
                            <li class="pt-3">Rapidez para pronta solución de tu caso.</li>
                            <li class="pt-2">Atención personalizada 24 horas vía celular
                                y Whatsapp.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div id="formulario" class="column">
                <div class="form_main">
                    <form action="sendData.php" method="post" class="form_content">
                        <h3 class="txt-persuasivo">¡SOLICITE SU ASESORÍA AHORA!</h3>
                        <br>
                        <div class="field">
                            <label for="name" class="label">Nombres y apellidos</label>
                            <div class="control">
                                <input class="input" name="nombre" onkeypress="return soloLetras(event)" id="nombre" type="text" placeholder="">
                            </div>
                        </div>
                        <div class="field">
                            <label for="correo" class="label">Correo</label>
                            <div class="control">
                                <input class="input" name="correo" id="correo" type="email" required placeholder="">
                            </div>
                        </div>
                        <div class="field">
                            <label for="celular" class="label">Celular</label>
                            <div class="control">
                                <input class="input" name="celular" onkeypress="return soloNumeros(event)" id="celular" type="number" required placeholder="">
                            </div>
                        </div>
                        <textarea class="textarea" name="interes" id="interes" required placeholder="Escriba aquí su interés"></textarea>
                        <div class="field">
                            <div class="control" style="display: block ruby;">
                                <label class="checkbox">
                                    <input type="checkbox" id="check">
                                </label>
                                <a class="sizeTerminos is-link is-large" id="button">Acepto términos y condiciones</a>
                            </div>
                        </div>
                        <div class="control">
                            <button type="submit" class="form_content__button" id="send">SOLICITAR UNA ASESORÍA</button>
                        </div>
                        <p style="color: red; display:none" id="error">error complete correctamente los campos</p>
                    </form>
                    <div class="modal">
                        <div class="modal-background">

                        </div>
                        <div class="modal-card">
                            <header class="modal-card-head">
                                <p class="modal-card-title">Política de tratamiento <br> de datos personales</p>
                                <button class="delete" id="cerrar"></button>
                            </header>
                            <section class="modal-card-body">
                                Dando cumplimiento a lo dispuesto en la Ley estatutaria 1581 de 2012 y a su Decreto
                                Reglamentario 1377 de 2013,
                                Funerales Los Olivos adopta la presente política para el tratamiento de datos personales, la
                                cual será informada
                                a todos los titulares de los datos recolectados o que en el futuro se obtengan en el
                                ejercicio de las actividades comerciales, culturales o laborales.
                            </section>
                            <footer class="modal-card-foot">

                            </footer>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pt-5 pb-6 quienes-somos">
        <div class="pos-textos">
            <h3 class="titulo">Quienes somos</h3>
        </div>
        <div class="columns pt-5">
            <div class="column is-half">
                <div class="column">
                    <div class="cont-imgSomos">
                        <img id="imgSomos" src="img/img-somos.png" alt="imagen quienes somos">
                    </div>
                </div>
            </div>
            <div class="column is-half">
                <div class="column is-half">
                    <p id="estiloParrafo" class="pt-5">Somos una empresa encargada en diagnosticar y
                        analizar la vida financiera de nuestros clientes para
                        ayudarlos a alcanzar sus sueños.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="servicios pt-5 pb-6">
        <div class="pos-textos">
            <h3 class="titulo">¡Conoce nuestros servicios!</h3>
        </div>
        <div class="columns spt-5 pb-5">
            <div class="column container pt-6 secc">
                <div class="owl-carousel">
                    <div class="item">
                        <div class="card container">
                            <div class="card-image">
                                <figure class="image is-4by3">
                                    <img src="img/CELULAR-A-CREDITO.png" alt="Celulares a crédito">
                                </figure>
                            </div>
                            <div class="card-content">
                                <div class="media">
                                    <div class="media-content">
                                        <p class="title is-4">
                                            CELULARES A CRÉDITO PARA REPORTADOS EN CENTRALES DE RIESGO
                                        </p>

                                    </div>
                                </div>

                                <div class="content">
                                    <p>Sin tener en cuenta que te encuentres reportado en <em>DATACREDITO</em>,
                                        te ofrecemos celulares de referencia <em>"Samsung"</em> financiando, con tan solo
                                        tu cédula, dirección y correo electrónico.
                                    </p>
                                    <a href="#formulario">
                                        <button class="is-success butCot is-fullwidth is-outlined">COTIZAR</button>
                                    </a>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card container">
                            <div class="card-image">
                                <figure class="image is-4by3">
                                    <img src="img/celular-a-credito-2.jpg" alt="Celulares a crédito">
                                </figure>
                            </div>
                            <div class="card-content">
                                <div class="media">
                                    <div class="media-content">
                                        <p class="title is-4">
                                            CELULARES FINANCIADOS SIN TENER VIDA CREDITICIA
                                        </p>

                                    </div>
                                </div>

                                <div class="content">
                                    <p>Si no has podido obtener un crédito, por no contar con vida crediticia,
                                        en <em>HBC holding</em> te brindamos la oportunidad de obtener un buen telefono
                                        referencia <em>"Samsung"</em> con tan solo tu cédula, dirección y correo electrónico.
                                    </p>
                                    <a href="#formulario">
                                        <button class="is-success butCot is-fullwidth is-outlined">COTIZAR</button>
                                    </a>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card container">
                            <div class="card-image">
                                <figure class="image is-4by3">
                                    <img src="img/electrodomesticos-a-credito.png" alt="imagen depuración de deudas financieras">
                                </figure>
                            </div>
                            <div class="card-content">
                                <div class="media">
                                    <div class="media-content">
                                        <p class="title is-4">
                                            ELECTRÓDOMESTICOS A CRÉDITO
                                        </p>

                                    </div>
                                </div>

                                <div class="content">
                                    <p>Si no has podido obtener un crédito, por no contar con vida
                                        crediticia, en <em>HBC holding</em> te brindamos la oportunidad
                                        de obtener un electródomestico con tan solo tu cédula, dirección
                                        y correo electrónico.

                                    </p>
                                    <a href="#formulario">
                                        <button class="is-success butCot is-fullwidth is-outlined">COTIZAR</button>
                                    </a>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card container">
                            <div class="card-image">
                                <figure class="image is-4by3">
                                    <img src="img/RECUPERACION.jpg" alt="imagen recuperación crediticia">
                                </figure>
                            </div>
                            <div class="card-content">
                                <div class="media">
                                    <div class="media-content">
                                        <p class="title is-4">RECUPERACIÓN DE VIDA
                                            CREDITICIA</p>

                                    </div>
                                </div>

                                <div class="content">
                                    <p>Si te encuentras reportado en las centrales de riesgo,
                                        te ayudamos a eliminar los castigos para que puedas limpiar tu vida crediticia. </p>
                                    <a href="#formulario">
                                        <button class="is-success butCot is-fullwidth is-outlined">COTIZAR</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card container">
                            <div class="card-image">
                                <figure class="image is-4by3">
                                    <img src="img/CREACIÓN.jpg" alt="imagen creación de vida crediticia">
                                </figure>
                            </div>
                            <div class="card-content">
                                <div class="media">
                                    <div class="media-content">
                                        <p class="title is-4">CREACIÓN Y ADMINISTRACIÓN DE VIDA CREDITICIA
                                        </p>
                                    </div>
                                </div>

                                <div class="content">
                                    <p>Si no tienes vida crediticia te asesoramos para que comiences a
                                        adquirirla a través de créditos</p>
                                    <a href="#formulario">
                                        <button class="is-success butCot is-fullwidth is-outlined">COTIZAR</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card container">
                            <div class="card-image">
                                <figure class="image is-4by3">
                                    <img src="img/INCLUSIÓN.jpg" alt="imagen inclusión de bancarización">
                                </figure>
                            </div>
                            <div class="card-content">
                                <div class="media">
                                    <div class="media-content">
                                        <p class="title is-4">INCLUSIÓN DE BANCARIZACIÓN
                                        </p>
                                    </div>
                                </div>

                                <div class="content">

                                    <ul>
                                        <li>Te ayudamos a gestionar créditos de libre inversión.</li>
                                        <li>Te ayudamos a gestionar créditos hipotecarios.</li>
                                        <li>Te ayudamos a gestionar créditos vehicular.</li>
                                    </ul>

                                    <a href="#formulario">
                                        <button class="is-success butCot is-fullwidth is-outlined">COTIZAR</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card container">
                            <div class="card-image">
                                <figure class="image is-4by3">
                                    <img src="img/RECUPERACIÓN%20ELBUENNOMBRE.jpg" alt="imagen recuperación del buen nombre">
                                </figure>
                            </div>
                            <div class="card-content">
                                <div class="media">
                                    <div class="media-content">
                                        <p class="title is-4">
                                            AUMENTO DE PUNTAJE EN DATACREDITO
                                        </p>
                                    </div>
                                </div>

                                <div class="content">
                                    <p>Para que puedas tener un buen puntaje en las centrales de riesgo,
                                        lo importante es mantenerla con reportes positivos, pagar tus obligaciones puntuales. </p>
                                    <a href="#formulario">
                                        <button class="is-success butCot is-fullwidth is-outlined">COTIZAR</button>
                                    </a>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card container">
                            <div class="card-image">
                                <figure class="image is-4by3">
                                    <img src="img/DEPURACIÓN.jpg" alt="imagen depuración de deudas financieras">
                                </figure>
                            </div>
                            <div class="card-content">
                                <div class="media">
                                    <div class="media-content">
                                        <p class="title is-4">
                                            VIDA CREDITICIA
                                        </p>

                                    </div>
                                </div>

                                <div class="content">
                                    <p>Es el comportamiento que usted ha tenido cuando adquiere obligaciones financieras,
                                        para que así las entidades puedan evaluar el comportamiento que ha tenido al adquirir un crédito. </p>
                                    <a href="#formulario">
                                        <button class="is-success butCot is-fullwidth is-outlined">COTIZAR</button>
                                    </a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </section>

    <section class="pt-5 pb-6 contact">
        <div class="pos-cont pt-5 pb-5">
            <img id="imaCont" src="img/WHATSAPP.png" alt="logo de whatsApp">
        </div>
        <div style="color: white" class="pb-2">
            <p class="pos-cont">¿PROBLEMAS FINANCIEROS? ¡LO SOLUCIONAMOS!</p>
        </div>
        <div class="pos-cont is-half pb-5"><a href="https://wa.link/o8c42a" target="_blank">
                <button id="txtCon" class="button btncontac is-info is-inverted">CONTÁCTANOS</button>
            </a>
        </div>
    </section>

    <section class="pt-5 pb-6 quienes-somos">
        <div class="pos-textos">
            <h3 class="titulo">Nuestro equipo</h3>
        </div>
        <div class="columns pt-5">
            <div class="column is-half">
                <div class="column">
                    <div class="cont-imgSomos">
                        <img id="imgEquipo" src="img/nosotros.jpg" alt="Nuestro equipo">
                    </div>
                </div>
            </div>
            <div class="column is-half">
                <div class="column is-half">
                    <p id="estiloParra">Nuestro equipo está conformado por un grupo de consultores y asesores integrales,
                        especializados en el área jurídica y financiera.
                        Quienes te brindarán un respaldo completo en todo el proceso de tu caso ayudándote a liberar cargas
                        financieras.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- <section class="testimonios pt-5 pb-6">
        <div class="pos-textos pb-5">
            <h3 class="titulo">Testimonios</h3>
        </div>
        <div class="container column pt-5">

            <div class="columns">
                <div class="column is-half posiComen">
                    <article class="media">
                        <figure class="media-left">
                            <p class="image is-96x96">
                                <img class="is-rounded" src="img/PERFIL2.jpg" alt="imagen de perfil">
                            </p>
                        </figure>
                        <div class="media-content">
                            <div class="content">
                                <p>
                                    <strong>John Smith</strong>
                                    <br>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu
                                    pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis
                                    feugiat facilisis.
                                </p>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="column is-medium">
                    <article class="media">
                        <figure class="media-left">
                            <p class="image is-96x96">
                                <img class="is-rounded" src="img/PERFIL.jpg" alt="imagen de perfil">
                            </p>
                        </figure>
                        <div class="media-content">
                            <div class="content">
                                <p>
                                    <strong>John Smith</strong>
                                    <br>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu
                                    pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis
                                    feugiat facilisis.
                                </p>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
            <div class="columns pt-5">
                <div class="column is-three-fifths is-offset-one-fifth posiComen">
                    <article class="media">
                        <figure class="media-left">
                            <p class="image is-96x96">
                                <img class="is-rounded" src="img/PERFIL3.jpg" alt="imagen de perfil">
                            </p>
                        </figure>
                        <div class="media-content">
                            <div class="content">
                                <p>
                                    <strong>John Smith</strong>
                                    <br>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu
                                    pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis
                                    feugiat facilisis.
                                </p>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section> -->

    <section class="pt-5 pb-6 cotizar">
        <div class="column container is-medium">
            <p class="asesoramos">TE ASESORAMOS Y ACOMPAÑAMOS EN TODO TU PROCESO FINANCIERO
                DE MANERA INTEGRAL</p>
            <div style="text-align: center" class="container pt-3">
                <a href="#formulario">
                    <button class="button btn-cotizar is-light is-large">SOLICITAR MI ASESORIA</button>
                </a>
            </div>
        </div>
    </section>

    <footer class="pt-6 pb-2">
        <div class="container">
            <div class="columns">
                <div class="column is-half">
                    <div class="direccion">
                        <p>Dirección</p><br>
                        <p class="textoDir">
                            Barrio Biffi Diag. 31 <br> N°. 71-57 Oficina 203 </p>
                    </div>
                    <br>
                </div>
                <div class="column is-half">
                    <div class="direccion">
                        <p>Síguenos</p><br>
                        <ul class="redes">
                            <li class="tam"><a href="https://web.facebook.com/HBCHOLDINGG/" target="_blank"><img src="img/fb.png" alt=""></a></li>
                            <li class="tam"><a href="https://www.instagram.com/hbc_holding/" target="_blank"><img src="img/ig_logo.png" alt=""></a></li>
                            <li class="tam"><a href="https://wa.link/o8c42a" target="_blank"><img src="img/ws.png" alt=""></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div style="text-align: center; color: white;">
                <p>©2020 <a style="color:white" href="https://www.digitalalliance.com.co/">Digital Alliance</a></p>
            </div>
        </div>
    </footer>


    <script src="Js/jquery.min.js"></script>
    <script src="Js/owl.carousel.min.js"></script>
    <script src="Js/carrusel.js"></script>
    <script src="Js/validation.js"></script>
</body>

</html>