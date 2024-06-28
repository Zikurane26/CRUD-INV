<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
    <script type="text/javascript" src="/backend/complement/validate_login.js"></script>
    <link rel="stylesheet" href="/backend/css/style_signup_login.css">
    <title>Inicio de Sesión</title>
</head>
<body>
<!--Inicio del FORM------------------------------------------------------------>
    <form action="recuperar_contraseña.php" id="form" method="POST">
        <div class="form">
            <h1>Recupera tu cuenta</h1>
            <div class="grupo">
                <p>Ingresa tu correo electrónico o número de celular para buscar tu cuenta</p>
            </div>
            <?php 
            $message;
            if(isset($_SESSION['message'])) {
                ?><h3 class="message_php"><?php echo $_SESSION['message']; ?></h3>
            <?php } ?>
            <div class="grupo">
                <input type="text" name="email" placeholder="Email o Usuario"><span class="line"></span>

            </div>
            
           
            <button id="forgot_password" type="submit" class="button" name="forgot_password">Recuperar contraseña</button>
            <a class="button" href="/backend/index.php">Cancelar</a>
        </div>
        
    
    </form>
    <?php
    if (isset($_POST['forgot_password'])) {
    $usuario = $_POST['email'];
    $destinatario = 'brasti00@gmail.com';
    $asunto = 'Prueba de correo';
    $cuerpo = '
    
    <html> 
    <head> 
       <title>Recuperar contraseña</title> 
    </head> 
    <body> 
    <h1>Hola mundo dentro del correo</h1> 
    <p>El usuario: '.$usuario.'</p>
    </body> 
    </html> 
    ';
    
    //para el envío en formato HTML 
    $cabeceras  = 'Recuperar contraseña' . "\r";
    $cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r";

    mail($destinatario, $asunto, $cuerpo, $cabeceras);
    echo "Correo enviado";
    //echo "<script>alert('Correo enviado');</script>";
    echo "<script> setTimeout(\"location.href='/backend/index.php'\",6000)</script>";
    
    }
    
?>
</body>
</html>