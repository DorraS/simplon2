<?PHP
/**
* Afficher les multiples de 5 de 0 a 100 sans faire de multiplication Le faire avec for
* Le faire avec for
* Le faire avec while
*
*
*/

echo "<h1>Avec for</h1>";
for($i=0;$i<=100;$i++) {
    if($i%5 == 0) {
        echo "$i est un multiple de 5<br />";
    }        
}
?>

<h1>Avec while</h1>

<?php
$i = 0;
while($i<=100) {
    if($i%5 == 0) {
        echo "$i est un multiple de 5<br />";
    }     
    $i++;
}
?>
<h1>Avec do</h1>

<?php
$i = 0;
do {
    if($i%5 == 0) {
        echo "$i est un multiple de 5<br />";
    }     
    $i++;
}while($i<=100);