<?php 
    session_start();
    include_once $_SERVER['DOCUMENT_ROOT'].'/backend/sql/security/connection.php';
    $conex = connect();
    
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $query = "SELECT * FROM productos WHERE id = $id";
        $result= mysqli_query($conex,$query);

        if (mysqli_num_rows($result) == 1) {
            $row= mysqli_fetch_array($result);
            $id= $row['id'];
            $type= $row['type'];
            $name= $row['name'];
            $price= $row['price'];
            $stock= $row['stock'];
        }

    }
    
    if (isset($_POST['enter'])) {
        $type= trim($_POST['name']);
        $name= trim($_POST['last_name']);
        $price= trim($_POST['user']);
        $stock= trim($_POST['phone']);
        $consulta = "INSERT INTO productos(type, name, price, stock) VALUES ('$type','$name','$price','$stock')";
        $resultado = mysqli_query($conex,$consulta);
        if ($resultado) {
            //echo "<script> window.location='/backend/index.php'; </script>";
            header("Location:/backend/component/modify/edit_product.php?id=1");
        ?> 
        <h3 class="message_php">¡Ha inscrito correctamente el usuario!</h3>
        <?php
        } else {
        ?> 
        <h3>¡Ups ha ocurrido un error!</h3>
        <?php
        $error_a = mysqli_errno($conex). " Message ".mysqli_error($conex);
        echo $error_a;
        }
    }


    if (isset($_POST['update'])) {
        $id2 = $_GET['id'];
        $alter_type= trim($_POST['name']);
        $alter_name= trim($_POST['last_name']);
        $alter_price= trim($_POST['user']);
        $alter_stock= trim($_POST['phone']);

        $query2 = "UPDATE `productos` SET `type`='$alter_type',`name`='$alter_name',`price`='$alter_price',`stock`='$alter_stock' WHERE id=$id2";

        $resultado_query=mysqli_query($conex, $query2);
        $error_a = mysqli_errno($conex). " Message ".mysqli_error($conex);
        if (!$resultado_query) {
            echo "Error al actualizar";
            echo $error_a;
        }else{
        //echo "Usuario actualizado";
        //header("Location:/backend/dashboard.php");
        header("Location:/backend/component/modify/edit_product.php?id=$id2");
        }
        
    }
    $previous = "javascript:history.go(-1)";

?>

<?php include_once $_SERVER['DOCUMENT_ROOT'].'/backend/site/header.php';
    include_once $_SERVER['DOCUMENT_ROOT'].'/backend/site/menu.php';?>

<div class="content shadow box box_register">

<form id="form_img"  action="edit_product.php?id=<?php echo $_GET['id']; ?>" method="post" enctype="multipart/form-data">
        <div class="form">
            <h1>Agregar nuevo producto</h1>
            <div class="grupo">
            <div class="right">
                <input type="text" name="name" id="nombre" placeholder="Tipo"><span class="barra"></span>
            </div>
            <div class="right">
                <input type="text" name="last_name" id="last_name" placeholder="Nombre" ><span class="barra"></span>
            </div>
            <div class="right">
                <input type="text" name="user" placeholder="Precio" ><span class="barra"></span>
            </div>
            <div class="right">
                <input type="text" name="phone" placeholder="Cantidad" ><span class="barra"></span>
            </div>
            </div>
            
            <button type="submit" class="button" name="enter">Agregar nuevo producto</button>
            </div>
        
        </form>
        
<form id="form" action="edit_product.php?id=<?php echo $_GET['id']; ?>" method="post">
        <div class="form">
            <h1>Modificar producto</h1>
            
            <div class="grupo">
            <div class="right">
                <input type="text" name="name" id="nombre" placeholder="Tipo" value="<?php echo $type?>"><span class="barra"></span>
            </div>
            <div class="right">
                <input type="text" name="last_name" id="last_name" placeholder="Nombre" value="<?php echo $name?>"><span class="barra"></span>
            </div>
            <div class="right">
                <input type="text" name="user" placeholder="Precio" value="<?php echo $price?>"><span class="barra"></span>
            </div>
            <div class="right">
                <input type="text" name="phone" placeholder="Cantidad" value="<?php echo $stock?>"><span class="barra"></span>
            </div>
            </div>
            
            
            <button type="submit" class="button" name="update">Actualizar</button>
            <a class="button"  href="/backend/sites/setup.php">Cancelar</a>
        </div>
        </div>
    </form>
    </div>
</div>
</body> 
<div class="content shadow box box_table">
    
<table class="table table_border">
    <thead>
        <tr>
            <th>ID</th>
            <th>Tipo</th>
            <th>Nombre</th>
            <th>Precio</th>
            <th>Cantidad</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
    <?php 
        /*if ('1'=='1'){//($_SESSION['use_typ_id'] == '1') {
            $query = "SELECT * FROM `datos_usuarios`  \n"
            . "ORDER BY `productos`.`id`  DESC;";
        } else {
            $query = "SELECT * from datos_usuarios where id=".$_SESSION['use_id'];"";
        }*/
        $query = "SELECT * FROM `productos`  \n"
            . "ORDER BY `productos`.`id`  DESC;";
        $result_dates = mysqli_query($conex, $query);

        while($row = mysqli_fetch_array($result_dates)){ ?>
        <tr class="table_content">
            <td ><?php echo $row['id']?>  </td>
            <td ><?php echo $row['type']?>  </td>
            <td ><?php echo $row['name']?>  </td>
            <td ><?php echo $row['price']?>  </td>
            <td ><?php echo $row['stock']?>  </td>
            
            <td class="actions_buttons">
                <a href="/backend/component/modify/edit_product.php?id=<?php echo $row['id'] ?>">
                <i class="fas fa-marker button_actions button_action_edit"></i>
                </a>
                <a href="/backend/component/modify/delete_product.php?id=<?php echo $row['id'] ?>">
                <i class="far fa-trash-alt button_actions buttton_action_delete"></i>
                </a>
            </td>
        </tr>
        <?php   }  ?>
    </tbody>
    </table>
</div>


<?php include_once $_SERVER['DOCUMENT_ROOT'].'/backend/site/footer.php';?>

