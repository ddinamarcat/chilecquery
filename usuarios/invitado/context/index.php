<!-- Aplicación web desarrollada por Daniel Dinamarca Tosso -->
<!-- Daniel Dinamarca -->

<!DOCTYPE html>
<html>
<head>
  <title>ChC Consulta</title>
  <!-- Favicon -->
  <link rel="icon" type="image/png" href="img/favicon.png" sizes="340x431">
  <!-- jQuery min 3.3.1 -->
	<script src="js/jquery.min.js"></script>
  <!-- Codificacion usada -->
  <meta charset="utf-8"/>
	<meta http-equiv="Content-Type" content="text/html"/>
  <!-- Script para cargar context Manager -->
	<script type="text/javascript" src="js/contextManager.js"></script>
  <!-- Hoja de estilo Layout 1 -->
  <script type="text/javascript" src="js/responsive.js"></script>
</head>

<body>
<header>
  <div>
    <a href="#principal" class="main-menu-element" templateId="principal" mark="0"><img id="logo" src="img/chilecompra.svg" alt="Mercado Publico Logo"/></a>
  </div>
  <div>
    <span class="menu"><img src="img/nav.svg" alt="" onclick="menuHandler()"/></span>
  </div>
  <div>
    <nav id="top-menu" class="menum-inactivo" >
        <ul id="botones-menu-principal">
            <li class="no-actual main-menu-element" templateId="seccion2" mark="1">
                <a href="#">Secci&oacute;n 2</a>
            </li>
            <li class="no-actual main-menu-element" templateId="seccion3" mark="1">
                <a href="#">Secci&oacute;n 3</a>
            </li>
            <li class="no-actual main-menu-element" templateId="seccion4" mark="1">
                <a href="#">Secci&oacute;n 4</a>
            </li>
            <li class="no-actual main-menu-element" templateId="seccion5" mark="1">
                <a href="#">Secci&oacute;n 5</a>
            </li>
            <li class="no-actual main-menu-element" templateId="seccion6" mark="1">
                <a href="#">Secci&oacute;n 6</a>
            </li>
            <li class="no-actual main-menu-element" templateId="seccion7" mark="1">
                <a href="#">Secci&oacute;n 7</a>
            </li>
            <li class="no-actual main-menu-element" templateId="seccion8" mark="1">
                <a href="#">Secci&oacute;n 8</a>
            </li>
        </ul>
    </nav>
  </div>
  <div>
      <input id="login-button" type="button" Value="LOGIN" onclick="loginManager.showLogin();"/>
  </div>
</header>
<div id="contenido" class="c-desactivado">
</div>
<template id="principal">
	<?php include_once("principal.php"); ?>
</template>
<template id="seccion2">
	<?php include_once("seccion2.php"); ?>
</template>
<template id="seccion3">
    <?php include_once("seccion3.php"); ?>
</template>
<template id="seccion4">
    <?php include_once("seccion4.php"); ?>
</template>
<template id="seccion5">
    <?php include_once("seccion5.php"); ?>
</template>
<template id="seccion6">
    <?php include_once("seccion6.php"); ?>
</template>
<template id="seccion7">
    <?php include_once("seccion7.php"); ?>
</template>
<template id="seccion8">
    <?php include_once("seccion8.php"); ?>
</template>
<template id="login-form">
    <div class="login-container">
        <div class="input-login">
            <img src="img/wh_logo_negro.svg"/>
        </div>
        <form method="post" submitId="login-boton" onkeyup="validator.activateSubmit(this)" action="lib/LoginManager.php" class="login-f">
            <div class="input-login">
                <input name="user" placeholder="Ingrese su correo" type="text" autocomplete="off" validate="email" required/>
            </div>
            <div class="input-login">
                <input name="pass" placeholder="Ingrese su contraseña" type="password" autocomplete="off" validate="password" required/>
            </div>
            <div class="input-login">
                <button id="login-boton" class="boton-amarillo boton-login" type="submit" name="form-enviar" validate="submit" value="Submit" disabled>Enviar</button>
            </div>
        </form>
    <div>
</template>

</body>

</html>
