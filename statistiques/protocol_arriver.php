<?php
require_once "../inclu/pdo.php";
require_once "../inclu/function.php";
// $count_portarriver1 = 0;
// $count_portarriver2 = 0;
// $recherche4 = $pdo->prepare("SELECT protocol_ports_dest as protocol_portarriver FROM trams");
// $recherche4->execute();
// $recherche4 = $recherche4->fetchAll();
// $recherche4 = new ArrayObject($recherche4);
// foreach ($recherche4 as $key => $value) {
//     if ($value["protocol_portarriver"] == "443") {
//         $count_portarriver1++;
//     }
//     if ($value["protocol_portarriver"] == "3481") {
//         $count_portarriver2++;
//     }
// }
// $resultat = [
//     "portarriver1" => $count_portarriver1,
//     "portarriver2" => $count_portarriver2,
// ];


// echo json_encode($resultat);

// $recherche4 = "SELECT COUNT(protocol_ports_dest) as number,protocol_ports_dest
// FROM trams
// GROUP BY protocol_ports_dest";

// $recherche4 = $pdo->query($recherche4);
// $recherche4 = $recherche4->fetchAll();
// $value = [];
// $i = 0;
// foreach ($recherche4 as $recherche4) {
//     $value[$recherche4["protocol_ports_dest"]] = $recherche4["number"];
// }
// echo json_encode($value);

$recherche4 = "SELECT COUNT(protocol_ports_dest) as number,protocol_ports_dest
FROM trams
GROUP BY protocol_ports_dest";

$recherche4 = $pdo->query($recherche4);
$recherche4 = $recherche4->fetchAll();
$value = [];
$i = 0;
foreach ($recherche4 as $recherche4) {
    $value[$recherche4["protocol_ports_dest"]] = $recherche4["number"];
}
echo json_encode($value);
