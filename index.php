<!DOCTYPE html>
<html lang="es">
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>GilDance Studio Ballet</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
      integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"/>
    <link rel="stylesheet" href="style.css"/>
  <head>
  <body>
    <header class="hearder">
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
            <li><a href="portada.php" class="enlace texto"><b>Inicio</b></a></li>
            <li><a href="informacion.php" class="enlace texto"><b>Nosotros</b></a></li>
            <li><a href="servicios.php" class="enlace texto"><b>Servicios</b></a></li>
            <li><a href="contactos.php"><b>Contactos</b></a></li>
          </ul>
        </nav>
      </div>

      <div class="header-content container">
        <div class="header-txt">
          <h1>
          </h1>
          <p>
            La danza es un arte que se basa en la expresión corporal,
            generalmente acompañada de música. Es una de las formas de expresión
            más ancestrales del ser humano que puede tener fines artísticos, de
            entretenimiento o religiosos. Es también llamada “el lenguaje del
            cuerpo” y se vale de una secuencia de movimientos corporales que
            acompañan de manera rítmica a la música. También es entendida como
            una expresión de emociones, ya que, en algunos casos, a través de
            los movimientos se persigue la intención de comunicar los
            sentimientos.
          </p>
          <a href="informacion.php" class="btn-1">Informacion</a>
        </div>
        <div class="header-img">
          <img src="img/ddddd.png" width="500px" height="400px"  style="border-radius: 6%;"/>
        </div>
      </div>
    </header>

    <section class="about container">
      <div class="about-img">
        <img src="img/img 1.jpg" alt="" />
      </div>
      <div class="about-txt">
        <h2>Nosotros</h2>
        <p>
          Como academia de danza GilDance, ofrecemos cursos de danzas en todos los estilos y modalidades.
          como prioridad fomentar el arte en niños, jovenes, adolecentes y adultos. de esta manera poder educar culturalmente a la poblacion en general.
          Consideramos que somos una academia distinta a las tantas que existen, por tener una versatilidad en cuanto a la enseñanza.
          Tambien consideramos la versatilidad por ser una de las pocas academias de danza a nivel nacional que realizan obras danzisticas
          referidas a diversos temas, tanto nacionales como internacionales, a si mismo tocanto temas religiosos y culturales.

          Como academia de danza GilDance, ofrecemos cursos de danzas en todos los estilos y modalidades.
          como prioridad fomentar el arte en niños, jovenes, adolecentes y adultos. de esta manera poder educar culturalmente a la poblacion en general.
        <p>
          Consideramos que somos una academia distinta a las tantas que existen, por tener una versatilidad en cuanto a la enseñanza.
          Tambien consideramos la versatilidad por ser una de las pocas academias de danza a nivel nacional que realizan obras danzisticas
          referidas a diversos temas, tanto nacionales como internacionales, a si mismo tocanto temas religiosos y culturales.
      </div>
      
    </section>
    <main class="Servicios">
      <div class="servicios-content container">
        <div class="servicio-1">
          <img src="img/ic-clasico (1).png" width="40" height="40" />
          <h3>BALLET CLASICO</h3>
        </div>
        <div class="servicio-1">
          <img src="img/ic-folklore (5).png" width="40" height="40" />
          <h3>BALLET FOLKLORICO</h3>
        </div>
        <div class="servicio-1">
          <img src="img/ic-comtempo (2).png" width="40" height="40" />
          <h3>CONTEMPORANEO</h3>
        </div>
        <div class="servicio-1">
          <img src="img/ic-arabe (3).png" width="40" height="40" />
          <h3>DANZA ARABE</h3>
        </div>
        <div class="servicio-1">
          <img src="img/ic-moderno (4).png" width="40" height="40" />
          <h3>DANZA MODERNA</h3>
        </div>
      </div>
    </main>

    <section class="formulario container">
      <form method="post" autocomplete="off">
        <h2>Registro Pre-Inscripcion</h2>
        <div class="input-group">
          <div class="input-container">
            <input type="text" name="name" placeholder="Nombre y Apellido" />
            <i class="fa-solid fa-user"></i>
          </div>
          <div class="input-container">
            <input type="date" name="date" placeholder="Edad" />
            <i class="fa-solid fa-user"></i>
          </div>

          <div class="input-container">
            <input type="tel" name="phone" placeholder="Telefono Celular" />
            <i class="fa-solid fa-phone"></i>
          </div>
          <div class="input-container">
            <input type="email" name="email" placeholder="Correo" />
            <i class="fa-solid fa-envelope"></i>
          </div>
          <div class="input-container">
            <textarea
              name="message"
              placeholder="Modalidad a Eleccion"
            ></textarea>
          </div>

          <input type="submit" name="send" class="btn" onClick="myFunction()" />
        </div>
      </form>
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

    <?php
        include("send.php");
    ?>

    <script>
      function myFunction() {
        window.location.href = "http://localhost/PAGINA_WEB"}
    </script>
  </body>
</html>
