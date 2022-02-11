<?php
    $title = $_POST['title'];
    $chapitre = $_POST['chapitre'];
    $prix = $_POST['prix'];
    

    $conn = new mysqli('sql301.epizy.com', 'epiz_31043651', 'P4xmhy6c7hTr9T', 'epiz_31043651_e_classe_db');
    if($conn->connect_error){
        die('Connection Failed : '.$conn->connect_error);
    }else{
        $stmt = $conn->prepare("INSERT INTO courses(title, chapitre, prix) VALUES(?,?,?)");
        $stmt->bind_param("sis", $title, $chapitre, $prix);
        $stmt->execute();
        
        $stmt->close();
        $conn->close();
    }
    header('location:cours.php');
?>