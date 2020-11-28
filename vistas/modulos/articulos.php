<html>
<head>
<title>


</title>
<style>
.inputGroup {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
}
.inputGroup label {
  width: 100%;
  color: #63d297;
  margin-top: 4px;
  margin-bottom: 4px;
}

.inputGroup input {
  border: 1px solid #63d297;
  height: 40px;
  width: 240px;
  margin-top: 4px;
  margin-bottom: 4px;
  border-radius: 20px;
  text-indent: 2em;
}
.inputGroup button {
  height: 40px;
  width: 240px;
  margin-top: 4px;
  margin-bottom: 4px;
  color: #1d1d1b;
  border: 1px solid #1d1d1b;
  background-color: #63d297;
  border-radius: 20px;
  -webkit-transition: background-color 0.3s ease-out, color 0.3s ease-out, border-color 0.3s ease-out;
  transition: background-color 0.3s ease-out, color 0.3s ease-out, border-color 0.3s ease-out;
  cursor: pointer;
}

.inputGroup button:hover {
  color: #63d297;
  background-color: #1d1d1b;
  border-color: #63d297;
}


.board .topBoard {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: horizontal;
  -webkit-box-direction: normal;
      -ms-flex-direction: row;
          flex-direction: row;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  position: relative;
  top: 0;
  height: 150px;
  width: 90%;
}

.board .topBoard h1 {
  font-family: 'Roboto';
  font-weight: lighter;
  font-size: 50px;
  color: black;
  width: 40%;
}
.postsArea {
    font-family: 'Roboto';
    overflow: hidden;
}
.post {
    margin: 1em;
    padding: 2em;
    float: left;
    background-image:url("recursosImagen/backref.jpg");
    background-repeat: no-repeat;
    background-size: 100% 100%;
}
.post a {
  outline: none;
  text-decoration: none;
  color: gray;
}
.board .topBoard #searchPosts {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  position: relative;
  text-indent: 0;
  width: 60%;
}

.board .topBoard #searchPosts .filters {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: horizontal;
  -webkit-box-direction: normal;
      -ms-flex-direction: row;
          flex-direction: row;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: space-evenly;
      -ms-flex-pack: space-evenly;
          justify-content: space-evenly;
  width: 100%;
}

.board .topBoard #searchPosts .filters .searchBar {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: horizontal;
  -webkit-box-direction: normal;
      -ms-flex-direction: row;
          flex-direction: row;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  position: relative;
  height: 100%;
  width: 50%;
}

.board .topBoard #searchPosts .filters .searchBar button {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  position: absolute;
  top: 3px;
  right: 6px;
  width: 35px;
  height: 35px;
}

.board .topBoard #searchPosts .filters .searchBar input {
  width: 100%;
  background-color: transparent;
  color: #63d297;
}

.board .topBoard #searchPosts .filters .searchBar:hover {
  background-color: none;
  color: #63d297;
}
.icon{
        width: 16px;
        height: 16px;
        display: inline-block;
        background-size:cover;
    }
.buscar{
        background-image:url("recursosImagen/buscaricon.png");
    }


</style>
</head>

<body>
    
        <div class="board">
            <div class="topBoard">
                <h1>PAGINA DE ARTICULOS</h1>
                    <div id="searchPosts" class="inputGroup">
                            <!-- <label for="tag">Buscar una publicación</label> -->
                        <h2>Filtrar publicaciones</h2>
                        <div class="filters">
                            <div class="searchBar">
                                <input id="tag" name="tag" type="text" >
                                <button onclick="searchPosts()" value="Buscar">
                                    <i class="icon buscar"></i>
                                </button>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="postsArea">
            
            <!-- Creamos un gri para los posts RECUERDA ESTO ESTA HARDCODEADO-->
                <?php for ($i=0; $i < 17; $i++) { ?>
                    <div class="post">
                    <?php echo'<a href="home.php?&id='.$i.'">';//donde i seria el id obtenido de la BD ?>
                        <h1> <?php echo "titulo"?></h1>
                        <p> <?php echo "DescripcionCorta"?></p>
                        <p> <?php echo "noticia"?></p>
                        <p> <?php echo "categoria" ?></p>
                    </div>
                <?php } ?>
            </div>
        </div>



</body>
</html>

