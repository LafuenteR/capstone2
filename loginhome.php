<!DOCTYPE html>
<html>
<head>
	<title>Photo Sharing</title>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <style type="text/css">
    .nav-header-color{
    	/*background: linear-gradient(to bottom, #3399ff 0%, #ccffff 100%);*/
    	/*background: linear-gradient(to bottom, #0033cc 0%, #66ccff 50%);*/
    	/*background: linear-gradient(to bottom, #0033cc 0%, #66ccff 100%);*/
    	background: white;
    	border: none;
    	/*border-color: #fcf8e3;*/
    }
    .navbar{
    	border: none;
    }
    .sign-log-border{
    	border: 1px solid black;
    	margin-bottom: 30px;
    }
    #log-in-div, #sign-up-h5{
    	display: none;
    }
    .navbar-collapse .navbar-nav>li>a, .nav-header-color .navbar-header>a{
    color: black;
    }
    .navbar-collapse .navbar-nav>li>a:hover, .nav-header-color .navbar-header>a{
    	color: red;
    }
    </style>
</head>
<body>
	<nav class="navbar navbar-inverse">
    	<div class="container-fluid nav-header-color">
            <div class="navbar-header">
            	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            		<span class="icon-bar"></span>
            		<span class="icon-bar"></span>
            		<span class="icon-bar"></span> 
      			</button>
              <a class="navbar-brand" href="loginhome.php">PhotoSharing</a>
            </div>
            <div class="collapse navbar-collapse dropdown-content" id="myNavbar">
            
            <ul class="nav navbar-nav navbar-right">
                <!-- <form> -->
            	<li><a href="profile.php">Hi, 
                <?php 
                require 'login.php';
                require 'signup.php';
                 echo $_SESSION['username']; ?>
                </a></li>
                <li><a href="#">
                    <?php 
                    // echo "<form method='POST' action='logout.php'>";
                    echo "<input type='submit' name='logout' value='Log Out' ";
                    // echo "</form>";
                    ?>
                </a></li>
                <!-- </form> -->
                <!-- <li><a href="product.php" id="container-product">Products</a></li> -->
            </ul>
         
            </div>
      	</div>  <!-- container-fluid -->
    </nav>

</body>
<script type="text/javascript">
	$("#log-in-a").click(function(){
		$("#log-in-div").show();
		$("#sign-up-h5").show();
		$("#sign-up-div").hide();
		$("#log-in-h5").hide();
	});
	$("#sign-up-a").click(function(){
		$("#sign-up-div").show();
		$("#log-in-h5").show();
		$("#log-in-div").hide();
		$("#sign-up-h5").hide();
	});
</script>
</html>
