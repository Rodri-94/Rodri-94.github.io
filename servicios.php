<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-compatible" content="IE-edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
      integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Anton+SC&family=Nunito:ital,wght@0,200..1000;1,200..1000&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css"
    />
    <link rel="stylesheet" href="styleserv.css" />
  </head>
  <body>
    <header class="header">
    <div class="menu container">
      <a href="#" class="logo"><img src="img/LOGO 2022 NEGRO sin fondo (1).png" width="500" height="200"
      /></a>
      <input type="checkbox" id="menu" />
      <label for="menu">
        <img
          src="img/menu.png"
          class="menu-icono"
          width="20"
          height="20"
          alt="menu"
        />
      </label>
      <nav class="navbar">
        <ul>
          <li><a href="index.php" class="enlace texto"><b>Inicio</b></a></li>
          <li><a href="informacion.php" class="enlace texto"><b>Nosotros</b></a></li>
          <li><a href="servicios.php" class="enlace texto"><b>Servicios</b></a></li>
          <li><a href="contactos.php"><b>Contactos</b></a></li>
        </ul>
      </nav>
    </div>
    </header>

    <div id="carouselE" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button
          type="button"
          data-bs-target="#carouselE"
          data-bs-slide-to="0"
          class="active"
          aria-current="true"
          aria-label="slide 1"
        ></button>
        <button
          type="button"
          data-bs-target="#carouselE"
          data-bs-slide-to="1"
          aria-current="true"
          aria-label="slide 2"
        ></button>
        <button
          type="button"
          data-bs-target="#carouselE"
          data-bs-slide-to="2"
          aria-current="true"
          aria-label="slide 3"
        ></button>
        <button
          type="button"
          data-bs-target="#carouselE"
          data-bs-slide-to="3"
          aria-current="true"
          aria-label="slide 4"
        ></button>
        <button
          type="button"
          data-bs-target="#carouselE"
          data-bs-slide-to="4"
          aria-current="true"
          aria-label="slide 5"
        ></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img
            src="img/portclasico.png"
            class="d-block w-100"
            alt=""
          />
          <div class="carousel-caption">
            <h5>Ballet Clasico</h5>
            <p>
              El ballet clásico es el más formal dentro de los estilos de ballet y adhiere a la técnica tradicional de ballet. <br>Hay variaciones según el lugar de origen como el ballet ruso, el ballet francés, el ballet cubano o el ballet italiano. <br>
              Entre sus características distintivas están el uso de las puntas y precisos movimientos, y sus cualidades etéreas.
            </p>
            
          </div>
        </div>

        <div class="carousel-item">
          <img
            src="img/67942574_1399024946964282_551774169344245760_n.jpg"
            class="d-block w-100"
            alt=""
          />
          <div class="carousel-caption">
            <h5>Ballet Folklorico</h5>
            <p>
              El folklore es la cultura de un pueblo, que se identifica con una determinada forma de ser y se refleja en la música, bailes, <br> leyendas, la comida y sus riquisimas tradiciones e incluso en el diario vivir.!
            </p>
            
          </div>
        </div>

        <div class="carousel-item">
          <img src="img/portcontemp.png" class="d-block w-100" alt="" />
          <div class="carousel-caption">
            <h5>Contemporaneo</h5>
            <p>
              La danza contemporánea puede definirse como un estilo resultante de fusionar otros que encuentran su base en el ballet clásico <br>pero está exenta de el rigor de esta disciplina.<br> A diferencia de la danza clásica, el baile contemporáneo adquiere una expresión corporal más libre en cuanto a los movimientos.
            </p>
            
          </div>
        </div>

        <div class="carousel-item">
          <img src="img/portarabe.png" class="d-block w-100" alt="" />
          <div class="carousel-caption">
            <h5>Danza Arabe</h5>
            <p>
              El belly dance es una danza que se estudia y se practica en todo el mundo, pero su meca es El Cairo, su historia se desarrolló <br>y se desarrolla dentro y fuera de Egipto, siempre en torno a él.<br>
          </div>
        </div>

        <div class="carousel-item">
          <img
            src="img/portmodern.png"
            class="d-block w-100"
            alt=""
          />
          <div class="carousel-caption">
            <h5>Danza Moderna</h5>
            <p>
              La danza moderna nace paralelamente en Estados Unidos y en Europa. El punto de partida es el mismo romper con <br>las rígidas normas de la danza clásica y encontrar nuevas formas de expresión con el cuerpo.
            </p>
            
          </div>
        </div>
      </div>

      <button
        class="carousel-control-prev"
        type="button"
        data-bs-target="#carouselE"
        data-bs-slide="prev"
      >
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>

      <button
        class="carousel-control-next"
        type="button"
        data-bs-target="#carouselE"
        data-bs-slide="next"
      >
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

    <section class="about section-padding">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-12 col-12">
            <div class="about-img">
              <img src="img/saltando.png" class="img-fluid" alt="" />
            </div>
          </div>
          <div class="col-lg-8 col-md-12 col-12 ps-lg-5 mt-md-5">
            <div class="about-text text-black">
              <h2>Danzas Urbanas<br />en Bolivia</h2>
              <p>
                Se puede decir que estas danzas son las más actuales o de las últimas en surgir. Están relacionadas a sectores pequeños y jóvenes de la ciudad que aman de los movimientos y estilos asociados a géneros de música urbana como el hip-hop y el rap.

                Otros grupos de la sociedad gustan otro tipo de danzas en relación a la música que los acompaña, esto refiriéndonos a géneros musicales como el pop, la música electrónica y, recientemente, el pop coreano, conocido simplemente como K-Pop.
                Muchas de estas tienen que ver con estilos y formas modernas, aunque igual existen varias que datan de la antigüedad y se mantienen hasta estos días. Sobre todo, podemos apreciar este tipo de danzas en presentaciones de diferentes instituciones entre cuerpos de bailes y academias de danza.

Un claro ejemplo de danzas artísticas son el ballet clásico y el ballet moderno. Ambos tienen que ver con movimientos en pareja o más personas, y que son altamente coordinados y expresivos. A lo largo del año, diferentes academias de danza y cuerpos de baile presentan shows en los que, como parte del acto, exponen este tipo de danzas.
              </p>
              <a href="contactos.php" class="btn btn-primary">Mas informacion</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    

    <section class="portafolio section-padding">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-header text-center text-black pb-5">
              <h2>Ultimos Espectaculos</h2>
              <p>
                En las siguientes imagenes se puede apreciar los flayers de las ultimas presentaciones y actividades realizadas por la academia de danza GilDance
              </p>
            </div>
          </div>
        </div>
        <div class="tarjetas-1">
        <div class="row">
          <div class="col-12 col-md-12 col-lg-4">
            <div class="card text-light text-center bg-dark pb-2">
              <div class="card-body text-white">
                <div class="img-area mb-4">
                  <img
                    src="img/sabadocultural (1).png"
                    class="img-fluid"
                    alt=""
                  />
                </div>
                <h3>Sabado Cultural</h3>
                <p class="lead">
                  Una actividad direccionada a la cultura nacional Boliviana, en cuanto a la Danza, Musica y Gastronomia.
                  actividad que realiza cada 3 meses en instalacines de la academia de danza GilDance, de la ciudad de Sucre-Bolivia.
                </p>
              </div>
            </div>
          </div>

          <div class="col-12 col-md-12 col-lg-4">
            <div class="card text-light text-center bg-dark pb-2">
              <div class="card-body text-white">
                <div class="img-area mb-4">
                  <img src="img/nochesdegala.png" class="img-fluid" alt="" />
                </div>
                <h3>Noches de Gala</h3>
                <p class="lead">
                  Presentacion artistica que nace junto a la fundacion de la academia de danza GilDance
                  en esta presentacion se pone en escena todo el trabajo realizado a fines de cada año, haciendo participes a la escuela.
                </p>
              </div>
            </div>
          </div>

          <div class="col-12 col-md-12 col-lg-4">
            <div class="card text-light text-center bg-dark pb-2">
              <div class="card-body text-white">
                <div class="img-area mb-4">
                  <img
                    src="img/bailandoconlaluna.png"
                    class="img-fluid"
                    alt=""
                  />
                </div>
                <h3>Obra Luna</h3>
                <p class="lead">
                  Una obra de danza neofolklorica con un toque romantico.
                  la historia gira en torno a un joven campesino, que se encuentra con la luna, expresando amor y conzuelo a travez de la danza con airesen el folklore Argentinos.
                </p>
            
              </div>
            </div>
          </div>
        </div>
        </div>
      </div>
    </section>

    <section class="team section-padding">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-header text-center text-black ob-5">
              <h2>Instructores</h2>
              <p>
                Es importante saber quien sera el proximo maestro en guiarte hacia el horizonte en el ambito artistico, mas puntual en el mundo de la danza.
                A continuacion presentamos a los mas distinguidos instructores de la academia de danza Gildance. 
              </p>
            </div>
          </div>
        </div>
        <div class="tarjetas">
        <div class="row">
          <div class="col-12 col-md-6 col-lg-3">
            <div class="card text-center bg-dark">
              <div class="card-body text-white">
                <img
                  src="img/principal 1.jpg"
                  class="img-fluid rounded-circle"
                  alt=""
                />
                <h3 class="card-title py-2">Ballet Clasico</h3>
                <p class="card-text">
                  El instructor <b>EDSON ALEX GIL CURCUY</b> dirige al Elenco Oficial del ballet clasico, tomando en cuenta tambien lleva el rol de Director General de la academia de danza GilDance<br>
                  con profesionalismo, compromiso en general.
                </p>
                <p class="socials">
                  <i class="bi bi-whatsapp tex-white mx-1"></i>
                  <i class="bi bi-facebook tex-white mx-1"></i>
                  <i class="bi bi-instagram tex-white mx-1"></i>
                  <i class="bi bi-tiktok tex-white mx-1"></i>
                </p>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-3">
            <div class="card text-center bg-dark">
              <div class="card-body text-white">
                <img
                  src="img/rodricompleto.jpg"
                  class="img-fluid rounded-circle"
                  alt=""
                />
                <h3 class="card-title py-2">Ballet Folklorico</h3>
                <p class="card-text">
                  El instructor <b>RODRIGO BARRIGA</b> dirige a dos de los mas importantes grupos folkloricos de la academia de danza GilDance:
                  Al Elenco Juvenil y al Elenco Oficial. Demostrando de forma profecional compromiso y sussus respectivos grupos.
                <p class="socials">
                  <i class="bi bi-whatsapp tex-white mx-1"></i>
                  <i class="bi bi-facebook tex-white mx-1"></i>
                  <i class="bi bi-instagram tex-white mx-1"></i>
                  <i class="bi bi-tiktok tex-white mx-1"></i>
                </p>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-3">
            <div class="card text-center bg-dark">
              <div class="card-body text-white">
                <img
                  src="img/valeentero.jpg"
                  class="img-fluid rounded-circle"
                  alt=""
                />
                <h3 class="card-title py-2">Ballet Folklorico</h3>
                <p class="card-text">
                  La instructora <b>VALERIA SOTO VILDOZO</b> dirige al grupo folklorico de adultos, conformado por padres de familia de la academia de danza GilDance.<br>
                  Demostrando de forma profecional compromiso y dedicacion en su area y respectivos grupos.
                </p>
                <p class="socials">
                  <i class="bi bi-whatsapp tex-white mx-1"></i>
                  <i class="bi bi-facebook tex-white mx-1"></i>
                  <i class="bi bi-instagram tex-white mx-1"></i>
                  <i class="bi bi-tiktok tex-white mx-1"></i>
                </p>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-3">
            <div class="card text-center bg-dark">
              <div class="card-body text-white">
                <img
                  src="img/gatuenetero.jpeg"
                  class="img-fluid rounded-circle" 
                />
                <h3 class="card-title py-2">Ballet Folklorico</h3>
                <p class="card-text">
                  El instructor <b>SERGIO ORTIZ MAMANI</b> dirige al Elenco Oficial niños, conformado por los mas pequeños de la academia de danza GilDance.<br>
                  Demostrando de forma profecional compromiso y dedicacion en su area y respectivos grupos.
                </p>
                <p class="socials">
                  <i class="bi bi-whatsapp tex-white mx-1"></i>
                  <i class="bi bi-facebook tex-white mx-1"></i>
                  <i class="bi bi-instagram tex-white mx-1"></i>
                  <i class="bi bi-tiktok tex-white mx-1"></i>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>
    </section>
    <section class="contact fa-section-padding">
      <div class="container mt-5 mb-5">
        <div class="row">
          <div class="col-md-12">
            <div class="section-header text-center text-black pb-5">
              <h2>¿Te gustaria experimentar el mundo de la Danza?</h2>
              <div class="pie">
              <p>
                
                <br><b>LA DANZA ES UN CUENTO QUE SE CUENTA CON EL CUERPO</b>
                <br><b>GILDANCE ES UN CUENTO DE CUENTOS</b>
              </p>
              </div>

            </div>
          </div>
        </div>

        </div>
      </div>
    </section>

    <footer class="pie-pagina">
      <div class="grupo-1">
        <div class="box">
          <figure>
            <a href="#">
              <img
                src="img/LOGO 2022 BLANCO sin fondo.png"
                alt="Logo Gildance"
              />
            </a>
          </figure>
        </div>
        <div class="box">
          <h2>MISION</h2>
          <p>
            Generar espacios culturales, relevantes mediante la gestión de
            actividades permanentes como servicios de la empresa y promover la
            danza y el desarrollo humano de la comunidad.
          </p>
        </div>
        <div class="box">
          <h2>VISION</h2>
          <p>
            Establecer la danza como actividad gestionada por la empresa, como
            vinculo participativo para fomentar la expresión creativa en los
            bailarines y en la comunidad en general
          </p>
        </div>
        <div class="box">
          <h2>SIGUENOS</h2>
          <div class="red-social">
            <a class="fa-brands fa-whatsapp" style="color: #ffffff;"></a>
            <a class="fa-brands fa-facebook" style="color: #ffffff;"></a>
            <a class="fa-brands fa-instagram" style="color: #ffffff;"></a>
            <a class="fa-brands fa-tiktok" style="color: #ffffff;"></a>
          </div>
        </div>
      </div>
      <div class="grupo-2">
        <small
          >&copy; 2024 <b>GilDance Studio Ballet</b> - Todos los Derechos
          Reservados</small
        >
      </div>
    </footer>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
