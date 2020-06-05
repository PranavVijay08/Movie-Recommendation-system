<?php

session_start();

?>
<!DOCTYPE HTML>
<html>
<head>
    <title>Cinema Cafe</title>
    <link rel="stylesheet" type="text/css" href="styles/style.css">
    <link rel="stylesheet" type="text/css" href="styles/login.css">
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
</head>
<body>
    <div class="header">
		<div class="inner_header">
			<div class="logo">
			<a href="index.php"><h1><i>CINEMA</i><span>CAFE</span></<i></h1></a>
            </div>
        </div>
    </div>
    <form name="new-account" action="createAccount_2.php" method="post">
        <div class="login-box">
            <h1>Create A New Account</h1>
            <div class="text">
                <input type="text" placeholder="Enter Your Username" name="uid">
            </div>
            <div class="text">
                <input type="password" placeholder="Enter Your Password" name="pwd1">
            </div>
            <div class="text">
                <input type="password" placeholder="Confirm Your Password" name="pwd2">
            </div>
            <input class="btn" type="submit" name="next1" value="Next">
        </div>
        <?php
            if(isset($_SESSION["error"]))
            {
                $error = $_SESSION["error"];
                echo "<script type='text/javascript'>alert('$error');</script>";
            }
        ?>  
    </form>
</body>
</html>

<?php
unset($_SESSION["error"]);
?>
