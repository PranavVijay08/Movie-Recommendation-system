<?php
session_start();
if(isset($_POST['login-submit']))
{
    $user=$_POST['uid'];
    $pwd=$_POST['pwd'];
}
$check=0;
$connection=mysqli_connect("localhost","root","","movies");
if(mysqli_connect_error())
{
    die('Connect error');
}
else
{
    $sql="SELECT * from user";
    $result=mysqli_query($connection,$sql);
    while($row=mysqli_fetch_array($result))
    {       
        if($user==$row['uid'])
        {   
            $t1=$row['pwd'];
            if($t1==$pwd)
            {
                $check=1;
                break;
            }  
        }
    }
}
if($check==1)
{
    $_SESSION['username']=$user;
    $_SESSION['display']="You have logged in";
    if(isset($_SESSION['username']))
    {
        if(isset($_SESSION['display']))
        {
            $display=$_SESSION['display'];
            echo "<script type='text/javascript'>alert('$display');</script>";
            header("location: homepage.php"); 
        }
    }   
    
}
else
{
    $error="Invalid Credentials";
    $_SESSION["error"]=$error;
    header("location: index.php");
} 


?>