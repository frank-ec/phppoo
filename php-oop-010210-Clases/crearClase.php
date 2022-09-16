<?php
class Gatos{

}
/*
$clases = get_declared_classes();
foreach ($clases as $clase) {
	print $clase."<br>";
}
*/
if (class_exists("Gatos")) {
	print "La clase Gatos si existe"."<br>";
} else {
	print "La clase Gatos NO existe"."<br>";
}


?>