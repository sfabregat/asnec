<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?= $this->page;?></title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<link rel="stylesheet" href="<?= APP_W.'pub/css/css.css'; ?>">
        <link rel="stylesheet" href="<?= APP_W.'pub/css/bootstrap.css'; ?>">
        <script type="text/javascript" src="app/app.js"></script>
        <script type="text/javascript" src="pub/jQuery-MD5-master/jquery.md5.js"></script>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <link rel="stylesheet" href="/maps/documentation/javascript/demos/demos.css">
        <link rel="stylesheet" href="<?= APP_W.'pub/css/my-slider.css';?>">
        <script src="<?= APP_W.'pub/js/ism-2.2.min.js';?>"></script>
</head>
<body>
    <header>
    <div class="cabecera1">
        <div class="cabecera1_wrap">
            <div class="cabecera1_wrap_box"><a href="#">FAQ</a></div>
            <div class="cabecera1_wrap_box"><a href="#">Idioma <img src="<?= APP_W.'pub/images/ico/flags/spain.png'; ?>"></a></div>
            <div class="cabecera1_wrap_box"><a href="#">Ayuda</a></div>
        </div>
    </div>
    <div class="cabecera2">
        <div class="header_wrap">
                <div class="logo"><img src="<?= APP_W.'pub/images/logos/asnec.png" width="100%" height="100%'?>"></div>
                <div class="buscador_box">
                        <div class="buscador">
                                <div class="lupa">
                                        <img src="<?= APP_W.'pub/images/header/lupa.jpg" width="100%" height="100%'?>">
                                </div>
                        </div>
                </div>
                <div class="rlbox">
                <div class="bloque"></div>
                <?php

                    if(!isset($_SESSION))  
                    { 
                        echo ' <a href="registre" class="black"><span class="glyphicon glyphicon-user" id="gly"></span> Register</a>';
                        echo '<a href="login" class="black"><span class="glyphicon glyphicon-log-in" id="gly"></span> Login</a>';
                    }
                    else
                    {
                        echo '<a href="Logout" class="black"><span class="glyphicon glyphicon-log-in" id="gly"></span> Logout</a>';
                    }
                    ?>
               
                
                </div>
        </div>          
    </div>
    <div class="cabecera3">
        <div class="cabecera3_wrap">
            <div class="cabecera3_wrap_box"><a href="home"><b>Home</b></a></div>
            <div class="cabecera3_wrap_box"><a href="login"><b>Nike</b></a></div>
            <div class="cabecera3_wrap_box"><a href="login"><b>Adidas</b></a></div>
            <div class="cabecera3_wrap_box"><a href="login"><b>Reebook</b></a></div>
            <div class="cabecera3_wrap_box"><a href="login"><b>Converse</b></a></div>
            <div class="cabecera3_wrap_box"><a href="#"><b>F.A.Q</b></a></div>
            <div class="cabecera3_wrap_box"><a href="#"><b>Otros</b></a></div>
        </div>
    </div>
    </header>