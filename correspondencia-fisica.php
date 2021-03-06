<?php
if(isset($_POST['insert'])){

  $host = "127.0.0.1:3325";
  $username = "root";
  $clave = "";
  $bd = "dockliz";

    $connect = mysqli_connect($host, $username, $clave, $bd);

  $titulo_doc = $_POST['titulo_doc'];
  $departamento_origen = $_POST['departamento_origen'];
  $departamento_destino = $_POST['departamento_destino'];
  $correo_destinatario = $_POST['correo_destinatario'];
  $tipo_doc = $_POST['tipo_doc'];
  $cant_hojas = $_POST['cant_hojas'];
  $message = $_POST['message'];


  $q = "INSERT INTO `correspondencia-fisica`(`titulo_doc`, `departamento_origen`, `departamento_destino`, `correo_destinatario`, `tipo_doc`, `cant_hojas`, `message`) VALUES ('$titulo_doc', '$departamento_origen', '$departamento_destino', '$correo_destinatario', '$tipo_doc', '$cant_hojas', '$message')";

  $result = mysqli_query($connect, $q);

 if($result){
    echo "Datos ingresados correctamente";
  }else {
    echo "No se puedieron insertar";
  }

}


  ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dockliz</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/correspondencia-fisica.css">

    <!--Commons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="icon" type="image/png" href="favicon/favicon-16x16.png" sizes="16x16" />

</head>
<body>

    <header>
        <div class="header-container">
            <div class="header-subcontainer">
                <div class="logo-header">
                    <a href="index.html"><img src="img/logli.PNG" alt="Logo" class="logo"></a>
                </div>
                <div class="busqueda-header">
                    <img src="img/Republica Dominicana.png" alt="República Dominicana" class="rd">
                    <form action="#" class="search-box">
                        <input type="text" class="search-txt" placeholder="Ingresa tu búsqueda">
                        <a href="site-map.html"><i class="fa fa-search"></i></a>
                    </form>
                    <a href="index.html"><i class="text-inicio"></i>INICIO</a>
                    |
                    <a href="site-map.html"><i class="text-inicio"></i>MAPA DE SITIO</a>
                    |
                    <a href="contacts.html"><i class="text-inicio"></i>CONTACTOS</a>
                </div>
            </div>
        </div>
    </header>

    <nav>
        <ul>
            <li><a class="active" class="item-nav" href="index.html">INICIO</a></li>
            <li><a class="item-nav" href="about-us.html">NOSOTROS</a></li>
            <li><a class="item-nav" href="services.html">SERVICIOS</a></li>
            <li><a class="item-nav" href="transparency.html">TRANSPARENCIA</a></li>
            <li><a class="item-nav" href="contacts.html">CONTACTOS</a></li>
        </ul>
    </nav>

  <section>
        <div class="article-correspondencia-fisica">
            <div class="contact-container">
                <div class="well-well-sm">
                    <div class="panel-title text-center" id="title-container">
                        <h3 class="title">DOCUMENTACIÓN FISICA</h3>
                    </div>
                    <form action="correspondencia-fisica.php" class="form-background" method="POST">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">
                                        Titulo de Documento</label>
                                    <input type="text" class="form-control" name="titulo_doc" id="name" placeholder="Ingrese la el Titulo del Documento" required="required" />
                                </div>
                                <div class="form-group">
                                    <label for="subject">
                                        Departamento Origen</label>
                                    <select id="subject" name="departamento_origen" class="form-control" required="required">
                                        <option value="na" selected="">Elija Departamento:</option>
                                        <option value="Mesa de Entrada">Mesa de Entrada</option>
                                        <option value="Recursos Humanos">Recursos humanos</option>
                                        <option value="Soporte e infraestructura">Soporte e infraestructura</option>
                                        <option value="Tecnologia y Desarrollo">Tecnología y Desarrollo</option>
                                        <option value="Mensajeria">Mensajería</option>

                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="subject">
                                        Departamento Destino</label>
                                    <select id="subject" name="departamento_destino" class="form-control" required="required">
                                      <option value="na" selected="">Elija Departamento:</option>
                                      <option value="Mesa de Entrada">Mesa de Entrada</option>
                                      <option value="Recursos Humanos">Recursos humanos</option>
                                      <option value="Soporte e infraestructura">Soporte e infraestructura</option>
                                      <option value="Tecnologia y Desarrollo">Tecnología y Desarrollo</option>
                                      <option value="Mensajeria">Mensajería</option>
                                    
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="name">
                                        Correo del Destinatario</label>
                                    <input type="email" class="form-control" name="correo_destinatario" id="name" placeholder="Ingrese el Nombre del destinatario" required="required" />
                                </div>
                                <div class="form-group">
                                    <label for="name">
                                        Tipo Documento</label>
                                    <input type="text" class="form-control" name="tipo_doc" id="name" placeholder="Ingrese el Tipo de Documento" required="required" />
                                </div>
                                <div class="form-group">
                                    <label for="name">
                                        Cantidad de Hojas</label>
                                    <input type="text" class="form-control" name="cant_hojas" id="name" placeholder="Ingrese el número de hojas" required="required" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">
                                        Mensaje</label>
                                    <textarea name="message" id="message" class="form-control" rows="9" cols="25" required="required"
                                        placeholder="Mensaje"></textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="contact-image">
                                        <img src="img/banner2.jpg" alt="contact-image" class="principal-image">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                              <input type="submit" name="insert" class="btn btn-primary pull-right" value="Insertar datos">

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
  </section>

<hr class="separator-line">

    <footer>
        <div class="footer-container">
            <div class="left-col">
                <div class="social-media">
                    <a href="https://www.facebook.com/Keliz-Systems-SRL-101560218308838/?modal=admin_todo_tour"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="https://www.youtube.com/channel/UCMjHDFNsJvXxoatmrP-qAHA"><i class="fab fa-youtube"></i></a>
                    <a href="https://www.instagram.com/keliz_systems/"><i class="fab fa-instagram"></i></a>
                </div>
            </div>

            <div class="center-col">
                <img src="img/Escudo.png" alt="Escudo_Pie_de_Pagina" class="escudo-footer">
                <img src="img/head-logo.PNG" alt="Escudo_Pie_de_Pagina" class="escudo-footer">

                <p class="footer-text">Mercedes Echenique #21, Distrito Nacional, R.D</p>
                <p class="footer-text">Teléfono: (809) 685-8141 / Fax: (809) 685-0859</p>
                <p class="footer-text">Términos de uso | Política de Privacidad | Preguntas Frecuentes</p>
                <p class="footer-text">© 2020 Todos los derechos reservados</p>
                <p class="footer-text">República Dominicana</p>
            </div>

            <div class="right-col">
                <a href="https://optic.gob.do/nortic/index.php/certificaciones/instituciones-certificadas/item/oficina-presidencial-de-tecnologias-de-la-informacion-y-comunicacion-optic#"><img src="img/Nortic.png" alt="Nortic" class="nortic"></a>
            </div>
        </div>
    </footer>
</body>
</html>
