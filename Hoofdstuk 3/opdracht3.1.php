<?php
/**
 * User: Raoel van Schaijk
 * Date: 05/02/2020
 * Time: 10:56 PM
 * File: opdracht 3.1.php
 */
?>
<a href="../Hoofdstuk%202/index.php">home</a>
<?php
//initialisatie van variabelen
$evenement = "elfstedentocht";
$fries = "Alvestêdetocht";
$kilometers = "200";
$typebaan = "schaatstocht";
$typestructuur = "natuurijs";
$organisatie = "Koninklijke Vereniging De Friesche Elf Steden";
$plaats = "Leeuwarden";
$provincie = "Friesland";
$evenementhoeveelheden = "15";
$jaartijd = "1909";
$aantal = "1";

$verhaal1= "De $evenement (Fries: $fries) is een $kilometers lange $typebaan over $typestructuur die wordt georganiseerd
door $organisatie. $plaats de hoofdstad van $provincie, is start- en aankomstplaats. De $evenement, is inmiddels $evenementhoeveelheden
maal verreden en werd voor het eerst in $jaartijd gereden en wordt maximaal $aantal keer per winter gehouden.";

//concat
$verhaal2 = "de ".$evenement."(Fries: ".$fries. "is een".$kilometers."lange".$typebaan."over".$typestructuur."die wordt georganiseerd door".$organisatie.".".$plaats."de hoofdstad van".$provincie.", is start- en aankomstplaats. De".$evenement.", is inmiddels".$evenementhoeveelheden."maal verreden en werd voor het eerst in".$jaartijd."gereden en wordt maximaal".$aantal."keer per winter gehouden.";


?>
<!doctype html>
<html>
<body>
<?php
echo "<p> $verhaal1 </p>";
echo "<p> $verhaal2 </p>";
?>
</body>
</html>