<!DOCTYPE html>
<html lang="es-mx">
<head>
    <meta charset="UTF-8">
    <title>IntroPhp7 Grupo X__</title>
    <link rel="stylesheet" href="css/estilos.css"/>
    <link rel="stylesheet" href="css/menu.css"/>
    <link rel="stylesheet" href="css/problemas.css"/>
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
  <h2>Problema: Cálcular la densidad de la Tierra</h2>
  <p>Descripción:</p>
  Sabiendo que la Luna da una vuelta a la Tierra en 27.3 dıas.<br>
  ¿cuál será el perıodo de un satélite que vuela a 10 000 km del centro de la Tierra?<br>
  Considera que la distancia de la Tierra a la Luna es 3,8 × 10 5 km. <br>
</section>
<section class="formulas">
<h2>Fórmulas</h2>
Tiempo de vuelta de la Luna = 6,371 km + 3.8 × 10^5 km + 10,000 km <br>
        Semieje mayor de la Luna = 3.9 × 10^5 km + 10,000 km<br>
        Semieje mayor del satélite = 4 × 10^5 km <br>
</section>
<section class="datos">
<h2>Datos:</h2>
Semieje mayor = Radio de la Tierra + Distancia Tierra-Luna + Altitud del satélite <br>
</section>
<section class="calculos">
<h2>Solución</h2>
   <p>(Periodo del satélite)^2 = (27.3 días)^2 * (4 × 10^5 km)^3 / (3.8 × 10^5 km)^3 <br>

(Periodo del satélite)^2 = (27.3 días)^2 * (4 × 10^5 km / 3.8 × 10^5 km)^3 <br>

(Periodo del satélite)^2 = (27.3 días)^2 * (1.0526)^3 <br>

(Periodo del satélite)^2 = (27.3 días)^2 * 1.159 <br>

(Periodo del satélite)^2 = 742.89 días^2 <br>

Tomando la raíz cuadrada de ambos lados: <br>
Periodo del satélite = √742.89 días <br>
Periodo del satélite ≈ 27.23 días</p>
</section>
<?php
     function calcula(){
      $distanciaTierraLuna = 3.8e5; // Distancia de la Tierra a la Luna en km
      $altitudSatelite = 1e4; // Altitud del satélite en km
      $semiejeMayor = 6.371e3 + $distanciaTierraLuna + $altitudSatelite;
      $periodoSatelite = sqrt(pow(27.3, 2) * pow($semiejeMayor, 3) / pow($distanciaTierraLuna, 3));
return $periodoSatelite;
     }

?>
<section class="resultado">
<h2>Resultado:</h2>
<div id="resultadoA"></div>
<?php
 print "<h1> El periodo del satélite que vuela a 10,000 km del centro de la Tierra es aproximadamente ".calcula(). " Dias </h1>";
 
?>
</section>
</section>
    <footer class="pie">
     Creative Commons versión 3.0 SciSoft 2023
    </footer>
   </section>
</body>
</html>
