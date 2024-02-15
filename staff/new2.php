<?php
        session_start();
        $conn = mysqli_connect("localhost", "id21178263_root", "Vote@123", "id21178263_student");
        if(isset($_POST['submit']))
    {
        $name = $_POST["name"];
        $vp = $_POST['vp'];
        $president = $_POST['president'];
        $treasurer = $_POST['treasurer'];
        $secretary = $_POST['secretary'];
        $pts = 40;
        
        
        $query = "INSERT into staff(name,president,treasurer,vp,secretary,points) 
            values('$name','$president','$treasurer','$vp','$secretary',$pts)";
        $query_run = mysqli_query($conn, $query);
        if($query_run){
            $_SESSION['status'] = "Inserted Successfully";
            header("Location: log.html");
        }
        else{
            $_SESSION['status'] = "Inserted Successfully";
            header("Location: log.html");
        }
    }
        
?>