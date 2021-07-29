<?php
    include 'config.php';
    
    $task= $_POST['task'];
    
    $sql = "insert into todos (title) values ('$task')";
    $result = mysqli_query($conn, $sql);

    if($result){
        echo 1;
    } 
    else{
        echo 0;
    }
?>
        

    