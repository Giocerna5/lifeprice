<?php
    include "../dbConnec.php";
    
    $conn = getConnection("LifePriceDb");
    
    $sql = 'SELECT diagnosis_table.diagnosis, facility_table.name, 
                facility_table.address, facility_table.region 
            FROM diagnosis_table INNER JOIN facility_table 
            ON diagnosis_table.diag_id = 101 AND facility_table.region LIKE "%San Diego%"';
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    echo json_encode($records);
?>