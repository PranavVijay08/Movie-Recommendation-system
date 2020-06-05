<?php
    $conn=new mysqli("localhost","root","","movies");
    if($conn->connect_error){
        die("Failed to connect".$conn->connect_error);
    }
    if(isset($_POST['query'])){
        $inpText=$_POST['query'];
        $query="SELECT name1 FROM movie where name1 like '%$inpText%'";
        $result=$conn->query($query);
        if($result->num_rows>0){
            while($row=$result->fetch_assoc()){
                echo "<a href='#' style='width:50%' class='list-group-item list-group-item-action border-1'>" .$row['name1']."</a>";
            }
        }
        else{
            echo "<p class='list-group-item border-1'>No Record</p>";
        }
    }
?>