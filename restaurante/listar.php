<!DOCTYPE html>
<html>
<title>Pedidos</title>
<meta charset="UTF-8">
<script type="text/javascript" src="somando.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Karma">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "roboto", sans-serif; }
.w3-bar-block .w3-bar-item {padding:20px}
.fundo{
  background-color: #62b22f;

}
button{
  background-color: rgba(34, 139, 34, 0.3);
  font-size: 20px;

}

</style>
<body class="fundo">

<!-- Sidebar (hidden by default) -->
<nav class="w3-sidebar w3-bar-block w3-card w3-top w3-xlarge w3-animate-left" style="display:none;z-index:2;width:40%;min-width:300px" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()"
  class="w3-bar-item w3-button">Fechar Menu</a>
  <a href="cardapio.html" onclick="w3_close()" class="w3-bar-item w3-button">Cardapio</a>
  <a href="lista.html" onclick="w3_close()" class="w3-bar-item w3-button">Listar Pedidos</a>
  <a href="index.html" onclick="w3_close()" class="w3-bar-item w3-button">Cadastrar</a>
  <a href="login.html" onclick="w3_close()" class="w3-bar-item w3-button">Logar</a>
</nav>

<!-- Top menu -->
<div class="w3-top">
  <div class="w3-white w3-xlarge " style="max-width:1200px;margin:auto">
    <div class="w3-button w3-padding-16 w3-left fundo" onclick="w3_open()">☰</div>
    <div class="w3-right w3-padding-16 "><img src="logo1.png" width="26%"></div>
    <div class="w3-center w3-padding-16 fundo">Fila de Pedidos</div>
  </div>
</div>
  
<!-- !PAGE CONTENT! -->
<div class="w3-main w3-content w3-padding" style="max-width:1600px;margin-top:100px">

<table   class="table table-dark table-striped" border="1">
 

  <?php
  
  $comando = "SELECT * FROM pedidos";

  //Conectar ao MYSQL e selecionar o banco de dados agenda
  $cone = mysqli_connect("localhost","root","","purosabor") or die ("impossível se conectar ao MYSQL");

  //execultar consulta
  $consulta= mysqli_query($cone,$comando);
  $aux=0;
  while(mysqli_num_rows($consulta)>$aux){
    //pegar linha da consulta
    $rs = mysqli_fetch_array($consulta);
    echo("<tr>
      <td>$rs[cod]°
        <td>$rs[nome]
        <td>Mesa $rs[mesa]
        </tr>
        ");
    $aux++;
  }
 ?>
 </table>

<script>
// Script to open and close sidebar
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
}
 
function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
}
</script>

</body>
</html>




