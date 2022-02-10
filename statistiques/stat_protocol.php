<?php
require_once "../inclu/pdo.php";
require_once "../inclu/function.php";
$count_ICMP = 0;
$count_UDP = 0;
$count_TCP = 0;
$count_TLS = 0;
$recherche = $pdo->prepare("SELECT protocol_name as protocol FROM trams");
$recherche->execute();
$recherche = $recherche->fetchAll();
$recherche = new ArrayObject($recherche);
foreach ($recherche as $key => $value) {
    if ($value["protocol"] == "ICMP") {
        $count_ICMP++;
    }
    if ($value["protocol"] == "UDP") {
        $count_UDP++;
    }
    if ($value["protocol"] == "TCP") {
        $count_TCP++;
    }
    if ($value["protocol"] == "TLSv1.2") {
        $count_TLS++;
    }
}



// graph2

$count_disabled = 0;
$count_good = 0;
$recherche2 = $pdo->prepare("SELECT protocol_checksum_status as protocol_check FROM trams");
$recherche2->execute();
$recherche2 = $recherche2->fetchAll();
$recherche2 = new ArrayObject($recherche2);
foreach ($recherche2 as $key => $value) {
    if ($value["protocol_check"] == "disabled") {
        $count_disabled++;
    }
    if ($value["protocol_check"] == "good") {
        $count_good++;
    }
}
$resultat = [
    "disabled" => $count_disabled,
    "good" => $count_good,
    "IMCP" => $count_ICMP,
    "UDP" => $count_UDP,
    "TCP" => $count_TCP,
    "TLS" => $count_TLS,
];
echo json_encode($resultat);
