<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include_once '../service/EtudiantService.php';
    extract($_POST);
    $es = new EtudiantService();
    $es->create(new Etudiant(null, $nom, $prenom, $ville, $sexe));
    echo json_encode($es->findAllApi());
}
?>