<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Documento</title>
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
    <style>
        
        header{
            
            background: url("recursosImagen/banner.jpg");
            width: 100%;
            height: 150px;
            background-position: left bottom;
            background-size: cover;
            padding:0px;
        }
        .Titulo{
            font-family: 'Roboto';
            position:center;
            margin:auto;
            text-align:center;
            line-height:150px;
            color:green;
            font-weight: 900;   
        }
        nav{
            position:relative;
            margin:auto;
            width:100%;
            height:auto;
            background:black;
        }
        nav ul{
            position:relative;
            margin:auto;
            width:50%;
            text-align:center;
            

        }
        nav ul li{
            display:inline-block;
            width:19%;
            line-height:50px;
            list-style:none;
           
        }
        nav ul li:hover{
            background:grey;       
        }
        nav ul li a{
            color:white;
            text-decoration:none;
            font-family: 'Roboto';
        }
        section{
            position:relative;
            padding:10px;
            
        }
    
    </style>

</head>
<body>
    
<header>
    <h1 class="Titulo">BLOGYM</h1>
</header>

<?php 
    include"modulos/navegacion.php";
?>

<section>
<?php

$mvc = new MvcController();
$mvc -> enlacesPaginasController();
?>
</section>

</body>
</html>