<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contactos</title>
    <link href="stylecont.css" rel="stylesheet" type="text/css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
      integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    />
  </head>
  <body>
    <header class="header">
      <div class="menu container">
        <a href="#" class="logo"
          ><img
            src="img/LOGO 2022 NEGRO sin fondo (1).png"
            width="500"
            height="200"
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
            <li>
              <a href="index.php" class="enlace texto"><b>Inicio</b></a>
            </li>
            <li>
              <a href="informacion.php" class="enlace texto"><b>Nosotros</b></a>
            </li>
            <li>
              <a href="servicios.php" class="enlace texto"><b>Servicios</b></a>
            </li>
            <li>
              <a href="contactos.php"><b>Contactos</b></a>
            </li>
          </ul>
        </nav>
      </div>
    </header>

    <div class="contact-wrap">
      <div class="contact-in">
        <h1>Contacto Info</h1>
        <h2><i class="fa fa-phone" aria-hidden="true"></i>Telefono</h2>
        <p>70320645-69665639</p>
        <h2><i class="fa fa-envelope" aria-hidden="true"></i>Email</h2>
        <p>@gildancestudioballet</p>
        <h2><i class="fa fa-map-marker" aria-hidden="true"></i>Direccion</h2>
        <p>Calle Potosi #174, sucre, bolivia</p>
        <ul>
          <li>
            <a
              href="https://www.facebook.com/photo/?fbid=558430446318496&set=a.558430456318495&__tn__=%3C"
              ><i class="fa fa-facebook-square" aria-hidden="true"></i
            ></a>
          </li>
          <li>
            <a href="#"><i class="fa fa-whatsapp" aria-hidden="true"></i></a>
          </li>
          <li>
            <a
              href="https://www.instagram.com/gildance_studio_ballet?igsh=MTdrN3psbW4wYzVyeQ=="
              ><i class="fa fa-instagram" aria-hidden="true"></i
            ></a>
          </li>
          <li>
            <a href="#"
              ><i class="fa fa-youtube-play" aria-hidden="true"></i
            ></a>
          </li>
        </ul>
      </div>
      <div class="contact-in">
        <h1>Dejanos un Mensaje</h1>
        <form method="text" action="agregar.php">
          <input
            type="text"
            placeholder="Nombre"
            name="name"
            class="contact-in-input"
          />
          <input
            type="text"
            placeholder="correo"
            name="email"
            class="contact-in-input"
          />
          <input
            type="text"
            placeholder="Telefono"
            name="phone"
            class="contact-in-input"
          />
          <textarea
            placeholder="Mensaje"
            name="message"
            cols="50"
            rows="5"
            class="contact-in-textarea"
          ></textarea>
          <input type="submit" value="enviar" class="contact-in-input" />
        </form>
      </div>
      <div class="contact-in">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3771.3137100634845!2d-65.25828512559157!3d-19.049939911506833!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x93fbcf30cdc48f43%3A0x9f48d7af1b38b6b5!2sPotosi%20174%2C%20Sucre!5e0!3m2!1ses!2sbo!4v1730324426069!5m2!1ses!2sbo"
          width="100%"
          height="auto"
          style="border: 0"
          allowfullscreen=""
          loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"
        >
        </iframe>
      </div>
    </div>
    <?php
        include("send.php");
    ?>

    <script>
      function myFunction() {
        window.location.href = "http://localhost/PAGINA_WEB";
      }
    </script>
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
            <a class="fa-brands fa-whatsapp" style="color: #ffffff"></a>
            <a class="fa-brands fa-facebook" style="color: #ffffff"></a>
            <a class="fa-brands fa-instagram" style="color: #ffffff"></a>
            <a class="fa-brands fa-tiktok" style="color: #ffffff"></a>
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
  </body>
</html>
