<?php
require_once "../inclu/pdo.php";
require_once "../inclu/function.php";
// $count_portdepart1 = 0;
// $count_portdepart2 = 0;
// $count_portdepart3 = 0;
// $recherche3 = $pdo->prepare("SELECT protocol_ports_from as protocol_portdepart FROM trams");
// $recherche3->execute();
// $recherche3 = $recherche3->fetchAll();
// $recherche3 = new ArrayObject($recherche3);
// foreach ($recherche3 as $key => $value) {
//     if ($value["protocol_portdepart"] == "51062") {
//         $count_portdepart1++;
//     }
//     if ($value["protocol_portdepart"] == "63440") {
//         $count_portdepart2++;
//     }
//     if ($value["protocol_portdepart"] == "50046") {
//         $count_portdepart3++;
//     }
// }
// $resultat = [
//     "portdepart1" => $count_portdepart1,
//     "portdepart2" => $count_portdepart2,
//     "portdepart3" => $count_portdepart3,
// ];


// echo json_encode($resultat);


$recherche3 = "SELECT COUNT(protocol_ports_from) as number,protocol_ports_from
FROM trams
GROUP BY protocol_ports_from";

$recherche3 = $pdo->query($recherche3);
$recherche3 = $recherche3->fetchAll();
$value = [];
$i = 0;
foreach ($recherche3 as $recherche3) {
    $value[$recherche3["protocol_ports_from"]] = $recherche3["number"];
}
echo json_encode($value);
