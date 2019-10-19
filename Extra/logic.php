<?php 
    include_once "connection.php";
    
    $fname =mysqli_real_escape_string($conn, $_POST['fname']);
    $lname = mysqli_real_escape_string($conn,$_POST['lname']);
    $pswrd =mysqli_real_escape_string($conn, $_POST['pswrd']);
    $mail = mysqli_real_escape_string($conn,$_POST['mail']);

    $sql = "INSERT INTO user(fname,lname,pswrd,email) VALUES(?,?,?,?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt,$sql)){
        echo "SQL statement failed";
    }else{
        mysqli_stmt_bind_param($stmt,"ssss",$fname,$lname,$pswrd,$mail);
        mysqli_stmt_execute($stmt);
        echo "hhh";
        header ("Location: ../index.php?signup=success");
    }



?>