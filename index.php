<?php
session_start();
?>

<!DOCTYPE HTML>
<html>
<head>
    <title>Cinema Cafe</title>
    <link rel="stylesheet" type="text/css" href="fontawesome-free-5.12.0-web/css/all.css">
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
    <form name="login-form" action="login_check.php" method="post">
    <div class="login-box">
        <h1>Login</h1>
        <div class="text">
            <i class="fas fa-user-alt"></i>
            <input type="text" placeholder="Username" name="uid">
        </div>
        <div class="text">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Password" name="pwd">
        </div>
        <input class="btn" type="submit" name="login-submit" value="Sign In">
    </form>
            <form name="create-account" action="createAccount_1.php" method="post">
            <input class="btn" type="submit" name="create-account" value="Create New Account">
            </form>
            <?php
            if(isset($_SESSION["error"]))
            {
                $error = $_SESSION["error"];
                echo "<script type='text/javascript'>alert('$error');</script>";
            }
        ?>
    </div>
</body>
</html>


<?php
unset($_SESSION["error"]);
?>

