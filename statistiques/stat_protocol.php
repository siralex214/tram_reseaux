<?php
require_once "../inclu/pdo.php";
require_once "../inclu/function.php";
// $count_ICMP = 0;
// $count_UDP = 0;
// $count_TCP = 0;
// $count_TLS = 0;
// $recherche = $pdo->prepare("SELECT protocol_name as protocol FROM trams");
// $recherche->execute();
// $recherche = $recherche->fetchAll();
// $recherche = new ArrayObject($recherche);
// foreach ($recherche as $key => $value) {
//     if ($value["protocol"] == "ICMP") {
//         $count_ICMP++;
//     }
//     if ($value["protocol"] == "UDP") {
//         $count_UDP++;
//     }
//     if ($value["protocol"] == "TCP") {
//         $count_TCP++;
//     }
//     if ($value["protocol"] == "TLSv1.2") {
//         $count_TLS++;
//     }
// }


// $resultat = [
//     "IMCP" => $count_ICMP,
//     "UDP" => $count_UDP,
//     "TCP" => $count_TCP,
//     "TLS" => $count_TLS,
// ];


// echo json_encode($resultat);

$recherche1 = "SELECT COUNT(protocol_name) as number,protocol_name
FROM trams
GROUP BY protocol_name";

$recherche1 = $pdo->query($recherche1);
$recherche1 = $recherche1->fetchAll();
$value = [];
$i = 0;
foreach ($recherche1 as $recherche1) {
    $value[$recherche1["protocol_name"]] = $recherche1["number"];
}
echo json_encode($value);
