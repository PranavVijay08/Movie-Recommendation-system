<?php

session_start();
$connection=mysqli_connect("localhost","root","","movie");

if(isset($_POST['next1']))
{
    $user=$_POST['uid'];
    $pwd1=$_POST['pwd1'];
    $pwd2=$_POST['pwd2'];
}

if($user=="admin")
{
    $error="Invalid Username";
    $_SESSION["error"]=$error;
    header("location: createAccount_1.php");
}
elseif($pwd1!=$pwd2)
{
    $error="Passwords Do Not Match";
    $_SESSION["error"]=$error;
    header("location: createAccount_1.php");
}
elseif($uid="" || $pwd1=="" || $pwd2="")
{
    $error="Required Field is Empty";
    $_SESSION["error"]=$error;
    header("location: createAccount_1.php");
}
elseif(strlen($user)<3)
{
    $error="Username Should Contain Atleast 3 Characters";
    $_SESSION["error"]=$error;
    header("location: createAccount_1.php");
}
elseif(strlen($pwd1)<8)
{
    $error="Password Should Contain Atleast 8 Characters";
    $_SESSION["error"]=$error;
    header("location: createAccount_1.php");
}
else
{
    if(mysqli_connect_error())
    {
        die('Connect error');
    }
    else{
        $sql="SELECT * from user";
        $result=mysqli_query($connection,$sql);
        $check=0;
        while($row=mysqli_fetch_array($result))
        {
            $u1=$row['uid'];
            $p1=$row['pwd'];
            if($user==$u1)
            {
                $error="Username Already Taken";
                $_SESSION["error"]=$error;
                header("location: createAccount_1.php");
                $check=1;
            } 
        }
        if($check==0)
        {
           $sql="INSERT into user values('$user','$pwd1')";
           $result=mysqli_query($connection,$sql);
           $error="Account Successfully Created";
           $_SESSION["error"]=$error;
           header("location: index.php");
        }
    }
}

?>