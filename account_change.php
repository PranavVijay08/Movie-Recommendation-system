<?php
session_start();
$user=$_SESSION['username'];
include 'test.php';
if(isset($_POST["change"]))
{
    $g=array('','','','','','','');
    $i=0;
    if(!empty($_POST['genre']))
    {
        foreach($_POST['genre'] as $selected){
            $g[$i]=$selected;
            $i=$i+1;
        }
    }
    
}
if(mysqli_connect_error())
{
    die('Connect error');
}
else{

    $sql="SELECT uid from user_genre";
    $result=mysqli_query($connection,$sql);
    $check=0;
    while($row=mysqli_fetch_array($result))
    {
        $u1=$row['uid'];
        if($user==$u1)
        {
            $check=1;
        } 
    }
    if($check==0)
    {
        $sql="INSERT into user_genre (uid) VALUES ('$user')";
        $result=mysqli_query($connection,$sql);
    }
    foreach($g as $selected)
    {
        $sql="INSERT into user_genre (Action) VALUES (1) where uid=$user";
        $result=mysqli_query($connection,$sql); 
    }
}

?>