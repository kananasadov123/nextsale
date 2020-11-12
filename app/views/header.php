<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?= APP_PATH ?>/public/img/favicon.png">
    <title>Nextsale</title>
    <!-- Bootstrap CSS -->
    <link href="<?= APP_PATH ?>/public/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <!-- bootstrap theme -->
    <link href="<?= APP_PATH ?>/public/css/bootstrap-theme.css" rel="stylesheet" type="text/css">
    <!--external css-->
    <!-- font icon -->
    <link href="<?= APP_PATH ?>/public/css/elegant-icons-style.css" rel="stylesheet" type="text/css">
    <link href="<?= APP_PATH ?>/public/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- date picker -->
    <!-- Custom styles -->
    <link href="<?= APP_PATH ?>/public/css/style.css" rel="stylesheet" type="text/css">
    <link href="<?= APP_PATH ?>/public/css/style-responsive.css" rel="stylesheet" type="text/css">
    <link href="<?= APP_PATH ?>/public/css/sweetalert2.min.css" rel="stylesheet" type="text/css">

    <script>
        var app_url = '<?= APP_PATH ?>';
    </script>

</head>
<body>

<!-- container section start -->
<section id="container" class="">
    <!--header start-->
    <header class="header dark-bg">
        <div class="toggle-nav">
            <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i
                        class="icon_menu"></i></div>
        </div>

        <div class="nav search-row" id="top_menu">
            <!--  search form start -->
            <ul class="nav top-menu">
                <li>

                </li>
            </ul>
            <!--  search form end -->
        </div>

    </header>
    <!--header end-->

    <!--sidebar start-->
    <aside>
        <div id="sidebar" class="nav-collapse ">
            <!-- sidebar menu start-->
            <ul class="sidebar-menu">
                <li class="active"><a href="<?= APP_PATH ?>/user/userView"><i
                                class="icon_profile"></i><span>Users</span></a></li>
                <li class="active"><a href="<?= APP_PATH ?>/user/addUser"><i
                                class="icon_pencil-edit"></i><span>Add User</span></a></li>
                <li class="active"><a href="<?= APP_PATH ?>/documentation/documentationView"><i
                                class="icon_document"></i><span>Documentation</span></a></li>
                <li class="active"><a href="<?= APP_PATH ?>/readme/readMeView"><i
                                class="icon_document_alt"></i><span>Read me</span></a></li>
            </ul>
            <!-- sidebar menu end-->
        </div>
    </aside>
