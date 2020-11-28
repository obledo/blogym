<html>
<head>
    <title>Mi Perfil</title>
    <style>
    .header{
        text-align: center;
        height: 350px;
        padding: 12px;
        font-family: 'Roboto';
        background-image: url("recursosImagen/gymbanner.jpg");
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
        text-align: center;
        width: 99%;
        background-image: url("recursosImagen/gymbanner.jpg");
        background-size: 100% 100%;
    }
    .section1{
        text-align: center;
        height: auto;
        width: 700px;
        border-radius: 5px;
        display: inline-block;
        background-color:rgba(0,0,0, .7);
        color: white;
        line-height: 25px;
        border:2px solid #ffffff;
    }

    h2.section{
        text-align: center;
        font-size: 20px;
        color: #01EA67;
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
    .estilotextarea {
        width:600px;
        height:200px;
        border:2px solid #000000;
    }
    </style>
</head>
<body>
    <section class="main">
        <section class="section1">
        <form action="enviar_correr.php" method="get">
                <h2 class="section">AGREGAR ARTICULO</h2>
                <p>En esta sección puedes crear un post para otros usuarios.</p>
                <p>Solo puedes agregar texto.</p>
                <p>TITULO  <input type="text" name="titulo" placeholder="Agrega un Titulo"></p>
                
                <p>CATEGORIA     <select name="menu">
                  <option>Adelgazar</option>
                  <option>Ganar Volumen</option>
                  <option>Tonificar Musculo</option>
                  <option>Mantener Figura</option>
                </select> </p>
                <p>CONTENIDO</p>
                <p><textarea name="contenido" rows="20" cols="80" placeholder="Aqui puedes agregar toda la información necesaria para tu articulo."></textarea></p>
                <button type="submit">
                  <img src="recursosImagen/check.png" width="32" height="32" style="vertical-align: middle">
                  Crear Artiuclo
                </button>
            </form>
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