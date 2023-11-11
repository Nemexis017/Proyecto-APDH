<?php
  include('librerias/conexion.php');
  $conexion = new conexion();
  $sqlProfesores=  "SELECT * FROM mauxi.profesores"; 
  $resultadoProfesores= $conexion->consulta($sqlProfesores);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include('componentes/head.php') ?>
  </head>

  <body>
    <!--================ Start Header Menu Area =================-->
    <header class="header_area white-header">
      <?php include('componentes/nav.php')?>
    </header>
    <!--================ End Header Menu Area =================-->

    <!--================Home Banner Area =================-->
    <section class="banner_area">
      <div class="banner_inner d-flex align-items-center">
        <div class="overlay"></div>
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-6">
              <div class="banner_content text-center">
                <h2>Profesores Secundaria</h2>
                <div class="page_link">
                  <a href="index.php">Inicio</a>
                  <a href="profesores_segudaria.php">Secundaria</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--================End Home Banner Area =================-->

        <!--================ Start Trainers Area =================-->
        <section class="trainer_area section_gap_top">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-5">
            <div class="main_title">
              <h2 class="mb-3">Secundaria</h2>
              <p>
                "El único límite es tu mente"
              </p>
            </div>
          </div>
        </div>
        <div class="row justify-content-center d-flex align-items-center">
          <div class="col-lg-3 col-md-6 col-sm-12 single-trainer">
            <div class="thumb d-flex justify-content-sm-center">
              <img class="img-fluid" src="img/fotos_profesores/secundaria/vicente.jpeg" alt="" />
            </div>
            <div class="meta-text text-sm-center">
              <h4>Jose Vicente Quimbaya</h4>
              <p class="designation">Lic. Matemáticas</p>
              <div class="mb-4">
              </div>
              <div class="align-items-center justify-content-center d-flex">
                <a href="https://www.facebook.com/toquivijo?mibextid=LQQJ4d"><i class="ti-facebook"></i></a>
                <a href="#"><i class="ti-twitter"></i></a>
                <a href="#"><i class="ti-linkedin"></i></a>
                <a href="#"><i class="ti-pinterest"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 col-sm-12 single-trainer">
            <div class="thumb d-flex justify-content-sm-center">
              <img class="img-fluid" src="img/fotos_profesores/secundaria/andres.jpeg" alt="" />
            </div>
            <div class="meta-text text-sm-center">
              <h4>Andrés Felipe Gazón Artunduaga</h4>
              <p class="designation">Lic. Lengua Castellana</p>
              <div class="mb-4">
                <p>
                </p>
              </div>
              <div class="align-items-center justify-content-center d-flex">
                <a href="https://www.facebook.com/andresfelipe.garzonartunduaga?mibextid=LQQJ4d"><i class="ti-facebook"></i></a>
                <a href="#"><i class="ti-twitter"></i></a>
                <a href="#"><i class="ti-linkedin"></i></a>
                <a href="#"><i class="ti-pinterest"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 col-sm-12 single-trainer">
            <div class="thumb d-flex justify-content-sm-center">
              <img class="img-fluid" src="img/fotos_profesores/secundaria/yamile.jpg"  alt="" />
            </div>
            <div class="meta-text text-sm-center">
              <h4>Yamilet Conde Valencia</h4>
              <p class="designation">Lic. Educación Ambiental</p>
              <div class="mb-4">
                <p>
                </p>
              </div>
              <div class="align-items-center justify-content-center d-flex">
                <a href="https://www.facebook.com/yamilet.conde.92?mibextid=LQQJ4d"><i class="ti-facebook"></i></a>
                <a href="#"><i class="ti-twitter"></i></a>
                <a href="#"><i class="ti-linkedin"></i></a>
                <a href="#"><i class="ti-pinterest"></i></a>
              </div>
            </div>
          </div>


          <div class="col-lg-3 col-md-6 col-sm-12 single-trainer">
            <div class="thumb d-flex justify-content-sm-center">
              <img class="img-fluid" src="img/fotos_profesores/secundaria/adriana.jpeg" alt="" />
            </div>
            <div class="meta-text text-sm-center">
              <h4>Adriana Milena Castro Gonzales</h4>
              <p class="designation">Comunicadora Social</p>
              <div class="mb-4">
                <p>
                </p>
              </div>
              <div class="align-items-center justify-content-center d-flex">
                <a href="https://www.facebook.com/adrianamilena.castrogonzalez?mibextid=LQQJ4d"><i class="ti-facebook"></i></a>
                <a href="#"><i class="ti-twitter"></i></a>
                <a href="#"><i class="ti-linkedin"></i></a>
                <a href="#"><i class="ti-pinterest"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 col-sm-12 single-trainer">
            <div class="thumb d-flex justify-content-sm-center">
              <img class="img-fluid" src="img/fotos_profesores/secundaria/mafe.png" alt="" />
            </div>
            <div class="meta-text text-sm-center">
              <h4>María F. Coronado</h4>
              <p class="designation">normalista</p>
              <div class="mb-4">
                <p>
                </p>
              </div>
              <div class="align-items-center justify-content-center d-flex">
                <a href="https://www.facebook.com/gladys.tovarbrand?mibextid=LQQJ4d"><i class="ti-facebook"></i></a>
                <a href="#"><i class="ti-twitter"></i></a>
                <a href="#"><i class="ti-linkedin"></i></a>
                <a href="#"><i class="ti-pinterest"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 col-sm-12 single-trainer">
            <div class="thumb d-flex justify-content-sm-center">
              <img class="img-fluid" src="img/fotos_profesores/secundaria/gladys.jpeg" alt="" />
            </div>
            <div class="meta-text text-sm-center">
              <h4>Gladys Tovar Brand</h4>
              <p class="designation">Lic. Ciencias Sociales</p>
              <div class="mb-4">
                <p>
                </p>
              </div>
              <div class="align-items-center justify-content-center d-flex">
                <a href="https://www.facebook.com/gladys.tovarbrand?mibextid=LQQJ4d"><i class="ti-facebook"></i></a>
                <a href="#"><i class="ti-twitter"></i></a>
                <a href="#"><i class="ti-linkedin"></i></a>
                <a href="#"><i class="ti-pinterest"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 col-sm-12 single-trainer">
            <div class="thumb d-flex justify-content-sm-center">
              <img class="img-fluid" src="img/fotos_profesores/secundaria/chela.jpeg" alt="" />
            </div>
            <div class="meta-text text-sm-center">
              <h4>Graciela Cardozo</h4>
              <p class="designation">Lic. Ciencias Naturales</p>
              <div class="mb-4">
                <p>
                </p>
              </div>
              <div class="align-items-center justify-content-center d-flex">
                <a href="https://www.facebook.com/chela.cardozo.3?mibextid=LQQJ4d"><i class="ti-facebook"></i></a>
                <a href="#"><i class="ti-twitter"></i></a>
                <a href="#"><i class="ti-linkedin"></i></a>
                <a href="#"><i class="ti-pinterest"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 col-sm-12 single-trainer">
            <div class="thumb d-flex justify-content-sm-center">
              <img class="img-fluid" src="img/fotos_profesores/secundaria/wilson.jpg" alt="" />
            </div>
            <div class="meta-text text-sm-center">
              <h4>Wilson  Guevara</h4>
              <p class="designation">Lic. Ciencias Naturales</p>
              <div class="mb-4">
                <p>
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

          <?php 
            foreach($resultadoProfesores as $filaProfesores){
              $nombreProfesor = $filaProfesores['profesoresNombres'];
              $primerApellidoProfesor = $filaProfesores['profesoresPrimerApellido'];
              $titulosProfesor = $filaProfesores['profesoresTitulos'];
              $fotografia = $filaProfesores['profesoresFotografia'];

              echo '
                <div class="col-lg-3 col-md-6 col-sm-12 single-trainer">
                  <div class="thumb d-flex justify-content-sm-center">
                    <img class="img-fluid" src="'.$fotografia.'" alt="" />
                  </div>
                  <div class="meta-text text-sm-center">
                    <h4>'.$nombreProfesor. $primerApellidoProfesor.'</h4>
                    <p class="designation">'.$titulosProfesor.'</p>
                    <div class="mb-4">
                      <p>
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
              ';
            }
          
          
          ?>
          
        </div>
      </div>
    </section>
    <!--================ End Trainers Area =================-->

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