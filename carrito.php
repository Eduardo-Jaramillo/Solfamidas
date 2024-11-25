<?php
session_start();
$templateBorder = 'border-bottom border-dark-subtle';

$transmitir = array(
        "piano" => "Piano",
        "vasco" => "Txalaparta",
        "saxophone" => "Saxofone",
        "violin" => "Violin",
        "guitarra" => "Guitarra"
);
$registrado = '';
if (!empty($_SESSION["registrado"])) {
    $registrado = $_SESSION["registrado"];
}
?>
<!doctype html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="estilos/carrito.css">
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
    <title>Carrito</title>
</head>

<body>
    <div id="background" class="d-none">
        <div class="tos-container rounded-5 bg-light w-75 mx-auto px-5 py-1">
            <div class="tos-text-area my-5 px-2">
                <h3>Términos y Condiciones de Solfamidas</h3>

                <p>Bienvenido a Solfamidas. Al acceder o utilizar nuestros servicios de compra de clases de música,
                    usted acepta estar sujeto a los siguientes términos y condiciones. Le recomendamos leerlos
                    detenidamente antes de realizar cualquier transacción.</p>

                <h3>1. Descripción de los Servicios</h3>
                <p>Solfamidas ofrece clases de música personalizadas en diversos instrumentos y estilos. Las clases
                    pueden ser presenciales o en línea, según la disponibilidad y el tipo de curso elegido.</p>

                <h3>2. Registro y Cuenta</h3>
                <p>Para acceder a nuestros servicios, deberá registrarse proporcionando información personal precisa y
                    actualizada. Es su responsabilidad mantener la confidencialidad de su cuenta y contraseña.</p>

                <h3>3. Reservas y Pagos</h3>
                <p>Las reservas de clases deben realizarse a través de nuestra plataforma. Todos los pagos son
                    anticipados y pueden realizarse mediante tarjeta de crédito, débito u otros métodos de pago
                    disponibles en nuestra página.</p>

                <h3>4. Cancelaciones y Reembolsos</h3>
                <p>Puede cancelar una clase con al menos 24 horas de antelación para recibir un reembolso completo. Las
                    cancelaciones hechas con menos de 24 horas de aviso no son reembolsables.</p>

                <h3>5. Políticas de Asistencia</h3>
                <p>Es responsabilidad del estudiante asistir puntualmente a las clases. En caso de inasistencia, no se
                    realizará ningún reembolso, salvo en circunstancias excepcionales, evaluadas a discreción de
                    Solfamidas.</p>

                <h3>6. Propiedad Intelectual</h3>
                <p>Todo el contenido, material y recursos proporcionados por Solfamidas durante las clases están
                    protegidos por derechos de autor y son propiedad exclusiva de la compañía. Queda prohibida su
                    reproducción o distribución sin autorización previa.</p>

                <h3>7. Modificaciones a los Términos</h3>
                <p>Solfamidas se reserva el derecho de modificar estos términos y condiciones en cualquier momento. Le
                    notificaremos de cualquier cambio mediante nuestra página web o correo electrónico registrado.</p>

                <h3>8. Contacto</h3>
                <p>Si tiene preguntas o necesita más información, puede contactarnos a través de nuestro correo
                    electrónico: <a href="mailto:info@solfamidas.com">info@solfamidas.com</a> o llamarnos al +34 123 456
                    789.</p>

                <p>Gracias por elegir Solfamidas para su aprendizaje musical. ¡Estamos emocionados de ser parte de su
                    viaje musical!</p>
                <h3>9. Garantía de Calidad</h3>
                <p>En Solfamidas nos comprometemos a proporcionar clases de música de alta calidad, impartidas por
                    profesores experimentados y certificados. Si no está satisfecho con la calidad de una clase,
                    contáctenos para evaluar su situación y buscar soluciones adecuadas.</p>

                <h3>10. Responsabilidad del Usuario</h3>
                <p>El usuario es responsable de garantizar que cuenta con el equipo y las condiciones necesarias para
                    recibir las clases, especialmente en modalidades en línea. Esto incluye acceso estable a internet,
                    cámara y micrófono funcionales, y el instrumento correspondiente.</p>
                <p>Solfamidas no se hace responsable de los problemas técnicos o de conectividad que puedan surgir del
                    lado del usuario.</p>

                <h3>11. Confidencialidad y Privacidad</h3>
                <p>En Solfamidas nos tomamos muy en serio la privacidad de nuestros usuarios. La información personal
                    recopilada durante el registro y uso de nuestros servicios se manejará de acuerdo con nuestra <a
                        href="privacidad.html">Política de Privacidad</a>. No compartiremos su información con terceros
                    sin su consentimiento explícito.</p>

                <h3>12. Reglas de Conducta</h3>
                <p>Esperamos que todos los estudiantes mantengan un comportamiento respetuoso hacia los profesores y
                    otros estudiantes durante las clases. Cualquier conducta inapropiada o disruptiva puede resultar en
                    la terminación de su acceso a nuestros servicios sin derecho a reembolso.</p>

                <h3>13. Limitación de Responsabilidad</h3>
                <p>Solfamidas no será responsable de daños directos, indirectos, incidentales o consecuentes derivados
                    del uso de nuestros servicios. Nos reservamos el derecho de modificar, suspender o discontinuar
                    cualquier clase o servicio sin previo aviso si consideramos que es necesario.</p>

                <h3>14. Política de Reprogramación</h3>
                <p>Si necesita reprogramar una clase, deberá notificarlo al menos con 24 horas de antelación.
                    Intentaremos acomodar su solicitud en la medida de lo posible, pero no garantizamos disponibilidad
                    inmediata para las fechas deseadas.</p>

                <h3>15. Uso Comercial Prohibido</h3>
                <p>Los servicios y materiales de Solfamidas están destinados exclusivamente para uso personal. Queda
                    estrictamente prohibido utilizar nuestras clases, materiales o recursos con fines comerciales o para
                    redistribuir a terceros.</p>

                <h3>16. Resolución de Disputas</h3>
                <p>En caso de cualquier disputa relacionada con nuestros servicios, intentaremos resolverla de manera
                    amistosa. Si no se llega a una resolución satisfactoria, la disputa se someterá a las leyes y
                    jurisdicción de los tribunales de Madrid, España.</p>

                <h3>17. Fuerza Mayor</h3>
                <p>Solfamidas no será responsable por la cancelación o retraso de las clases debido a causas fuera de
                    nuestro control razonable, como desastres naturales, pandemias, interrupciones de internet o
                    problemas técnicos generalizados.</p>
            </div>
        </div>
    </div>
    <header class="d-flex align-items-center">
        <a href="landing.html" class="text-decoration-none">
            <img src="img/logo.png" id="logo" alt="logo" class="mx-4">
        </a>
        <a href="landing.html" class="text-decoration-none text-dark">
            <h1 class="d-none d-sm-block">Solfamidas&nbsp;</h1>
        </a>
        <a href="landing.html" class="text-decoration-none text-dark">
            <h1 class="d-none d-lg-block">High School Musical</h1>
        </a>
        <a class="ms-auto me-5" href="clases.php"><button id="back" type="button"
                class="btn btn-warning">Volver</button></a>
    </header>
    <div class="container-fluid">
        <main class="row justify-content-center">
            <article class="col-lg-auto col-12">
                <div class="px-3 my-4 rounded-5 shadow-lg">
                    <?php

                        if (!empty($_COOKIE["carrito"])) {
                            $array = json_decode($_COOKIE["carrito"]);
                            $cont = 0;
                            $size = sizeof($array);
                            foreach ($array as $item) {
                                $instrumento = $item[0];
                                $time = $item[1];
                                $quantity = $item[2];
                                if ($size-1 == $cont) {$templateBorder = "";}

                                print '<div class="row justify-content-center py-3 '.$templateBorder.'">
                                <div class="col text-center">
                                    <img class="item-img m-3" src="img/item-'.$instrumento.'.png" alt="producto">
                                </div>
                                <div class="col text-center text-md-start">
                                    <h2 class="m-0 p-0">'.$transmitir[$instrumento].'</h2>
                                    <p>Profesor: A Escoger</p>
                                    <p>Tiempo: '.$time.'</p>
                                    <p>Localización: Presencial</p>
                                </div>
                                <div class="col-auto align-self-center mx-4 my-3">
                                    <div class="d-flex align-items-center item-div">
                                        <button id="plus'.$cont.'" type="button" class="p-1 m-0 rounded-pill bg-black border-0 plusbutton" value="1">
                                            <svg class="p-0 m-0" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed"><path d="M440-440H200v-80h240v-240h80v240h240v80H520v240h-80v-240Z"/></svg>
                                        </button>
                                        <input id="quant'.$cont.'" class="text-center item-quantity text-dark bg-white border-0 itemchange" type="text" value="'.$quantity.'">
                                        <button id="minus'.$cont.'" type="button" class="p-1 m-0 rounded-pill bg-black border-0" value="-1">
                                            <svg class="p-0 m-0" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed"><path d="M200-440v-80h560v80H200Z"/></svg>
                                        </button>
                                        <p class="my-0 ms-4 px-0 fs-5">10.00$</p>
                                    </div>
                                </div>
                               </div>';
                                $cont++;
                            }
                            if ($cont == 0) {
                                print '<div class="row justify-content-center py-3 '.$templateBorder.'">
                                <div class="col text-center">
                                    <img class="item-img m-3" src="img/item-'.$instrumento.'.png" alt="producto">
                                </div>
                                <div class="col text-center text-md-start">
                                    <h2 class="m-0 p-0">'.$transmitir[$instrumento].'</h2>
                                    <p>Profesor: A Escoger</p>
                                    <p>Tiempo: '.$time.'</p>
                                    <p>Localización: Presencial</p>
                                </div>
                                <div class="col-auto align-self-center mx-4 my-3">
                                    <div class="d-flex align-items-center item-div">
                                        <button id="plus'.$cont.'" type="button" class="p-1 m-0 rounded-pill bg-black border-0 plusbutton" value="1">
                                            <svg class="p-0 m-0" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed"><path d="M440-440H200v-80h240v-240h80v240h240v80H520v240h-80v-240Z"/></svg>
                                        </button>
                                        <input id="quant'.$cont.'" class="text-center item-quantity text-dark bg-white border-0 itemchange" type="text" value="'.$quantity.'">
                                        <button id="minus'.$cont.'" type="button" class="p-1 m-0 rounded-pill bg-black border-0" value="-1">
                                            <svg class="p-0 m-0" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed"><path d="M200-440v-80h560v80H200Z"/></svg>
                                        </button>
                                        <p class="my-0 ms-4 px-0 fs-5">10.00$</p>
                                    </div>
                                </div>
                               </div>';
                            }
                        } else {
                            print '<div class="row justify-content-center py-3">
                                <div class="col text-center">
                                    <img class="item-img m-3" src="img/logo.png" alt="producto">
                                </div>
                                <div class="col text-center text-md-start">
                                    <h2 class="m-0 p-0">Contrata una clase!</h2>
                                    <p>Profesor: A Escoger</p>
                                    <p>Tiempo: A preferencia</p>
                                    <p>Localización: Presencial</p>
                                </div>
                                <div class="col-auto align-self-center mx-4 my-3">
                                    <div class="d-flex align-items-center item-div">
                                        <button id="plus1" type="button" class="p-1 m-0 rounded-pill bg-black border-0 plusbutton" value="1">
                                            <svg class="p-0 m-0" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed"><path d="M440-440H200v-80h240v-240h80v240h240v80H520v240h-80v-240Z"/></svg>
                                        </button>
                                        <input id="quant1" class="text-center item-quantity text-dark bg-white border-0 itemchange" type="text" value="1">
                                        <button id="minus1" type="button" class="p-1 m-0 rounded-pill bg-black border-0" value="-1">
                                            <svg class="p-0 m-0" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed"><path d="M200-440v-80h560v80H200Z"/></svg>
                                        </button>
                                        <p class="my-0 ms-4 px-0 fs-5">10.00$</p>
                                    </div>
                                </div>
                               </div>';
                        }

                        ?>
                </div>
            </article>
            <aside class="col-lg-auto col-12" style="">
                <div class="p-3 my-4 rounded-5 shadow-lg">
                    <div class="row mx-5 pb-2">
                        <h3 class="fw-bold text-center mb-2">Mi Cesta</h3>
                    </div>
                    <div class="row mx-5">
                        <div class="col">
                            <p class="text-center">Subtotal:</p>
                        </div>
                        <div class="col">
                            <p class="text-center">10.00$</p>
                        </div>
                    </div>
                    <div class="row mx-5 border-bottom border-dark pb-2">
                        <div class="col">
                            <p class="text-center">IVA:</p>
                        </div>
                        <div class="col">
                            <p class="text-center">2.10$</p>
                        </div>
                    </div>
                    <div class="row mx-5 py-2">
                        <div class="col">
                            <p class="text-center">Total:</p>
                        </div>
                        <div class="col">
                            <p class="text-center">12.10$</p>
                        </div>
                    </div>
                    <div class="row mx-4 my-2">
                        <div class="col">
                            <a href="pago.html" class="d-grid text-decoration-none">
                                <button type="button" class="btn btn-sm btn-warning">Checkout</button>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="p-3 my-4 rounded-5 shadow-lg <?php if (!empty($registrado)) { print "d-none";} ?>">
                    <h3 class="fw-bold text-center mb-2">Iniciar Sessión</h3>
                    <div class="row px-4">
                        <div class="col">
                            <p class="limit-text-width">Incicia sesión o registrate para evitar rellenar tus datos
                                multiples veces y ver facilmente tus compras anteriores!</p>
                        </div>
                    </div>
                    <div class="row px-4 my-2">
                        <div class="col">
                            <a class="d-grid text-decoration-none" href="inicioSesion.php">
                                <button type="button" class="btn btn-sm btn-warning">Login</button>
                            </a>
                        </div>
                    </div>
                    <div class="row px-4 my-2">
                        <div class="col">
                            <a class="d-grid text-decoration-none" href="registro.php">
                                <button type="button" class="btn btn-sm btn-warning">Registro</button>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="p-3 my-4 rounded-5 shadow-lg">
                    <h3 class="fw-bold text-center mb-2">Terminos y <br class="d-none d-lg-block">Condiciones</h3>
                    <div class="row px-4 my-2">
                        <div class="col mt-2">
                            <div class="d-grid">
                                <button type="button" id="tos" class="btn btn-sm btn-warning">Desplegar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </aside>
        </main>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script defer src="js/carrito-button.js"></script>
    <script async src="js/carrito.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
        crossorigin="anonymous"></script>
</body>

</html>