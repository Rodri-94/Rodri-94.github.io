<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>informacion</title>
    <link rel="stylesheet" href="informacion.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
      integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <header class="hearder">
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
    <div class="container">
      <div class="card">
        <figure>
          <img src="img/principal 1.jpg" width="250px" height="250px" />
        </figure>
        <div class="contenido">
          <h3>Director General</h3>
          <p>
            <b>EDSON ALEX GIL CURCUY</b><br />
            inicio su vida artistica a los 14 años en el Ballet Municipal de
            Sucre como bailarin de un grupo juvenil de folklore, posteriormente
            ya en 2012 se unio a la academia de danza GilDance como bailarin de
            un elenco pre estable, al cabo de un año ascendio al elenco oficial
            ya como bailarin profesional.<br />
            Posteriormente de los 4 años como bailarin profesional inicio el
            gran reto de formarse como instructor, de el cual ya lleva mas de 10
            años dirigiendo desde niños, jovenes y al prestigioso Elenco Oficial
            de la academia de danza GilDance Studio ballet.
          </p>
          <button href="#">Whatsapp</button>
        </div>
      </div>
      <div class="card">
        <figure>
          <img src="img/fotorodri.jpg" width="250px" height="250px" />
        </figure>
        <div class="contenido">
          <h3>Istructor</h3>
          <p>
            <b>DAVID RODRIGO BARRIGA CRUZ</b><br />
            inicio su vida artistica a los 14 años en el Ballet Municipal de
            Sucre como bailarin de un grupo juvenil de folklore, posteriormente
            ya en 2012 se unio a la academia de danza GilDance como bailarin de
            un elenco pre estable, al cabo de un año ascendio al elenco oficial
            ya como bailarin profesional.<br />
            Posteriormente de los 4 años como bailarin profesional inicio el
            gran reto de formarse como instructor, de el cual ya lleva mas de 10
            años dirigiendo desde niños, jovenes y al prestigioso Elenco Oficial
            de la academia de danza GilDance Studio ballet.
          </p>
          <button class="boton-whatsapp" onclick="window.open()">
            Whatsapp
          </button>
        </div>
      </div>
      <div class="card">
        <figure>
          <img src="img/valemedio.jpg" width="250px" height="250px" />
        </figure>
        <div class="contenido">
          <h3>Instructora</h3>
          <p>
            <b>ALISO VALERIA SOTO VILDOZO</b> <br />Inicio si vida artística a
            los 3 años en el Ballet Municipal de Sucre como bailarina del grupo
            infantil a los 8 años de edad entro a la academia de danzas Amparo
            Silva formando parte del elenco infantil en el área de ballet
            clásico posteriormente continuo en el área Folklórica en el año 2015
            formando parte del elenco Preestable de la academia de danza
            GilDacnce a los 14 años de edad. Al cabo de un año ascendió al
            elenco oficial. Al cabo de 3 años inicio el gran reto de formarse
            como instructora. Actualmente continúa con la dicha de formar parte
            de la familia GilDance Studio Ballet.
          </p>
          <button href="#">Whatsapp</button>
        </div>
      </div>
    </div>
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
