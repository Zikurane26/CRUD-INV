<?php 
include_once $_SERVER['DOCUMENT_ROOT'].'/backend/function/connection/connection.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "DELETE FROM productos WHERE id = $id";
    $result = mysqli_query($conex, $query);
    if (!$result) {
        die("Query Failed");
    }
    $_SESSION['message'] = 'Product Removed Successfully';
    $_SESSION['message_color'] = 'red';

    header("Location:/backend/component/modify/edit_product.php?id=1");
}
?>

