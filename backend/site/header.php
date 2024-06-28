<!-- MENU SUPERIOR -->
<header>
    <div id="div-menu" class=""></div>
    <div id="user" class="user"></div>
    <div id="user_menu" class="hidden_user_menu hidden_all">
        <div class="user_options">
            <p><a class="link" href="/backend/site/dashboard.php">Dashboard</a></p>
        </div>
        <div class="user_options">
            <p><a class="link" href="/backend/component/modify/edit_product.php?id=1">Agregar producto</a></p>
        </div>
        <hr class="user_options_hr">
        <div class="user_options">
            <p><a class="link" href="/backend/module/security/logout.php">Cerrar sesion</a></p>
        </div>
    </div>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/backend/css/normalize.css">
    <link rel="stylesheet" href="/backend/css/styles_dashboard.css?<?= time();?>">
    <script src="https://kit.fontawesome.com/9907a3343e.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
    <script type="text/javascript" src="/backend/js/main.js?<?= time();?>"></script>
    <script src="/backend/complement/listener_db.js?<?= time();?>"></script>
    <title> CRUD </title>
</header>

