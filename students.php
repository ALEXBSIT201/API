<?php

$pdo = new PDO('mysql:host=localhost;dbname=epcst','root','');

$query = 'SELECT * FROM students ORDER BY id ASC';

//if(isset($_GET['limit'])){
   // $query.=' LIMIT '.$_GET['LIMIT'];
//}
//if(isset($_GET['order']) && isset($_GET['column'])) {
    //$query .= ' ORDER BY '.$_GET['order'].' '.$_GET['column'];
//}

$stmt = $pdo->prepare($query);
$stmt->execute();

$students = $stmt->fetchAll(PDO::FETCH_ASSOC);

header("content-Type: application/json");
echo json_encode($students);

?>