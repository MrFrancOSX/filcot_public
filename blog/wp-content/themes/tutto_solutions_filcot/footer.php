<footer>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-sm-12 col-lg-6">
                <p>
                    Filcot Consulting &copy; 2020 | Todos los derechos
                    reservados
                </p>
                <p class="direct">
                    <a href="tel:+51956277654" target="_top">
                        956277654
                    </a>
                    |
                    <a href="tel:+51941303070" target="_top">
                        941303070
                    </a>
                    |
                    <a href="mailto:info@filcot.pe" target="_top">
                        info@filcot.pe
                    </a>
                </p>
            </div>
            <div class="col-sm-12 col-lg-6">
                <ul>
                    <li>
                        <a href="index.php">
                            Inicio
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li>
                        <a href="nosotros.php">Nosotros</a>
                    </li>
                    <li>
                        <a href="servicios.php">Servicios</a>
                    </li>
                    <li>
                        <a href="contacto.php">Contacto</a>
                    </li>

                    <div class="socialGroup">
                        <a href="https://www.facebook.com/Filcot.consulting/?ti=as" target="_blank">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="https://wa.me/51902549783?text=Hola,%20Quiero%20asesorarme" target="_blank">
                            <i class="fab fa-whatsapp"></i>
                        </a>
                        <a href="https://www.instagram.com/filcotconsulting/?igshid=s2zer6d6mlxn" target="_blank">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="https://www.linkedin.com/company/filcot-consulting" target="_blank">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </ul>
            </div>
        </div>
    </div>
</footer>

<div id="fb-root"></div>
<script>
window.fbAsyncInit = function() {
    FB.init({
        xfbml: true,
        version: 'v7.0',
    });
};

(function(d, s, id) {
    var js,
        fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s);
    js.id = id;
    js.src =
        'https://connect.facebook.net/es_ES/sdk/xfbml.customerchat.js';
    fjs.parentNode.insertBefore(js, fjs);
})(document, 'script', 'facebook-jssdk');
</script>

<!-- Your Chat Plugin code -->
<div class="fb-customerchat" attribution="setup_tool" page_id="107981154250280" theme_color="#F58420"
    logged_in_greeting=" Hola👋! Cómo podemos ayudarte?" logged_out_greeting=" Hola👋! Cómo podemos ayudarte?"></div>

<script src="node_modules/jquery/dist/jquery.js"></script>
<script src="node_modules/bootstrap/dist/js/bootstrap.js"></script>
<script src="scripts/app.js"></script>

<?php wp_footer(); ?>

</body>

</html>