<?php
include('connect.php');
if (isset($_POST["create"])) {
    $project_name = mysqli_real_escape_string($conn, $_POST["project_name"]);
    $project_address = mysqli_real_escape_string($conn, $_POST["project_address"]);
    
    $sqlInsert = "INSERT INTO projects(project_name , project_address) VALUES ('$project_name','$project_address')";
    if(mysqli_query($conn,$sqlInsert)){
        session_start();
        $_SESSION["create"] = "Project Added Successfully!";
        header("Location:admin.php");
    }else{
        die("Something went wrong");
    }
}
if (isset($_POST["edit"])) {
    $project_name = mysqli_real_escape_string($conn, $_POST["project_name"]);
    $project_address = mysqli_real_escape_string($conn, $_POST["project_address"]);
   
    $id = mysqli_real_escape_string($conn, $_POST["id"]);
    $sqlUpdate = "UPDATE projects SET project_name = '$project_name', project_address = '$project_address' WHERE id='$id'";
    if(mysqli_query($conn,$sqlUpdate)){
        session_start();
        $_SESSION["update"] = "Project Updated Successfully!";
        header("Location:admin.php");
    }else{
        die("Something went wrong");
    }
}
?>