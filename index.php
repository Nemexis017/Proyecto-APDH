<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include('componentes/head.php')?>
  </head>
  <!-- cuerpo de pagina -->
  <body>
    <!-- inicio barra de navegacion -->
    <header class="header_area">
      <?php include('componentes/nav.php')?>
    </header>
    <!-- fin barra de navegacion -->
    <!--================ Iniciar área del banner de inicio =================-->
    <section class="home_banner_area">
      <div class="banner_inner">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="banner_content text-center">
                <p class="text-uppercase">
                  Institución Educativa María Auxiliadora
                </p>
                <h2 class="text-uppercase mt-4 mb-5">
                  El camino de la educación
                </h2>
                <div>
                  <a href="historia.php" class="primary-btn2 mb-3 mb-sm-0">Historia</a>
                  <a href="acerca.php" class="primary-btn ml-sm-3 ml-0">Sobre nosotros</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--================ Fin área del banner de inicio =================-->

    <!--================ Start Feature Area =================-->
    <section class="feature_area section_gap_top">
      <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-5">
              <div class="main_title">
                <h2 class="mb-3">Valores Institucionales</h2>
                <p>
                  "Educad a los niños, y no será necesario castigar a los hombres"
                </p>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-4 col-md-6">
              <div class="single_feature font-valores">
                <div class="icon d-flex justify-content-center">
                  <img src="img/fotosColegio/disciplina.png" alt=""  width="100px">
                </div>
                <div class="desc">
                  <h4 class="mt-3 mb-2">Disciplina</h4>
                  <p class="text-justify">
                    Un entorno educativo cuidadosamente estructurado y organizado establece
                    los cimientos esenciales para un aprendizaje efectivo y un crecimiento personal enriquecedor. La disciplina, en nuestro enfoque, va más allá de la simple conformidad con normas; 
                    se trata de cultivar una cultura arraigada en el respeto mutuo.
                  </p>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6">
              <div class="single_feature">
                <div class="icon d-flex justify-content-center">
                  <img src="img/fotosColegio/respeto.png" alt="imgen-respeto"  width="100px">
                </div>
                <div class="desc">
                  <h4 class="mt-3 mb-2">Respeto</h4>
                  <p class="text-justify">
                    En nuestro colegio, el respeto es un valor fundamental que se promueve con el máximo 
                    respeto hacia todos los miembros de la comunidad educativa. Creemos firmemente que un ambiente escolar en el que se fomente el respeto mutuo es esencial 
                    para el aprendizaje efectivo y el crecimiento personal de nuestros estudiantes.
                  </p>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6">
              <div class="single_feature">
                <div class="icon d-flex justify-content-center">
                  <img src="img/fotosColegio/solidaridad.png" alt="imagen-solidaridad"  width="100px">
                </div>
                <div class="desc">
                  <h4 class="mt-3 mb-2">Solidaridad</h4>
                  <p class="text-justify">
                    En nuestro colegio, la solidaridad ocupa un lugar central en nuestra filosofía educativa. 
                    Valoramos y promovemos este principio con un profundo sentido de compromiso. Creemos firmemente que 
                    la solidaridad es una piedra angular que contribuye a crear un entorno escolar enriquecedor.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
    </section>
    <!--================ End Feature Area =================-->

    <!--================ Enventos Inmportantes start =================-->
    <div class="popular_courses">
      <div class="container">
        <!-- titulo start -->
        <div class="row justify-content-center">
          <div class="col-lg-5">
            <div class="main_title">
              <h2 class="mb-3">Los mejores momentos</h2>
            </div>
          </div>
        </div>
        <!-- titulo end -->
        <div class="row">
          <!-- single course -->
          <div class="col-lg-12">
            <div class="owl-carousel active_course">
              <div class="single_course">
                <div class="course_head">
                  <img class="img-fluid" src="img/fotosColegio/eventos/diaIdioma.jpg" alt="" />
                </div>
                <div class="course_content">
                  <span class="price">
                    <img src="img/iconos/eventos/mujer-espanola.png" alt="">
                  </span>
                  <h4 class="mb-3">
                    <a href="course-details.html">Dia de la lengua española</a>
                  </h4>
                  <p class="text-justify">
                    En nuestra institución, celebramos el Día del Idioma Español para destacar la importancia 
                    y belleza de nuestra lengua materna.
                  </p>
                </div>
              </div>
              

              <div class="single_course">
                <div class="course_head">
                  <img class="img-fluid" src="img/fotosColegio/eventos/diaMaestro.jpg" alt="" />
                </div>
                <div class="course_content">
                  <span class="price">
                    <img src="img/iconos/eventos/maestro.png" alt="">
                  </span>
                  <h4 class="mb-3">
                    <a href="course-details.html">Dia del profesor</a>
                  </h4>
                  <p>
                    El Día del Profesor en nuestra escuela es un día especial para honrar y agradecer
                    a nuestros dedicados educadores. Reconocemos su valioso compromiso en la formación
                    de futuras generaciones.
                  </p>
                </div>
              </div>

              <div class="single_course">
                <div class="course_head">
                  <img class="img-fluid" src="img/fotosColegio/eventos/deportivoMestros.jpg" alt="" />
                </div>
                <div class="course_content">
                  <span class="price">
                    <img src="img/iconos/eventos/docentePortes.png" alt="">
                  </span>
                  <h4 class="mb-3">
                    <a href="course-details.html">Deporte con docentes</a>
                  </h4>
                  <p class="text-justify">
                    Nuestros profesores se unen en actividades deportivas para fomentar
                    el compañerismo y el bienestar.
                  </p>
                </div>
              </div>

              <div class="single_course">
                <div class="course_head">
                  <img class="img-fluid" src="img/fotosColegio/eventos/basar.jpg" alt="" />
                </div>
                <div class="course_content">
                  <span class="price">
                    <img src="img/iconos/eventos/compartir.png" alt="">
                  </span>
                  <h4 class="mb-3">
                    <a href="course-details.html">Gran demostracion de comidas tipicas</a>
                  </h4>
                  <p>
                    Realizamos demostraciones de comidas típicas para celebrar la diversidad cultural
                    y disfrutar de sabores auténticos de todo el mundo.
                  </p>
                </div>
              </div>
            </div>
            <div class="col-12 row d-flex justify-content-sm-center">
              <a href="#" class="primary-btn">Ver más detalles</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--================ Eventos Importantes end =================-->

    <!--================ Estudiantes startat =================-->
    <div class="section_gap registration_area">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-7">
            <div class="row clock_sec clockdiv" id="clockdiv">
              <div class="col-lg-12">
                <h1 class="mb-3">Estudiantes</h1>
                <p>
                  Nuestra comunidad es como un engranaje perfectamente sincronizado
                  en el que nuestras sedes operan con precisión y eficiencia. Este ambiente de 
                  aprendizaje contribuye a moldear y nutrir a estudiantes de alta calidad, preparándolos 
                  para un futuro prometedor y lleno de oportunidades
                </p>
              </div>
              <div class="col clockinner1 clockinner">
                <h1 class="days">430</h1>
                <p class="smalltext">Secundaria</p>
              </div>
              <div class="col clockinner clockinner1">
                <h1 class="hours">250</h1>
                <p class="smalltext">Primaria</p>
              </div>
              <div class="col clockinner clockinner1">
                <h1 class="minutes">35</h1>
                <p class="smalltext">Rural</p>
              </div>
              <div class="col clockinner clockinner1">
                <h1 class="seconds">60</h1>
                <p class="smalltext">Pre-Escolar</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 offset-lg-1">
            <div class="register_form">
              <h3>Contáctanos</h3>
              <p>Anímate a participar de esta comunidad educativa</p>
              <form class="form_area" id="myForm" action="mail.html" method="post">
                <div class="row">
                  <div class="col-lg-12">
                    <p><i class="fa-solid fa-phone margi"></i> +57 3112102667</p>
                    <p><i class="fa-solid fa-envelope margi"></i> mariauxiliadora.iquira@sedhuila.gov.co</p>
                    <p><i class="fa-solid fa-location-dot margi"></i> KR 9 # 6-30, HUILA, IQUIRA.</p>
                  </div>
                  <div class="col-lg-12 text-center">
                    <a href="contact.php" class="primary-btn">Ver más</a>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--================ Estudiantes end =================-->

    <!--================ Start Trainers Area =================-->
    <section class="trainer_area section_gap_top">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-5">
            <div class="main_title">
              <h2 class="mb-3">Directivos</h2>
            </div>
          </div>
        </div>
        <div class="row justify-content-center d-flex align-items-center">
          <div class="col-lg-3 col-md-6 col-sm-12 single-trainer">
            <div class="thumb d-flex justify-content-sm-center">
              <img class="img-fluid" src="img/.jpeg" alt="" />
            </div>
            <div class="meta-text text-sm-center ">
              <h4>Alirio Guevara Sanchez</h4>
              <p class="designation">Rector</p>
              <div class="mb-4">
                <p>
                  Mantiene el control y el orden de colegio y sus intituciones,cuida y ama a maria auxiliadora, es el pilar de los estudiantes.
                </p>
              </div>
              <div class="align-items-center justify-content-center d-flex">
                <a href="#"><i class="ti-facebook"></i></a>
                <a href="#"><i class="ti-twitter"></i></a>
                <a href="#"><i class="ti-linkedin"></i></a>
                <a href="#"><i class="ti-pinterest"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 col-sm-12 single-trainer">
            <div class="thumb d-flex justify-content-sm-center">
              <img class="img-fluid" src="img/" alt="" />
            </div>
            <div class="meta-text text-sm-center">
              <h4>Mercy Trujillo</h4>
              <p class="designation">Coordinadora Disciplinaria</p>
              <div class="mb-4">
                <p>
                 Encargada de mantener la disciplina adentro de la institución.Hacer protocolos y mantener control, vela por el bienestar de los estudiantes .
                </p>
              </div>
              <div class="align-items-center justify-content-center d-flex">
                <a href="#"><i class="ti-facebook"></i></a>
                <a href="#"><i class="ti-twitter"></i></a>
                <a href="#"><i class="ti-linkedin"></i></a>
                <a href="#"><i class="ti-pinterest"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 col-sm-12 single-trainer">
            <div class="thumb d-flex justify-content-sm-center">
              <img class="img-fluid" src="img/.jpeg" alt="" />
            </div>
            <div class="meta-text text-sm-center">
              <h4>Manuel Pisso</h4>
              <p class="designation">Coordinador Académico</p>
              <div class="mb-4">
                <p>
                  Organiza los horarios y planifica los periodos y habilita la plataforma de evaluación.Ayuda a mantener el orden en la intitución.
                </p>
              </div>
              <div class="align-items-center justify-content-center d-flex">
                <a href="#"><i class="ti-facebook"></i></a>
                <a href="#"><i class="ti-twitter"></i></a>
                <a href="#"><i class="ti-linkedin"></i></a>
                <a href="#"><i class="ti-pinterest"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 col-sm-12 single-trainer">
            <div class="thumb d-flex justify-content-sm-center">
              <img class="img-fluid" src="img/fanny.jpeg" alt="" />
            </div>
            <div class="meta-text text-sm-center">
              <h4>Fanny Tamayo Martinez</h4>
              <p class="designation">Secretaria</p>
              <div class="mb-4">
                <p>
                  Lleva todo el registro del colegio organizado por años y hace las matriculas para los nuevos y viejos estudiantes de la institución.
                </p>
              </div>
              <div class="align-items-center justify-content-center d-flex">
                <a href="#"><i class="ti-facebook"></i></a>
                <a href="#"><i class="ti-twitter"></i></a>
                <a href="#"><i class="ti-linkedin"></i></a>
                <a href="#"><i class="ti-pinterest"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--================ End Trainers Area =================-->

    <!--================ Start Events Area =================-->
    <div class="events_area">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-5">
            <div class="main_title">
              <h2 class="mb-3 text-white">Jornadas Institucionales</h2>
              <p>
                “La educación es el arma más poderosa para cambiar el mundo”
              </p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6 col-md-6">
            <div class="single_event position-relative">
              <div class="event_thumb">
                <img src="img/fotosColegio/colegio/dia1.jpg" width="550px"  height="400px" alt="" />
              </div>
              <div class="event_details">
                <div class="d-flex mb-4">
                  <div class="date">
                    <img src="img/fotosColegio/conocimiento.png" alt="" width="50px">
                  </div>

                  <div class="time-location">
                    <p>
                      <span class="ti-time mr-2"></span> 7:00 AM - 1:30 PM
                    </p>
                    <p>
                      JORNADA DIURNA
                    </p>
                  </div>
                </div>
                <p>
                  En esta estan la mayoría de estudiantes,estudian más horas y presentan trabajos diariamente.
                </p>
                <a href="#" class="primary-btn rounded-0 mt-3">View Details</a>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-6">
            <div class="single_event position-relative">
              <div class="event_thumb">
                <img src="img/fotosColegio/colegio/noche1.jpg"  height="400px"  alt="" />
              </div>
              <div class="event_details">
                <div class="d-flex mb-4">

                  <div class="date">
                    <img src="img/fotosColegio/modo-nocturno.png" alt="" width="45px">
                  </div>

                  <div class="time-location">
                    <p>
                      <span class="ti-time mr-2"></span>5:00 PM - 9:00 PM  
                    </p>
                    <p>
                       JORNADA NOCTURNA
                    </p>
                  </div>
                </div>
                <p>
                 Los estudiantes de la nocturna tienen clases y presentan trabajos de la misma manera que la jornada diurna.
                </p>
                <a href="#" class="primary-btn rounded-0 mt-3">View Details</a>
              </div>
            </div>
          </div>

          <div class="col-lg-12">
            <div class="text-center pt-lg-5 pt-3">
              <a href="#" class="event-link">
                View All Event <img src="img/next.png" alt="" />
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--================ End Events Area =================-->

    <!--================ Start Testimonial Area =================-->
    <section class="about_area section_gap">
      <div class="container">
        <div class="row h_blog_item">
          <div class="col-lg-6">
            <div class="h_blog_img">
              <img class="img-fluid" src="img/csmEducativo3.jpg" alt="" width="760px" >
            </div>
          </div>
          <div class="col-lg-6">
            <div class="h_blog_text">
              <div class="h_blog_text_inner left right">
                <h4>Plataforma de notas</h4>
                <p class="text-justify">
                  Nuestra institución educativa ha implementado una plataforma de calificaciones llamada CSM. 
                  Con esta herramienta, mantenemos un registro preciso del rendimiento de los estudiantes, permitiendo 
                  un acceso sencillo a calificaciones, asistencia y comunicación con los docentes. CSM es una solución 
                  eficaz para mantener a todos informados sobre el progreso académico de nuestros alumnos.
                </p>
                <a class="primary-btn" href="https://play.google.com/store/apps/details?id=com.csm.educativo&hl=es_CO&gl=US" TARGET="_BLANK" >
                  Descarga la aplicacion
                  <i class="ti-arrow-right ml-1"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--================ End Testimonial Area =================-->

    <!--================ Start footer Area  =================-->
    <footer class="footer-area section_gap">
      <?php include('componentes/footer.php')?>
    </footer>
    <!--================ End footer Area  =================-->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
    <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="js/owl-carousel-thumb.min.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/mail-script.js"></script>
    <!--gmaps Js-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
    <script src="js/gmaps.min.js"></script>
    <script src="js/theme.js"></script>
  </body>
</html>
