<?php
    require_once('./dbConn.php');
    
    $db = getConnection();
    
    $sql ="SELECT * FROM symptoms";
   
    $stmt = $db->prepare($sql);
    $stmt->execute();
    $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    echo json_encode($records);
?>