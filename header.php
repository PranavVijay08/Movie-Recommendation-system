<?php
include 'test.php';
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
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="header">
		<div class="inner_header">
			<div class="logo">
			<a href="index.php"><h1><i>CINEMA</i><span>CAFE</span></<i></h1></a>
            </div>
        
        <div class="navigation">
        <form action="result.php" method="post">
            <a href="homepage.php" style="color:white"><li>Home</li></a>
            <a href="account.php" style="color:white"><li>Account</li></a>
            <a href="r.php" style="color:white"><li>Recommended</li></a>
            <a href="logout.php" style="color:white"><li>Logout</li></a>
            <a><li><input type="text" id=search class="search" name="search" placeholder="Search For Movies...."></li></a>
            <a><li></li></a>

        </form>
        <div class="col-md-5" style="position: absolute; margin-top: 60px; margin-left: 250px ">
            <div class="list-group" id="show-list">
                
            </div>
        </div>

        </div>
        </div>

    </div>
    <script type="text/javascript">
        $(document).ready(function(){
            $("#search").keyup(function(){
                var searchText = $(this).val();
                if(searchText!=''){
                    $.ajax({
                        url:'action.php',
                        method:'post',
                        data:{query:searchText},
                        success:function(response){
                            $("#show-list").html(response);

                        }
                    })
                }
                else{
                    $("#show-list").html('');
                }
            });
            $(document).on('click','a',function(){
                $("#search").val($(this).text());
                $("#show-list").html('');
            })
        });
    </script>
    </body>
</html>
    