<?php 
include_once $_SERVER['DOCUMENT_ROOT'].'/backend/function/session/session_start.php'; 
include_once $_SERVER['DOCUMENT_ROOT'].'/backend/sql/security/connection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/backend/site/header.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/backend/site/menu.php';
?>

<body>

<?php 
    $conex = connect();
    //echo 'Nombre de la sesión: '; 
    //echo $_SESSION['admin_name']; echo ' ----';
    //echo '<pre>'.var_dump($_SESSION).'</pre>';
    $query_id = "SELECT * from productos where id=".$_SESSION['use_id'];"";
    $result_id= mysqli_query($conex,$query_id);
    $row_id= mysqli_fetch_array($result_id);

?>
    <div class="center-div"><p><h2 style="margin: 1rem auto auto auto;">PRODUCTOS EN STOCK</b></p></div>
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


</body>

<?php include_once $_SERVER['DOCUMENT_ROOT'].'/backend/site/footer.php';?>



