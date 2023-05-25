<?php
 require_once 'rectangle.php';
 require_once 'triangle_rectangle.php';
 require_once  'cercle.php';
 require_once  'parallelepipede.php';
 require_once  'pyramide.php';
 require_once  'sphere.php';

 $rectangle = new Rectangle(5, 10);
 $triangle = new TriangleRectangle(10,20);
$cercle = new Cercle(5);
$parallelepipede = new Parallelepipede(5, 10, 3);
$pyramide = new Pyramide(10);
$sphere = new Sphere(5);

echo "************************************<br>";
echo "Rectangle<br>";
echo "************************************<br>";

$rectangle->AfficherRectangle();

echo "<br>************************************<br>";
echo "Triangle<br>";
echo "************************************<br>";

$triangle->afficherTriangle();

echo "<br>************************************<br>";
echo "Cercle<br>";
echo "************************************<br>";

$cercle->afficherCercle();

echo "<br>************************************<br>";
echo "Parallèlepipède<br>";
echo "************************************<br>";

$parallelepipede->afficherParallelepipede();

echo "<br>************************************<br>";
echo "Pyramide<br>";
echo "************************************<br>";

$pyramide->afficherPyramide();

echo "<br>************************************<br>";
echo "Sphere<br>";
echo "************************************<br>";

$sphere->afficherSphere();




?>