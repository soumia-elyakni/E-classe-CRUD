<?php
$conn = new mysqli('sql301.epizy.com', 'epiz_31043651', 'P4xmhy6c7hTr9T', 'epiz_31043651_e_classe_db');

$cours_id = $_GET['index']; 
$stmt=$conn->prepare("DELETE FROM courses WHERE id= '$cours_id'");
$stmt->execute();
        
$stmt->close();
    
    header('location: cours.php');


?>