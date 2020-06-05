<?php
session_start();
$user=$_SESSION['username'];
include 'header.php';
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="styles/account.css">
</head>
    <div class="account-intro">
        WELCOME &nbsp <?php echo "$user"; ?>
    </div>
    <div class="pref">
        <u>SET PREFERENCES</u>       
        <form method="post" action="account_change.php">
            <br>
            <table>
            <tr>
                <td>Genre:</td>
                <td>
                    <input type="checkbox" name="genre[]" value="Action">Action</input>
                    <input type="checkbox" name="genre[]" value="Comedy">Comedy</input>
                    <input type="checkbox" name="genre[]" value="Thriller">Thriller</input>
                    <input type="checkbox" name="genre[]" value="Romance">Romance</input>
                    <input type="checkbox" name="genre[]" value="Drama">Drama</input>
                    <input type="checkbox" name="genre[]" value="Crime">Crime</input>
                </td>
            </tr>
            <tr>
                <td>Language:</td>
                <td>
                <input type="checkbox" name="English"><label for="English">English</label>
             <!--   <input type="checkbox" name="Hindi"><label for="Hindi">Hindi</label>
                <input type="checkbox" name="Tamil"><label for="Tamil">Tamil</label> -->
                </td>
            <tr>
                
            </table>
            <br>
            <div class="button">
            <input type="submit" value="Make Changes" name="change">
            <div>
        </form> 
    </div>

    
</body>
</html>