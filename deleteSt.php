<?php
$conn = new mysqli('sql301.epizy.com', 'epiz_31043651', 'P4xmhy6c7hTr9T', 'epiz_31043651_e_classe_db');
$student_email = $_GET['index']; 
$stmt=$conn->prepare("DELETE FROM students WHERE email= '$student_email'");
$stmt->execute();
        
$stmt->close();
    
    header('location: stud.php');


?>