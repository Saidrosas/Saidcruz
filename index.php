<!DOCTYPE html>
<html lang="es-mx">
<head>
    <meta charset="UTF-8">
    <title>IntroPhp7 Grupo X__</title>
    <link rel="stylesheet" href="css/problemaStem.css"/>
    <link href="https://fonts.googleapis.com/css?family=Rambla" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
</head>
<body>
   <section class="wrapper">
    <header>
      <h1 class="logo"><a href="index.html">IntroPHP7</a></h1>
      <nav>
      <ul>
        <li><a href="index.php" class="current">Inicio</a></li>
        <li><a href=basicoPhp7.php>Básico Php7</a></li>
      </ul>
      </nav>
    </header>
<section id="contenedor">
<section  class="problema">
<h2>Problema: Si una estrella de neutrones tiene un radio de 20<br>
km, Si a dicha estrella le lleva 4.3 segundos en<br>
completar una vuelta ¿cuál es la velocidad lineal
y la aceleración centrıpeta de ésta? ́
 v=2piRestrella/T y a=4pi2Restrella/T2</h2>
 <p>Descripción:</p>
        <p>la velocidad lineal de la estrella de neutrones es aproximadamente 37.02 km/s y la aceleración centrípeta es aproximadamente 222.78 km/s². <br>
        </p>
      </section>
      <section  class="esquemaProblema">
        <h2>Esquema</h2>
        <center>
        <img class="imgProblema" src="images/veloclineal.jpg">
        </center>
      </section>
      <section class="formulas">
        <h2>Fórmulas</h2>
        v = (2π * 20 km) / 4.3 s<br>
        a = (v²) / 20 km
      
      </section>
      <section class="datos">
        <h2>Datos:</h2>
      r = 20 km<br>
      s = 4.3 s
    </section>
      <section class="calculos">
        <h2>Solución</h2>
        <p> La velocidad lineal es de:<br>
          v = (2 * 3.1416 * 20 km) / 4.3 s<br>
a = (4 * 3.1416² * 20 km) / (4.3 s)²
          </p>
</section>
<script>
    <?php
function calcula_velocidadlineal(){
    // Datos
    var radioEstrella = 20; 
    var tiempoVuelta = 4.3; 
    var velocidadlineal = (2 * Math.PI * radioEstrella) / tiempoVuelta;
    var aceleracionCentripeta = (4 * Math.pow(Math.PI, 2) * radioEstrella) / Math.pow(tiempoVuelta, 2);
    console.log("La velocidad lineal es: " + velocidadlineal.toFixed(2) + " km/s");
    console.log("La aceleración centrípeta es: " + aceleracionCentripeta.toFixed(2) + " km/s²");
        
var d=document.getElementById("resultadoA");
d.innerHTML=velocidadlineal+' km/s²';
}
    </script>
    ?>
        <button onclick="calcula_velocidadlineal();">Presiona para calcular</button>
      </section>
      <section class="resultado">
        <h2>Resultado: </h2>
        <div id="resultadoA"></div>
      </section>
    </section>
    <footer class="pie">
     Creative Commons versión 3.0 SciSoft 2023
    </footer>
  </section>
</body>
</html>
