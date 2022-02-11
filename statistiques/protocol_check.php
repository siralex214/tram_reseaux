<?php
require_once "../inclu/pdo.php";
require_once "../inclu/function.php";
// $count_disabled = 0;
// $count_good = 0;
// $recherche2 = $pdo->prepare("SELECT protocol_checksum_status as protocol_check FROM trams");
// $recherche2->execute();
// $recherche2 = $recherche2->fetchAll();
// $recherche2 = new ArrayObject($recherche2);
// foreach ($recherche2 as $key => $value) {
//     if ($value["protocol_check"] == "disabled") {
//         $count_disabled++;
//     }
//     if ($value["protocol_check"] == "good") {
//         $count_good++;
//     }
// };

// $resultat = [

//     "disabled" => $count_disabled,
//     "good" => $count_good,

// ];


// echo json_encode($resultat);
$recherche2 = "SELECT COUNT(protocol_checksum_status) as number,protocol_checksum_status
FROM trams
GROUP BY protocol_checksum_status";

$recherche2 = $pdo->query($recherche2);
$recherche2 = $recherche2->fetchAll();
$value = [];
$i = 0;
foreach ($recherche2 as $recherche2) {
    $value[$recherche2["protocol_checksum_status"]] = $recherche2["number"];
}
echo json_encode($value);
