<html>
<head>
    <title>Formularios</title>
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
        background-color:rgba(0,0,0, .3);
        color: white;
        
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
    h1.a{
        font-size: 200%;
        text-align:center;
        color: white;
        text-shadow: black 5px 1px;
        margin-top: 1px;
        margin-bottom: 20px;
    }
/* ****************CSS de FORMS************** */
        form{
            color: white;
            background-color:rgba(0,0,0, 0.6);
            border-radius: 5px;
            padding-top: 10px;
            padding-bottom: 20px;
            width: 100%;
        } 
        form:hover{
            transition-duration: 0.4s;
            background-color:rgba(0,0,0, 0.8);

        }
        h3{
            text-align:center;
        }
        button{
            margin-left: 34%;
            width: 33.33%;
            height: 37px;
        }
        button:hover{
            transition-duration: 0.4s;
            border-radius: 20px;
            background-color:rgba(4,86,24 0.8);
        }
        img.img1{
            width: 500px;
            margin-top: 15px;
            float: left;
        }
        img.img2{
            width: 300px;
            float: right;
        }
        p{
            margin: 20px;
        }
        input.objetivo{
            line-height: 35px;
        }
    </style>
</head>
<body>
    <section class="main">
        <h1 class="a">FORMULARIOS </h1>
        <section class="section1">
            <form action="enviar_correr.php" method="get">
                <h3>Distancia</h3>
                <p>Ingresa la distancia que recorriste y el tiempo que tardaste en hacerlo :)</p>
                <p>Distancia (metros): <input type="number" name="distancia" min="0" max="50000"></p>
                <p>Tiempo (minutos): <input type="number" name="tiempo" min="1" max="500"></p><br>
                <button type="submit">
                  <img src="recursosImagen/check.png" width="32" height="32" style="vertical-align: middle">
                  Enviar
                </button>
            </form>
        </section>
        <section class="section1">
            <form action="enviar_formulario.php" method="get">
                <h3>Caracteristicas</h3>
                <p>Sexo:<input type="radio" name="sexo" value="Hombre">Hombre
                   <input type="radio" name="sexo" value="Mujer">Mujer<br></p>
                <!--<p>Sexo: <input type="text" name="sexo"></p>-->
                <p>Altura (cm): <input type="number" name="altura" min="140" max="250"></p>
                <p>Peso (kg): <input type="number" name="peso" min="40" max="200"></p>
                <p>Medida cuello (cm): <input type="number" name="cuello" min="30" max="60"></p>
                <p>Medida cintura (cm): <input type="number" name="cintura" min="30" max="150"></p>
                <p>Medida cadera (cm): <input type="number" name="cadera" min="30" max="150"></p><br>
                <button type="submit">
                  <img src="recursosImagen/check.png" width="32" height="32" style="vertical-align: middle">
                  Enviar
                </button>
            </form>
        </section>
        <section class="section1">
            <form action="enviar_correr.php" method="get">
                <h3>Objetivo</h3>
                <p>Selecciona cual es tu siguiente objetivo a lograr.</p>
                <input type="radio" name="boton" value="1">Adelgazar<br><br>
                <input class="objetivo" type="radio" name="boton" value="1">Ganar Volumen<br><br>
                <input type="radio" name="boton" value="1">Tonificar musculo<br><br>
                <input type="radio" name="boton" value="1">Mantener Figura<br><br><br>
                <button type="submit">
                  <img src="recursosImagen/check.png" width="32" height="32" style="vertical-align: middle">
                  Enviar
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