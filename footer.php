<footer class="container-fluid  text-light" style="background-color:#516974;">
    <div class="row" style=" color: white;">
        <div class="container-fluid px-4 pb-4">
            <div class="row" style="background-color: #546e7a ">
                <div class="col-lg-5 offset-lg-1 col-sm-12 pt-3">
                    <!-- <h5 class="white-text">Footer Content</h5> -->
                    <a href="<?php echo esc_url(home_url( '/' )); ?>">
                        <img src="<?php echo get_template_directory_uri() . '/assets/img/LOGO.png' ?>" class="img-fluid"
                            alt="DNA3" width="20%">
                    </a>
                    <h6 class="pt-3">Especialistas en intermediarios financieros.</h6>

                    <!-- <div class="container pt-4">
                            <p>GLOSARIO</p>
                            <p style="font-size: small;">* PLD/FT: Prevención de lavado de dinero y financiamiento al terrorismo.</p>
                            <p style="font-size: small;">** OTSF: Ordenamiento y transparencia de los servicios financieros.</p>
                        </div> -->

                </div>
                <div class="col-lg-4 offset-lg-2 col-sm-12 pt-3">
                    <h4 class="">Redes sociales</h4>
                    <ul style="list-style: none;">
                        <li class="pb-2">
                            <a href="https://www.facebook.com/dna3sc" target="_blank"
                                style="text-decoration: none; color: white;">
                                <!-- <i class="fab fa-facebook-square" style="color: rgb(255,255,255); font-size: 30px;"></i> -->
                                <img src="https://www.dna3.com.mx/imagenes/facebookBlanco.svg" alt="" width="30px">
                                facebook.com/dna3sc
                            </a>
                        </li>
                        <li class="pb-2">
                            <a href="https://twitter.com/dna3sc" target="_blank"
                                style="text-decoration: none; color: white;">
                                <!-- <i class="fab fa-twitter-square " style="color: rgb(255,255,255); font-size: 30px;"></i> -->
                                <img src="https://www.dna3.com.mx/imagenes/twitterBlanco.svg" alt="" width="30px">
                                twitter.com/dna3sc
                            </a>
                        </li>
                        <li class="pb-2">
                            <a href="https://www.linkedin.com/company/dna3-s-c-" target="_blank"
                                style="text-decoration: none; color: white;">
                                <!-- <i class="fab fa-linkedin" style="color: rgb(255,255,255); font-size: 30px;"></i> -->
                                <img src="https://www.dna3.com.mx/imagenes/linkedinBlanco.svg" alt="" width="30px">
                                linkedin.com/company/dna3-s-c-
                            </a>
                        </li>
                        <!-- <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li> -->
                    </ul>
                </div>
            </div>
            <div class="row pt-3 text-center" style="background-color:#;">
                <div class="col-sm-12 ">
                    © 2020 DNA3, Desarrolladores de Negocios Asociados
                    <!-- <a class="grey-text text-lighten-4 right" href="#!">More Links</a> -->
                    <p>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-legales mt-3 mx-3 btn-sm" data-toggle="modal"
                            data-target="#staticBackdrop">
                            CONFIDENCIALIDAD
                        </button>
                        <button type="button" class="btn btn-legales mt-3 mx-3 btn-sm" data-toggle="modal"
                            data-target="#staticBackdrop2">
                            AVISO DE PRIVACIDAD
                        </button>
                    </p>
                    <span class="" style="font-size: 13px;">Desarrollado por Eduardo Venegas Rivera</span>
                </div>
            </div>
        </div>

    </div>
</footer>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-truncate" id="staticBackdropLabel" style="letter-spacing: 0.2em;">
                    CONFIDENCIALIDAD</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p class="justificado">
                    1. <b>DNA3, SOCIEDAD CIVIL</b> es una empresa comprometida a garantizar la <b>confidencialidad</b>
                    de la información que proveen nuestros clientes con la finalidad de llevar a cabo los servicios
                    contratados.
                </p>
                <p class="justificado">
                    2. La información y documentos recibidos únicamente son utilizados y custodiados por el personal que
                    se encuentra vinculado con el servicio contratado, por lo que se entiende limitada la divulgación a
                    terceros por cualquier medio: verbal, telefónico o electrónico.
                </p>
                <p class="justificado">
                    3. Como se visualiza en el AVISO DE PRIVACIDAD, DNA3, SOCIEDAD CIVIL, retiene información como el
                    nombre, teléfono, e-mail y dirección, para poder tener un historial, misma que en ningún momento,
                    aún terminada la relación con el cliente, será vendida, rentada o cedida a terceros.
                    <a class="" data-toggle="modal" data-target="#staticBackdrop2"
                        href="#">Ver Aviso de Privacidad.</a>
                </p>
                <p class="justificado">
                    4. Una vez iniciada la relación con el cliente, DNA3, S.C., firmarán un <b>Convenio de
                        Confidencialidad</b> por los servicios profesionales contratados.
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">De acuerdo</button>
                <!-- <button type="button" class="btn btn-secondary">Cancelar</button> -->
                <a href="<?php echo esc_url(home_url( '/' )); ?>" class="btn btn-secondary">Cancelar</a>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop2" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-truncate" id="staticBackdropLabel" style="letter-spacing: 0.2em;">
                    AVISO DE PRIVACIDAD</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p class="justificado">
                    DNA3, S.C., con domicilio en Calle Sor Juana Inés de la Cruz número 1834 Colonia Ciudad satélite
                    Puebla código postal 72320, en términos de la Ley Federal de Protección de Datos Personales en
                    posesión de particulares, específicamente los artículos 8, 10 y 37, en los cuales hacen referencia
                    al consentimiento para el tratamiento de los Datos personales; pone a su disposición el aviso de
                    privacidad a que se refiere la mencionada Ley.
                </p>
                <p class="justificado">
                    DNA3. S.C., como parte de los procesos de consultoría solicitará a sus clientes alguna información
                    de carácter personal, misma que podrá ser: nombres y apellidos, género, fecha de nacimiento,
                    domicilio, teléfono fijo y/o móvil, correo electrónico, etc.
                </p>
                <p class="justificado">
                    Los datos serán utilizados estrictamente para fines de identificación, operación, administración y
                    demás relacionados con los servicios de asesoría y capacitación, principalmente, por parte de la
                    empresa. En caso de que sea necesario utilizar los datos para un fin distinto, se le requerirá
                    previamente por escrito su consentimiento.
                </p>
                <p class="justificado">
                    Asimismo, cualquier cambio en el presente Aviso de Privacidad se le informará por escrito a la
                    dirección de correo electrónico que para tal fin nos proporcione.
                </p>
                <br>
                <h5 class="center" style="letter-spacing: 0.2em;">DERECHOS ARCO</h5>
                <p class="justificado">
                    DNA3, S.C. le informa que podrá ejercitar, los derechos ARCO, es decir, de acceder, rectificar y
                    cancelar datos personales, así como a oponerse al tratamiento de los mismos o revocar el
                    consentimiento conferido, comunicándose al área de atención de datos personales o al correo
                    electrónico <a href="mailto:juridico@dna3.com.mx">juridico@dna3.com.mx</a>, mediante documento en
                    idioma español, que contendrá nombre completo, copia simple de su identificación oficial o, en
                    medios electrónicos, escaneo; domicilio completo y/o correo electrónico para recibir notificaciones
                    y algún número telefónico de contacto. DNA3, S.C., contará con un plazo de 20 días hábiles para
                    notificarle la respuesta a la solicitud; en caso de que se le envíe carta de respuesta al domicilio
                    físico indicado, los veinte días se darán por cumplidos al momento de entregar el documento al
                    servicio postal.
                </p>
                <p class="justificado">
                    En caso de falta de oposición para la transmisión de datos, DNA3, S.C., interpretará que ha otorgado
                    el consentimiento para ello.
                </p>
                <p class="justificado">
                    DNA3, S.C., no requerirá de la obtención de datos personales sensibles, sin embargo, en caso de
                    requerirlo, DNA3, S.C. enviará el formato que deberá ser llenado en el caso de que así lo permita el
                    cliente.
                </p>
                <p class="justificado">
                    Las modificaciones o actualizaciones al presente Aviso de Privacidad que, con motivo de reformas a
                    la legislación, políticas de la empresa, entre otras razones, lleve a cabo DNA3, S.C. estarán
                    disponibles al público a través de nuestro correo electrónico, página web, o en las instalaciones de
                    la empresa.
                </p>
                <p class="justificado">
                    Para información sobre su información personal almacenada por nosotros o para acceder a la mejora de
                    esta información de acuerdo con las previsiones de la ley, por favor contáctenos en <a
                        href="mailto:juridico@dna3.com.mx">juridico@dna3.com.mx</a>.
                </p>
                <p class="justificado">
                    Última revisión junio de 2020.
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">De acuerdo</button>
                <!-- <button type="button" class="btn btn-secondary">Cancelar</button> -->
                <a href="<?php echo esc_url(home_url( '/' )); ?>" class="btn btn-secondary">Cancelar</a>
            </div>
        </div>
    </div>
</div>

<?php wp_footer(); ?>
</body>

</html>