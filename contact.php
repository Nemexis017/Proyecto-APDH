<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include('componentes/head.php')?>
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
                <h2>Contáctenos</h2>
                <div class="page_link">
                  <a href="index.php">Inicio</a>
                  <a href="contact.php">Contacto</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--================End Home Banner Area =================-->

    <!--================Contact Area =================-->
    <section class="contact_area section_gap">
      <div class="container">
        <div class="mapa-institucion">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2818.212853053639!2d-75.63575329280113!3d2.6489488655942295!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3b21569fef5b0f%3A0xa75cebe59d96bb98!2sInstitucion%20Educativa%20Maria%20Auxiliadora!5e0!3m2!1ses-419!2sco!4v1696284222118!5m2!1ses-419!2sco" width="1100" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="row">
          <div class="col-lg-3">
            <div class="contact_info">
              <div class="info_item">
                <i class="ti-home"></i>
                <h6>COLOMBIA, Huila - Iquira</h6>
                <p>Iquira</p>
              </div>
              <div class="info_item">
                <i class="ti-headphone"></i>
                <h6><a href="#">+57 3112102667</a></h6>
                <p>Lunes a sábado de 7am - 5pm</p>
              </div>
              <div class="info_item">
                <i class="ti-email"></i>
                <h6><a href="#">Soporte técnico</a></h6>
                <p>mariauxiliadora.iquira@sedhuila.gov.co</p>
              </div>
            </div>
          </div>
          <div class="col-lg-9">
            <form
              class="row contact_form needs-validation"
              action="librerias/correo.php"
              method="post"
              id="contactForm"
              novalidate="novalidate"
              novalidate

            >
              <div class="col-md-6">
                <div class="form-group">
                  <input
                    type="text"
                    class="form-control"
                    id="txtnombre"
                    name="txtNombre"
                    placeholder="Introduzca su nombre"
                    required
                  />
                </div>
                <div class="form-group">
                  <input
                    type="email"
                    class="form-control"
                    id="txtEmail"
                    name="txtEmail"
                    placeholder="Introducir la dirección de correo electrónico"
                    required
                  />
                </div>
                <div class="form-group">
                  <input
                    type="text"
                    class="form-control"
                    id="txtAsunto"
                    name="txtAsunto"
                    placeholder="Ingresar Asunto"
                    required=""
                  />
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <textarea
                    class="form-control"
                    name="txtMensaje"
                    id="txtMensaje"
                    rows="1"
                    placeholder="Introducir mensaje"
                    required
                  ></textarea>
                  <div id="validationServerUsernameFeedback" class="invalid-feedback">
                    
                  </div>
                </div>
              </div>
              <div class="col-md-12 text-right">
                <button type="submit" value="submit" class="btn primary-btn">
                  Enviar mensaje
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    <!--================Contact Area =================-->

    <!--================ start footer Area  =================-->
    <footer class="footer-area section_gap">
      <?php include('componentes/footer.php')?>
    </footer>
    <!--================ End footer Area  =================-->

    <!--================Contact Success and Error message Area =================-->
    <div id="success" class="modal modal-message fade" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button
              type="button"
              class="close"
              data-dismiss="modal"
              aria-label="Close"
            >
              <i class="ti-close"></i>
            </button>
            <h2>Thank you</h2>
            <p>Your message is successfully sent...</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Modals error -->

    <div id="error" class="modal modal-message fade" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button
              type="button"
              class="close"
              data-dismiss="modal"
              aria-label="Close"
            >
              <i class="ti-close"></i>
            </button>
            <h2>Sorry !</h2>
            <p>Something went wrong</p>
          </div>
        </div>
      </div>
    </div>
    <!--================End Contact Success and Error message Area =================-->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/validacion/validacion.js"></script>
    <script src="js/validacion/validacion.js"></script>
    <script src="js/validacion/validacion.js"></script>
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/stellar.js"></script>
    <script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
    <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="js/owl-carousel-thumb.min.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/mail-script.js"></script>
    <!--gmaps Js-->
    <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script> -->
    <script src="js/gmaps.min.js"></script>
    <script src="js/contact.js"></script>
    <script src="js/theme.js"></script>
  </body>
</html>
