<?php
session_start();
include 'header.php';
?>

<html>
<head>
    <title>Cinema Cafe</title>
    <link rel="stylesheet" type="text/css" href="styles/style.css">
    <link rel="stylesheet" type="text/css" href="styles/navbar.css">
    <link rel="stylesheet" type="text/css" href="styles/slideshow.css">
    <link rel="stylesheet" type="text/css" href="styles/searchbar.css">
    <link rel="stylesheet" type="text/css" href="styles/movie-block.css">
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <style>
        img{
            height: 300px;
            width: 250px;
            }
        .movie-block{
            height:500px;
        }    
    </style>
<body>
<div class="img_container">
	<div class="slider">
		<div class="load">
		</div>
	</div>
    </div>
    <div class="movie-block">
        <div class="inner-block">
            <h1><b><u>Recently Watched</u></b></h1>
            <br><br>
            <img src="img/movie/endgame.jpg">
        </div>
    </div>
    <div class="movie-block">
        <div class="inner-block">
            <h1><b><u>New Releases</u></b></h1>
        </div>
    </div>
</body>
</html>