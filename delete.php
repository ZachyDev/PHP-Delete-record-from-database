<?php
    require_once('conn.php');

    $queryDelete = "DELETE FROM `employees` WHERE `Username` = 'Rodgers Ndocha';";
    // check if the delete was successful
    if(mysqli_query ($conn,$queryDelete)){
        echo "Delete success";
    }else{
        echo "delete failed";
    }
    mysqli_close($conn);

?>