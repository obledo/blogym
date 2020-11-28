<html>
<head>
    <title>Mi Perfil</title>
    <style>
    .header{
        text-align: center;
        height: 350px;
        padding: 12px;
        font-family: 'Roboto';
        background-image: url("recursosImagen/banner-perfil.jpg");
        background-size: 100% 100%;
        background-repeat: no-repeat, no-repeat;
    }
    .avatar{
        width: 220px;
        height: 220px;
        
    }
    .user-name{
        font-size:20px;
        margin-top:7px;
        color: white;
        line-height: 5px;
    }
    .social-media{
        list-style: none;
        text-align: center;
        padding: 0px;
    }
    .social-media li{
        display:inline-block;
        margin:5px;
    }
    .social-media li a{
        font-family: 'Roboto';
        text-decoration:none;
        color: blue;
        font-size:16px;
        
    }
    .social-media li a:hover{
        color: darkblue;
    }
    .icon{
        width: 16px;
        height: 16px;
        display: inline-block;
        background-size:cover;
    }
    .email{
        background-image:url("recursosImagen/emailicon.png");
    }
    .facebook{
        background-image:url("recursosImagen/fbicon.png");
    }
    .acerca{
        padding:10px;
        font-family: 'Roboto';
    }
    .acerca h3{
        color: #545454;
        font-size: 16px;
    }
    .acerca p{
        color: #545454;
        font-size: 14px;
    }
    .main{
 
        width: 99%;
        background-image: url("recursosImagen/banner-perfil.jpg");
        background-size: 100% 100%;
    }
    .section1{
        text-align: justify;
        height: auto;
        width: 31.5%;
        border-radius: 5px;
        display: inline-block;
        background-color:rgba(0,0,0, .5);
        color: white;
        line-height: 25px;
    }
    .section2{
        text-align: center;
        width: 33%;
        display: inline-block;
        background-color:rgba(0,0,0, 0.00);
        border-bottom-left-radius: 50%;
        border-bottom-right-radius: 50%;
    }
    .section3{
        text-align: justify;
        width: 28%;
        height: 100%;
        display: inline-block;
        border-top-left-radius: 55%;
        border-bottom-right-radius: 50%;
        background-color:rgba(0,0,0, 0.0);
        line-height: 35px;
    }
    .section3:hover{
        transition-duration: 0.3s;
        background-color:rgba(0,0,0, 0.2);
    }
    h2.section{
        text-align: center;
        font-size: 20px;
        color: white;
        text-shadow: black 1px 2px;
    }
    a{
        color: white;
        text-decoration:none;
    }
    a:hover{
        transition-duration: 0.2s; 
        font-weight: bold;
    }
    </style>
</head>
<body>
    <section class="main">
        <section class="section1">
            <form action="enviar_correr.php" method="get">
                <h2 class="section">Editar Datos Personales</h2>
                <p>Llena todos los campos para actualizar tu información.</p>
                <p>Nombres <input type="text" name="nombres" placeholder="Usuario Nombre"></p>
                <p>Apellidos <input type="text" name="apellidos" placeholder="Usuario Apellido"></p>
                <p>Edad <input type="number" name="edad" min="0" max="90"placeholder="22"></p>
                <p>Telefono <input type="text" name="telefono" placeholder="3315954873"></p>
                <p>Email <input type="text" name="email" placeholder="usuario@gmail.com"></p><br>
                <button type="submit">
                  <img src="recursosImagen/check.png" width="32" height="32" style="vertical-align: middle">
                  Actualizar
                </button>
            </form>
        </section>
        <section class="section2">
            <img class="avatar" src="recursosImagen/user.png" alt="usuario default">
            <h1 class="user-name">¡Hola_Nombre_Usuario!</h1>
            <h1 class="user-name">¿Como te podemos ayudar?</h1>
        </section>
        <section class="section3">
            <h2 class="section">OPCIONES</h2>
            <!-- AGREGAR ARTICULO solo es para entrenador-->
            <li><a href="index.php?action=post">AGREGAR ARTICULO (entrenador)</a></li>
            <!-- FAVORITOS solo es para cliente-->
            <li><a href="mailto:concatenarImail@awebo.com">FAVORITOS (cliente)</a></li>
            <li><a href="index.php?action=actualizar">EDITAR DATOS PERSONALES</a></li>
            <li><a href="index.php?action=formularios">AGREGAR INFO ADICIONAL</a></li>
        </section>
    </section>
    <ul class="social-media">
        <li>
            <i class="icon email"></i>
            <a href="mailto:concatenarImail@awebo.com">concatenarImail@awebo.com</a>
        </li>
        <li>
            <i class="icon facebook"></i>
            <a href="UnLinkDeFacebook">Un Link De Facebook</a>
        </li>
    </ul>
    <div class="acerca">
        <h3>
        Acerca de mi:
        </h3>
        <p>
        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima, aspernatur? Iure explicabo sunt illum alias quae, adipisci, possimus molestias fugiat eos deserunt distinctio nisi reiciendis temporibus provident nam error nobis!
        </p>
    </div>

</body>
</html>