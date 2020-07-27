<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <?php wp_head(); ?>
    <title>Filcot Consulting - Blog</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />


    <!-- Social -->
    <meta name="description"
        content="Bienvenidos a nuestro blog. En Filcot Consulting, trabajamos arduamente para hacer crecer tu negocio." />
    <meta name="robots" content="index, follow" />
    <meta name="googlebot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
    <meta name="bingbot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
    <link rel="canonical" href="https://filcot.pe/" />
    <meta property="og:locale" content="es_ES" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Filcot Consulting - Blog" />
    <meta property="og:description"
        content="Bienvenidos a nuestros blog. En Filcot Consulting, trabajamos arduamente para hacer crecer tu negocio." />

    <meta property="og:url" content="https://filcot.pe/" />
    <meta property="og:site_name" content="filcot.pe" />
    <meta property="article:publisher" content="https://www.facebook.com/filcot.consulting/" />
    <meta property="og:image" content="<?php echo get_the_post_thumbnail_url(); ?>" />

    <meta name="twitter:card" content="summary_large_image" />

    <link rel="dns-prefetch" href="//fonts.googleapis.com" />
    <link rel="dns-prefetch" href="//onesignal.com" />
    <link rel="dns-prefetch" href="//google.com" />
    <link rel="dns-prefetch" href="//fonts.gstatic.com" />
    <link rel="dns-prefetch" href="//cdn.onesignal.com" />
    <link rel="dns-prefetch" href="//google-analytics.com" />
    <link href="https://fonts.gstatic.com" crossorigin="" rel="preconnect" />

    <link rel="shortlink" href="https://filcot.pe/" />

    <!-- Favicon Styles -->
    <link rel="apple-touch-icon" sizes="180x180" href="/assets/favicon/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="/assets/favicon/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/favicon/favicon-16x16.png" />
    <link rel="manifest" href="/assets/favicon/site.webmanifest" />
    <link rel="mask-icon" href="/assets/favicon/safari-pinned-tab.svg" color="#0062a1" />
    <meta name="msapplication-TileColor" content="#0062a1" />
    <meta name="theme-color" content="#0062a1" />
</head>



<body <?php body_class(); ?>>



    <div id="page" class="site">
        <!-- tutto -->
        <header>
            <nav id="nav" class="navbar navbar-expand-lg navbar-light bg-light fixed-top transparentNav">
                <div class="container">
                    <a id="logoTransparent" class="navbar-brand" href="/index.php">
                        <img src="/assets/logoSmallBlanco.png" alt="Filcot Consulting Logo" />
                    </a>
                    <a id="logoOriginal" class="navbar-brand" href="/index.php">
                        <img src="/assets/logoSmallOriginal.png" alt="Filcot Consulting Logo" />
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                        aria-controls="#navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="/index.php">
                                    Inicio
                                    <span class="sr-only">(current)</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/nosotros.php">Nosotros</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/servicios.php">Servicios</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link focus" href="/contacto.php">Contáctanos</a>
                            </li>
                            <li>
                                <div class="socialGroup">
                                    <a href="https://www.facebook.com/filcot.consulting/reviews" target="_blank">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                    <a href="https://wa.me/51902549783?text=Hola,%20Quiero%20asesorarme"
                                        target="_blank">
                                        <i class="fab fa-whatsapp"></i>
                                    </a>
                                    <a href="https://www.instagram.com/filcotconsulting/?igshid=s2zer6d6mlxn"
                                        target="_blank">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                    <a href="https://www.linkedin.com/company/filcot-consulting" target="_blank">
                                        <i class="fab fa-linkedin-in"></i>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>

        <script>
        //Cambio de color en scroll
        window.onscroll = function() {
            var nav = document.getElementById('nav');
            var logoTransparent = document.getElementById('logoTransparent');
            var logoOriginal = document.getElementById('logoOriginal');
            if (window.pageYOffset < 25) {
                nav.classList.add('transparentNav');
                logoTransparent.style.display = 'block';
                logoOriginal.style.display = 'none';
            } else {
                nav.classList.remove('transparentNav');
                logoTransparent.style.display = 'none';
                logoOriginal.style.display = 'block';
            }
        };
        </script>
        <!-- fin tutto -->