<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>ENCORE DIGITAL - Desarrollo Web</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="diseño web, desarrollo web, páginas web, tiendas online, SEO, landing pages, sitios web, marketing digital, optimización web, presencia online" name="keywords">
    <meta content="Creamos páginas web modernas, optimizadas y personalizadas para tu negocio. Potencia tu presencia online con diseño atractivo y SEO" name="description">

    <!-- Favicon -->
    <link href="img/favicon.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500&family=Roboto:wght@500;700&display=swap" rel="stylesheet">  

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/1143d5b8c9.js" crossorigin="anonymous"></script>

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>


    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style2.css" rel="stylesheet">
    <script>
        function validarFormulario() {
            let nombres = document.forms["contacto"]["nombres"].value;
            let correo = document.forms["contacto"]["correo"].value;
            let numero = document.forms["contacto"]["numero"].value;
            let emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            let phoneRegex = /^\d{9,15}$/;
            
            if (nombres.trim() === "") {
                alert("Por favor, ingresa tu nombre.");
                return false;
            }
            if (!emailRegex.test(correo)) {
                alert("Por favor, ingresa un correo válido.");
                return false;
            }
            if (!phoneRegex.test(numero)) {
                alert("Por favor, ingresa un número de teléfono válido (solo números, mínimo 9 dígitos).");
                return false;
            }
            return true;
        }
    </script>
    
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-YH6XYQH83K"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-YH6XYQH83K');
    </script>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-NB263WTZ');</script>
    <!-- End Google Tag Manager -->

    <!-- Google tag (gtag.js) event - delayed navigation helper -->
    <script>
    // Helper function to delay opening a URL until a gtag event is sent.
    // Call it in response to an action that should navigate to a URL.
    function gtagSendEvent(url) {
      var callback = function () {
        if (typeof url === 'string') {
          window.location = url;
        }
      };
      gtag('event', 'conversion_event_outbound_click', {
        'event_callback': callback,
        'event_timeout': 2000,
        // <event_parameters>
      });
      return false;
    }
    </script>    
</head>
<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NB263WTZ"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
    </div>
    <!-- Spinner End -->
    <!-- Topbar Start -->
    <div class="container-fluid bg-primary text-white d-none d-lg-flex">
        <div class="container py-3">
            <div class="d-flex align-items-center">
                <a href="index" class="navbar-brand">
                    <img src="img/logo_blanco.png" class="img-fluid h-100" alt="img">
                </a>
                <div class="ms-auto d-flex align-items-center">
                    <small class="ms-6"><i class="fa fa-envelope me-3"></i>consultas@encoredigitalperu.com</small>
                    <small class="ms-5"><i class="fa fa-phone-alt me-3"></i>+51 978 266 689</small>
                    <div class="ms-3 d-flex">
                        <a class="btn btn-sm-square btn-light text-primary rounded-circle ms-2" href="https://www.facebook.com/encoredigital.peru"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-sm-square btn-light text-primary rounded-circle ms-2" href="https://www.instagram.com/encoredigital.peru"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->

<!-- Navbar Start -->
<div class="container-fluid bg-white sticky-top">
    <div class="container">
        <nav class="navbar navbar-expand-lg bg-white navbar-light p-lg-0">
            <a href="index" class="navbar-brand d-lg-none">
                <img src="img/logo_azul.png" class="img-fluid h-100" alt="img">
            </a>
            <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav">
                    <a href="index" class="nav-item nav-link">Inicio</a>
                    <a href="nosotros" class="nav-item nav-link">Nosotros</a>
                    <div class="nav-item dropdown">
                        <a href="servicios" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Servicios</a>
                        <div class="dropdown-menu bg-light rounded-0 rounded-bottom m-0">                                                
                            <a href="marketing-digital" class="dropdown-item">Marketing  Digital</a>
                            <a href="social-media" class="dropdown-item">Gestión de Redes Sociales</a>
                            <a href="branding" class="dropdown-item">Diseño Gráfico y Branding</a>
                            <!--<a href="produccion-multimedia" class="dropdown-item">Producción Multimedia</a> -->
                            <a href="desarrollo-web" class="dropdown-item">Diseño y Desarrollo Web</a>
                        </div>
                    </div>
                    <!-- <a href="portafolio" class="nav-item nav-link">Portafolio</a>-->
                    <a href="contactanos" class="nav-item nav-link">Contacto</a>
                </div>
                <div class="ms-auto d-none d-lg-block">
                    <a href="https://wa.link/qeaey2" class="btn btn-primary rounded-pill py-2 px-3" id="wsp_header">¡Contáctanos!</a>
                </div>
            </div>
        </nav>
    </div>
</div>
<!-- Navbar End -->


    <!-- Page Header Start -->
    <div class="container-fluid page-header bg-banner-web py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h2 class="display-2 text-white mb-4 animated slideInDown">Diseño y Desarrollo de</h2>
            <h1 class="display-2 text-white mb-4 animated slideInDown">Páginas Web</h1>
        </div>      
    </div>
<!-- Team Start -->
<div class="container-fluid  py-5">
    <div class="container py-1">
        <div class="row g-5 align-items-center">
            <div class="col-xl-7 wow fadeInLeft" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInLeft;">
                <div>
                    <h1 class="display-5 mb-4">Diseñamos tu web, construimos tu éxito</h1>
                    <p class="mb-4">Creamos sitios web modernos, optimizados y listos para convertir visitantes en clientes.</p>
                    <div class="row g-4">
                        <div class="col-md-6 col-lg-6 col-xl-6">
                            <div class="d-flex">
                                <div><i class="fas fa-lightbulb fa-3x text-primary"></i></div>
                                <div class="ms-4">
                                    <h4>Diseño Web Personalizado para Impulsar tu Identidad</h4>
                                    <p>Desarrollamos páginas únicas y estratégicas que reflejan la esencia de tu negocio y lo posicionan en el mercado.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-xl-6">
                            <div class="d-flex">
                                <div><i class="bi bi-bookmark-heart-fill fa-3x text-primary"></i></div>
                                <div class="ms-4">
                                    <h4>Desarrollo de sitios web con diseño adaptable</h4>
                                    <p>para ofrecer una navegación fluida y eficiente en computadoras de escritorio, tablets y dispositivos móviles.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <a href="https://wa.link/qeaey2" id="wsp_web_1" class="btn btn-primary rounded-pill py-3 px-5 flex-shrink-0">Solicita una consulta</a>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex">
                                <i class="fa-brands fa-google fa-3x text-primary me-4"></i>
                                <div>
                                    <h4>Impulsamos la Visibilidad de tu Sitio Web</h4>
                                    <p>Con estrategias SEO efectivas, facilitando que tu negocio sea encontrado por quienes buscan tus servicios</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-5 wow fadeInRight" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInRight;">
                <div class="rounded position-relative overflow-hidden">
                    <img src="img/web_stock.png" class="img-fluid rounded w-100" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid  py-5">
    <div class="container py-5">
        <div class="row g-5 align-items-center">
            <h1 class="display-5 mb-2 text-center pb-1">No solo creamos webs, creamos experiencias</h1>
            <div class="col-xl-4 wow fadeInRight" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInRight;">
                <div class="bg-primary col-lg-7 rounded wow fadeInUp" data-wow-delay="0.1s">
                    <div class="steps-item p-4 mb-4 text text-white">
                        <h4 class="text-white">Páginas Corporativas</h4>
                        <p class="mb-0">Para empresas que buscan presencia profesional</p>
                    </div>
                </div>
                <div class="bg-light col-lg-7 rounded wow fadeInUp" data-wow-delay="0.3s">
                    <div class="steps-item p-4 mb-4 text-primary">
                        <h4 class="text-primary">Tiendas Online</h4>
                        <p class="mb-0">E-commerce seguro y fácil de gestionar</p>
                    </div>
                </div>
                <div class="bg-primary col-lg-7 rounded wow fadeInUp" data-wow-delay="0.3s">
                    <div class="steps-item p-4 mb-4 text-white">
                        <h4 class="text-white">Landing Pages</h4>
                        <p class="mb-0">Páginas enfocadas en conversión</p>
                    </div>
                </div>
                <div class="bg-light col-lg-7 rounded wow fadeInUp" data-wow-delay="0.3s">
                    <div class="steps-item p-4 mb-4 text-primary">
                        <h4 class="text-primary">Mantenimiento</h4>
                        <p class="mb-0">Soporte y optimización continua</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-8 wow fadeInLeft" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInLeft;">
                <div class="p-5">
                    <img src="img/web_modelo2.png" class="img-fluid w-100 rounded" alt="">
               </div>
            </div>
         </div>
    </div>
</div>


        <!-- FAQs Start -->
        <div class="container-fluid faq-section pb-5">
            <div class="container pb-5 overflow-hidden">
                <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                    <h1 class="display-5 mb-4">Preguntas Frecuentes Sobre Desarrollo Web y Marketing Digital
                    </h1>
                    <p class="mb-0"></p>
                </div>
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.2s">
                        <div class="accordion accordion-flush bg-light rounded p-5" id="accordionFlushSection">
                            <div class="accordion-item rounded-top">
                                <h2 class="accordion-header" id="flush-headingOne">
                                    <button class="accordion-button collapsed rounded-top" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                        ¿Qué servicios ofrece una agencia de marketing con desarrollo web?
                                    </button>
                                </h2>
                                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushSection">
                                    <div class="accordion-body">Una agencia de marketing con desarrollo web ofrece una amplia gama de servicios, que incluyen el diseño y desarrollo de sitios web desde cero, la creación de interfaces de usuario atractivas y funcionales, e integración con sistemas de gestión de contenidos (CMS) como WordPress.
                                        Además, garantiza un diseño responsive para adaptarse a diferentes dispositivos.Como valor agregado, también ofrece SEO (optimización para motores de búsqueda) para mejorar la visibilidad online, junto con mantenimiento web y estrategias de marketing digital para potenciar el alcance del negocio.</div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                        ¿Cómo elegir la mejor agencia de marketing para el desarrollo web de mi proyecto?
                                    </button>
                                </h2>
                                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushSection">
                                    <div class="accordion-body">Al elegir una agencia de marketing con desarrollo web, es importante considerar la calidad de su trabajo, revisando ejemplos de proyectos realizados y asegurándose de que comprenda las necesidades específicas de tu negocio.
                                        Aunque somos nuevos en el mercado, ofrecemos un enfoque personalizado y estratégico, adaptándonos a cada cliente. También es clave una comunicación clara sobre expectativas, plazos y presupuesto, garantizando que el sitio web no solo se vea bien, sino que también impulse el crecimiento de tu marca.</div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                    ¿Por qué es importante tener un sitio web profesional para mi negocio?
                                    </button>
                                </h2>
                                <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushSection">
                                    <div class="accordion-body">Un sitio web profesional es la base de tu presencia digital. No solo mejora tu credibilidad y confianza, sino que también te permite atraer más clientes con una estrategia de SEO efectiva. Además, con un diseño web atractivo y funcional, garantizas que los usuarios tengan una experiencia óptima, lo que se traduce en más conversiones y crecimiento para tu negocio.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingFour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                                    ¿Qué beneficios tiene contratar una agencia de marketing para gestionar mi presencia online?
                                    </button>
                                </h2>
                                <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushSection">
                                    <div class="accordion-body">Una agencia de marketing te ayuda a tener una estrategia digital completa, desde el desarrollo de un sitio web optimizado, hasta la gestión de redes sociales y campañas publicitarias. Con nuestro enfoque, logramos que tu marca tenga mayor alcance, reconocimiento y conversión, mientras tú te enfocas en hacer crecer tu negocio.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingFive">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                                    ¿Cuáles son los elementos clave de un sitio web exitoso?
                                    </button>
                                </h2>
                                <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushSection">
                                    <div class="accordion-body">Un sitio web exitoso debe tener un diseño atractivo y responsive, navegación intuitiva, carga rápida, contenido optimizado para SEO y llamadas a la acción que conviertan visitantes en clientes. En nuestra agencia nos aseguramos de que cada página esté alineada con los objetivos de tu negocio para generar resultados reales.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.2s">
                        <div class="bg-primary rounded">
                            <img src="img/web_qa.jpg" class="img-fluid w-70" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- FAQs End -->

<div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                    <p class="fs-5 fw-medium text-primary">Escribenos Ahora</p>
                    <h1 class="display-5 mb-4">¿Listo para llevar tu negocio al siguiente nivel?</h1>
                    <div class="banner-btn">
                        <a href="https://wa.link/qeaey2" id="wsp_web_2" class="btn btn-primary rounded-pill py-3 px-4 px-md-5 ms-2">WhatsApp</a>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                    <h2 class="mb-4">Obtenga una cotización gratuita</h2>
                    <form name="contacto" action="procesar.php" method="POST" onsubmit="return validarFormulario()">
                    <div class="row g-3">
                        <div class="col-sm-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="nombres" name="nombres" placeholder="Nombres">
                                <label for="nombres">Nombre</label>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-floating">
                                <input type="email" class="form-control" id="correo" name="correo" placeholder="Your Email">
                                <label for="correo">Correo</label>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="numero" name="numero" placeholder="Your Mobile">
                                <label for="numero">Telefono</label>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <button class="btn btn-primary w-100 py-3" id="enviar_formulario" type="submit">Enviar</button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<!-- Project Start -->
<div class="container-xxl pt-5">
        <h1 class="display-5 mb-5 text-center pb-5">Conoce nuestros principales proyectos</h1>
    <div class="container">
        <div class="text-center text-md-start pb-5 pb-md-0 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">                
        </div>
        <div class="owl-carousel project-carousel wow fadeInUp" data-wow-delay="0.1s">
            <div class="project-item mb-5">
                <div class="position-relative">
                    <img class="img-fluid" src="img/web1.jpg" alt="">
                    <div class="project-overlay">
                        <a class="btn btn-lg-square btn-light rounded-circle m-1" href="img/web1.jpg" data-lightbox="project"><i class="fa fa-eye"></i></a>
                        <a class="btn btn-lg-square btn-light rounded-circle m-1" href="https://certiperu.com/"><i class="fa fa-link"></i></a>
                    </div>
                </div>
                <div class="p-4">
                    <a class="d-block h5" href="">CERTIPERU CONSULTORES</a>
                    <span>Asesoramiento en Homologiciones</span>
                </div>
            </div>
            <div class="project-item mb-5">
                <div class="position-relative">
                    <img class="img-fluid" src="img/web2.jpg" alt="">
                    <div class="project-overlay">
                        <a class="btn btn-lg-square btn-light rounded-circle m-1" href="img/web2.jpg" data-lightbox="project"><i class="fa fa-eye"></i></a>
                        <a class="btn btn-lg-square btn-light rounded-circle m-1" href="https://delcorb.com/"><i class="fa fa-link"></i></a>
                    </div>
                </div>
                <div class="p-4">
                    <a class="d-block h5" href="">DELCORB</a>
                    <span>Servicios Generales</span>
                </div>
            </div>
            <div class="project-item mb-5">
                <div class="position-relative">
                    <img class="img-fluid" src="img/web3.jpg" alt="">
                    <div class="project-overlay">
                        <a class="btn btn-lg-square btn-light rounded-circle m-1" href="img/web3.jpg" data-lightbox="project"><i class="fa fa-eye"></i></a>
                        <a class="btn btn-lg-square btn-light rounded-circle m-1" href="https://serviciostds.com/"><i class="fa fa-link"></i></a>
                    </div>
                </div>
                <div class="p-4">
                    <a class="d-block h5" href="">SERVICIOS TDS</a>
                    <span>Saneamiento Ambiental y Gestioón de Residuos</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Project End -->
   
<!-- Footer Start -->

    <!-- Botón flotante de WhatsApp -->
    <div class="whatsapp-container">
        <a href="https://wa.link/qeaey2" target=”_blank” class="whatsapp-btn" id="wsp_boton_flotante">
        <i class="bi bi-whatsapp"></i>
        </a>
        <div class="whatsapp-message"><h4 class="text-white pt-1">!Escríbenos!</h4></div>
    </div>

    <div class="container-fluid bg-dark footer mt-5 py-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-4 col-md-6">
                    <h4 class="text-white mb-4">Contactanos</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Calle Cantuarias Nro. 160- Oficina 401 urb Tello Miraflores</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+51 978 266 689</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>consultas@encoredigitalperu.com</p>
                    <div class="d-flex pt-3">                       
                        <a class="btn btn-square btn-light rounded-circle me-2" href="https://www.facebook.com/encoredigital.peru"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-light rounded-circle me-2" href="https://www.instagram.com/encoredigital.peru"><i class="fab fa-instagram"></i></a>
                        <a class="btn btn-square btn-light rounded-circle me-2" href="https://www.youtube.com/@encoredigitalperu"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <h4 class="text-white mb-4">Enlaces</h4>
                    <a class="btn btn-link" href="marketing-digital.html">Marketing Digital</a>
                    <a class="btn btn-link" href="social-media.html">Gestión de Redes Social</a>
                    <a class="btn btn-link" href="branding.html">Diseño Gráfico y Branding</a>
                    <a class="btn btn-link" href="produccion-multimedia.html">Producción Multimedia</a>
                    <a class="btn btn-link" href="desarrollo-web.html">Diseño y Desarrollo Web</a>
                </div>
                <div class="col-lg-4 col-md-6">
                    <a href="index.html" class="navbar-brand">
                        <img src="img/logo_blanco.png" class="img-fluid" alt="img">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->

    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>