<?php
    //Inicio de la sesión
    session_start();
    include_once $_SERVER['DOCUMENT_ROOT'].'/backend/sql/security/connection.php';
?>

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
<div class="grupo">
    <form action="send-login" id="form" method="POST">
        <div class="form">
            <h1>Iniciar Sesión</h1>
            <?php 
            $message;
            if(isset($_SESSION['message'])) {
                ?><h3 class="message_php"><?php echo $_SESSION['message']; ?></h3>
            <?php } ?>
            <div class="grupo">
                <input type="text" name="email" placeholder="Email o Usuario" value="<?php if(isset($_COOKIE['email'])){
                    echo $_COOKIE['email'];
                } ?>"><span class="line"></span>

            </div>
            <div class="bot_line">
                <input type="password" name="password" placeholder="Password"  value="<?php if(isset($_COOKIE['password'])){
                    echo $_COOKIE['password'];
                } ?>"><span class="line"></span>
            
            </div>
            <div class="remember_container">
                <input type="checkbox" name="remember" id="remember" <?php if (isset($_COOKIE["email"])) {
                ?> checked <?php } ?> class="checkbox" > <p class="remember">Recuerdame</p>
                <a href="/backend/module/security/recuperar_contraseña.php" class="forgot" style='padding: 0px 40px 0px 35px'>¿Olvidó su contraseña?</a>
            </div>
            <button id="btn" type="submit" class="button" name="btn_login">Iniciar Sesión</button>
            <a class="button" href="/backend/module/security/sign_up.php">Registrarse</a>
            <input type="hidden" name="action" value="LV">
        </div>
    
        
    
    </form>
</div>
    <div class="grupo">
    <table class="table table_border">
    <thead>
        <tr>
            <th>Usuario</th>
            <th>Email</th>
            <th>Rol</th>
            <th>Estado</th>
            <th>Contraseña</th>
        </tr>
    </thead>
    <tbody>
    <?php 
            $conex = connect();
            $query = "SELECT * FROM `datos_usuarios`  \n"
            . "ORDER BY `datos_usuarios`.`contador`  DESC;";
        $result_dates = mysqli_query($conex, $query);

        while($row = mysqli_fetch_array($result_dates)){ ?>
        <tr class="table_content">
            <td ><?php echo $row['usuario']?>  </td>
            <td ><?php echo $row['email']?>  </td>
            <td ><?php if ($row['rol']==1) {
                echo "Admin";
            } else {
                echo "User";
            }?>  </td>
            <td ><?php echo $row['estado']?>  </td>
            <td ><?php echo $row['password']?>  </td>
        </tr>
        <?php   }  ?>
        </tbody>
    </table>
</div>
</body>
</html>