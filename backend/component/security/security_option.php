<?php 
include_once $_SERVER['DOCUMENT_ROOT'].'/backend/function/session/session_start.php';
mb_internal_encoding('UTF-8');
# ZONA HORARIA 
date_default_timezone_set('America/Bogota');
$_SESSION['cod_sec'] = md5(session_id());

# VALIDACION 
if (!isset($_GET['option'])){ 
    
    if (isset($_SESSION['user_log_in'])){
        $_GET['option'] = 'dashboard';
    }else{
        $_GET['option'] = 'login';
    }

}

if ($_GET['option']=='login'){ 
    if (isset($_SESSION['user_log_in'])) { session_unset($_SESSION['user_log_in']);}
    if (isset($_SESSION['use_id'])) { session_unset($_SESSION['use_id']);}
    header('location:/backend/login');
}
    # PROCEDIMIENTO QUE TRAE LA CONFIGURACIÓN DEL APLICATIVO  
    $module_name="CRUD";# NOMBRE DEL MODULO fun_nam
    $module_access='/site/dashboard.php';# ACCESO AL MODULO fun_acc
    $module_option=$_SESSION['use_typ_id'];# OPCION DEL MODULO fun_opt $row_get_module_information['rol']
    # DIRECTORIO GENERAL DE LA APLICACIÓN
    $main_directory = '/backend';

?>