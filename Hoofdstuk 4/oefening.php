<?php
/**
 * User: Raoel van Schaijk
 * Date: 05/02/2020
 * Time: 10:56 PM
 * File: opdracht 2.1.php
 */
?>

<?php
date_default_timezone_set("Europe/Amsterdam");
$vandaag = date("d-m-Y H:i");
echo "De datum en tijd hier in Nederland is: $vandaag";
?>
<br>
<?php
date_default_timezone_set("Asia/Tokyo");
$vandaag = date("d-m-Y H:i");
echo "De datum en tijd in Japan is nu : $vandaag";
?>