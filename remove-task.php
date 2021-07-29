<?php
    include 'config.php';
    
    $id= $_POST['id'];

    $sql = "delete from todos where id='$id'";
    $result = mysqli_query($conn, $sql);
    echo $result;
    if($result){
        echo 1;
    } 
    else{
        echo 0;
    }
?>