<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    
    require '/home/gavassa/PHPMailer-master/src/Exception.php'; 
    require '/home/gavassa/PHPMailer-master/src/PHPMailer.php'; 
    require '/home/gavassa/PHPMailer-master/src/SMTP.php';
    
    // Instantiation and passing [ICODE]true[/ICODE] enables exceptions
    $mail = new PHPMailer(true);
    
 
    
    try {
         //Server settings
         $mail->SMTPDebug = 2; // Enable verbose debug output
         $mail->isSMTP(); // Set mailer to use SMTP
         $mail->Host = 'mail.gavassa.com'; // Specify main and backup SMTP servers
         $mail->SMTPAuth = true; // Enable SMTP authentication
         $mail->Username = 'notificaciones@gavassa.com'; // SMTP username
         $mail->Password = 'Notificacionesg4v4ss4'; // SMTP password
         $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; // Enable TLS encryption, [ICODE]ssl[/ICODE] also accepted
         $mail->Port = 465; // TCP port to connect to
        
        //Recipients
         $mail->setFrom('notificaciones@gavassa.com', 'Gavassa & Cia. Ltda.');
         $mail->addAddress('sistemas.gavassa@gmail.com', 'Joe User'); // Add a recipient
        
        // Content
         $mail->isHTML(true); // Set email format to HTML
         $mail->Subject = 'Here is the subject';
         $mail->Body = 'This is the HTML message body <b>in bold!</b>';

        $mail->send();
        echo 'Message has been sent';
    
    } catch (Exception $e) {
     echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
    
    
    
    

    
   function sendmail($to, $from, $fromName, $body, $attachment) {
        $mail = new PHPMailer();
        $mail->setFrom($from, $fromName);
        $mail->addAddress($to);
        $mail->addAttachment($attachment);
        $mail->Subject = 'Formulario web Gavassa (PQR)';
        $mail->Body = $body;
        $mail->isHTML(true);

        return $mail->send();
   }


    $nombre = $_POST['nombre'];    
    $apellido = $_POST['apellido'];
    $cedula = $_POST['cedula'];
    $ciudad = $_POST['ciudad'];  
    $direccion = $_POST['direccion'];
    $telefono = $_POST['telefono'];  
    $email = $_POST['correo'];


    $motivo = $_POST['motivo'];
    $cual = $_POST['cual'];


    $prodName = $_POST['prodName'];
    $nombreproducto = $_POST['nombreproducto'];
    $marca = $_POST['marca'];
    $presentacion = $_POST['presentacion'];
    $lote = $_POST['lote'];
    $fecha = $_POST['fechavencimiento'];


    $reclamo = $_POST['reclamo'];



    $mensaje = "<div style='width: 400px; margin: 30px auto; padding:50px; background:url(http://gavassa.com/gavassa/img/slide2.jpg) no-repeat; background-size: cover;shadow-box: 1px 1px 1px #000;-webkit-box-shadow: 0px 0px 40px 0px rgba(0,0,0,0.18);-moz-box-shadow: 0px 0px 40px 0px rgba(0,0,0,0.18);box-shadow: 0px 0px 40px 0px rgba(0,0,0,0.18);'><div style='background: #fff; padding:20px; border-radius: 20px; border: solid 1px rgba(0,0,0,.1); line-height:18px;'><div style='text-align:center; background:#fff; padding:20px;'><img height='80px;' src='http://gavassa.com/gavassa/img/logo.png'></div><h3 style='background: #bd0811; padding: 20px; color: #fff;'>Datos Personales</h3>";
    $mensaje .= "Nombre del interesado: <b>" . $nombre . " " . $apellido . "</b><br>";
    $mensaje .= "Su correo es: <b>" . $email . "</b><br>";
    $mensaje .= "Su c&eacute;dula es: <b>" . $cedula . "</b><br>";
    $mensaje .= "Su ciudad es: <b>" . $ciudad . "</b><br>";
    $mensaje .= "Su direcci&oacute;n es: <b>" . $direccion . "</b><br>";
    $mensaje .= "Su tel&eacute;fono es: <b>" . $telefono . "</b><br>";

    $mensaje .= "<h3 style='background: #bd0811; padding: 20px; color: #fff;'>Motivo de la PQR</h3>";
    $mensaje .= "Su motivo es: <b>" . $motivo . "</b><br>";
    $mensaje .= "Si es otro cual es?: <b>" . $cual . "</b><br>";

    $mensaje .= "<h3 style='background:#bd0811;padding: 20px; color: #fff;'>Calidad del Producto</h3>";
    $mensaje .= "El lugar de compra del producto fue en: <b>" . $prodName . "</b><br>";
    $mensaje .= "El nombre del producto es:<b> " . $nombreproducto . "</b><br>";
    $mensaje .= "La marca es: <b>" . $marca . "</b><br>";
    $mensaje .= "La presentaci&oacute;n es de: <b>" . $presentacion . "</b><br>";
    $mensaje .= "El lote es: <b>" . $lote . "</b><br>";
    $mensaje .= "La fecha de vencimiento es: <b>" . $fecha . "</b><br>";

    $mensaje .= "La descripci&oacute;n de la PQR es: <br><br><b>" . $reclamo . "</b><br>";


    $mensaje .= "<p style='text-align:center; padding:15px; border-radius: 25px; color:#fff; background: #bd0811;'>Enviado el " . date('d/m/Y', time()). "</p>";
    $mensaje .= "</div></div>";

    $file = "attachment/" . basename($_FILES['attachment']['name']);
    if (move_uploaded_file($_FILES['attachment']['tmp_name'], $file)) {
        if (sendmail('sistemas.gavassa@gmail.com', $email, $nombre, $mensaje, $file))
            $msg = 'Mensaje Enviado!';
            else
                $msg = 'Mensaje no se pudo enviar';
    } else
        $msg = "Por favor Selecione un archivo!";

    
    echo $msg;

?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Pastas Gavassa | Lo rico es lo nuestro</title>

    <meta name="viewport" content="width=device-width, user-scalable=no">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>

    <link href='dist/simplelightbox.min.css' rel='stylesheet' type='text/css'>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700,800" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="./slick/slick.css">
            <link rel="stylesheet" href="unslider-master/dist/css/unslider.css">
  <link rel="stylesheet" type="text/css" href="./slick/slick-theme.css">

  <script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script src="unslider-master/src/js/unslider.js"></script> <!-- but with the right path! -->
    <script src="https://use.fontawesome.com/0e3cac397a.js"></script>

    <script>
        jQuery(document).ready(function($) {
            $('.my-slider').unslider({
                autoplay: true,
                delay: 7000,
                animation: 'fade',
                nav: false,
                arrows: false
            });
        });
    </script>

</head>
<body>

   

    <header>
        <div class="menu-movil"><i class="fa fa-bars"></i></div>


        <script type="text/javascript">
            $(".menu-movil").click(function(){
                $(".menu").toggle();
                });
        </script>
        <div class="menu container">
            <ul>

                <li class="logo"><a href="index.html"><img src="img/logo.png"></a></li>
                <li><a href="index.html">Inicio</a></li>
                <li><a href="#nosotros">Nuestra Compañía</a></li>
                <li class="">
                    <a href="#">Productos</a>
                    <ul>
                        <li class="gallery">
                            <a href="img/catalogo1.jpg">Gavassa</a>
                            <a class="ocultar" href="img/catalogo2.jpg"></a>
                            <a class="ocultar" href="img/catalogo3.jpg"></a>
                            <a class="ocultar" href="img/catalogo4.jpg"></a>
                            <a class="ocultar" href="img/catalogo5.jpg"></a>
                        </li>
                        <li class="gallery">
							<a href="catalogo.html">Catálogo</a>
						</li>
                        <li class="gallery-fitbrand"><a href="img/catalogo6.jpg">Fitbrand</a>

                        </li>
                        <li class="gallery-marypas">
                            <a href="img/catalogo7.jpg">Marypas</a>
                            <a class="ocultar" href="img/catalogo8.jpg"></a>
                            <a class="ocultar" href="img/catalogo9.jpg"></a>
                        </li>
                    </ul>
                </li>
                <li><a href="#">Servicios</a>
                    <ul>
                        <li class="brochure-cat"><a href="img/brochure.jpg">Maquila</a></li>
                    </ul>
                </li>
                <li><a href="contacto.html">Contáctenos</a></li>
            </ul>
        </div>

        <!-- <div class="brochure brochure-cat"><a href="img/brochure.jpg">Brochure</a></div> -->
    </header>

    <section id="nosotros">

    <div class="catalogo">
        <!-- <div class="gallery">
            <a href="img/catalogo1.jpg" class="big"><img src="img/catalogo1.jpg"/></a>
            <a class="ocultar" href="img/catalogo2.jpg"></a>
            <a class="ocultar" href="img/catalogo3.jpg"></a>
            <a class="ocultar" href="img/catalogo4.jpg"></a>
            <a class="ocultar" href="img/catalogo5.jpg"></a>
            <a class="ocultar" href="img/catalogo6.jpg"></a>
            <a class="ocultar" href="img/catalogo7.jpg"></a>
            <a class="ocultar" href="img/catalogo8.jpg"></a>
            <a class="ocultar" href="img/catalogo9.jpg"></a>
        

            <div class="link"><a href="images/image1.jpg">Abrir Catálogo</a></div>

        </div> -->

        
    </div>



        <div style="margin-bottom: 20px; margin-left: 50px; margin-right: 50px;" class="titulo-valores">Gracias por escribirnos, pronto nos comunicaremos con usted.</div>
       

        <div class="frase" id="contacto"><img src="img/frase.png" alt=""></div>
        
    </section>

    <footer>
        <div class="footer-logo"><img src="img/logo.png"></div>
        <div class="footer-abajo container">
            <div class="redes">
    <a href="https://www.facebook.com/pastasgavassa/" target="_blank"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
    <a href="#" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
</div>
            <div class="creditos">© 2018 · Gavassa · Calle 20 # 12 - 50 Bucaramanga, Santander · Teléfono: (7) 6711459 · Desarrollado por Salmah Agencia de Publicidad</div>
        </div>
    </footer>
    




<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script type="text/javascript" src="dist/simple-lightbox.js"></script>
<script>
    $(function(){
        var $gallery = $('.gallery a').simpleLightbox();
        var $brochure = $('.brochure-cat a').simpleLightbox();
        var $fitbrand = $('.gallery-fitbrand a').simpleLightbox();
        var $marypas = $('.gallery-marypas a').simpleLightbox();

        $gallery.on('show.simplelightbox', function(){
            console.log('Requested for showing');
        })

        $borchure.on('show.simplelightbox', function(){
            console.log('Requested for showing');
        })
        .on('shown.simplelightbox', function(){
            console.log('Shown');
        })
        .on('close.simplelightbox', function(){
            console.log('Requested for closing');
        })
        .on('closed.simplelightbox', function(){
            console.log('Closed');
        })
        .on('change.simplelightbox', function(){
            console.log('Requested for change');
        })
        .on('next.simplelightbox', function(){
            console.log('Requested for next');
        })
        .on('prev.simplelightbox', function(){
            console.log('Requested for prev');
        })
        .on('nextImageLoaded.simplelightbox', function(){
            console.log('Next image loaded');
        })
        .on('prevImageLoaded.simplelightbox', function(){
            console.log('Prev image loaded');
        })
        .on('changed.simplelightbox', function(){
            console.log('Image changed');
        })
        .on('nextDone.simplelightbox', function(){
            console.log('Image changed to next');
        })
        .on('prevDone.simplelightbox', function(){
            console.log('Image changed to prev');
        })
        .on('error.simplelightbox', function(e){
            console.log('No image found, go to the next/prev');
            console.log(e);
        });
    });
</script>
</body>
</html>
