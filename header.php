<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body> 

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a href="./"><img src="images/logo1.png" style="width:250px;height:50px;"></a>
      <a class="navbar-brand" style="color:chartreuse; font-size: 24;" href="./"></a>
    </div>
    <ul class="nav navbar-nav">
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Browse Books<span class="caret"></span></a>
        <ul class="dropdown-menu">
		  <li><a href="./books.php">All</a></li>
          <li><a href="book_genre.php">Genre</a></li>
          <li><a href="#">Best Seller</a></li>
          <li><a href="book_rating.php">Rating</a></li>
        </ul>
      </li>
    </ul>
	
    <form class="navbar-form navbar-left" action="book_search.php" method="get">
		<div class="form-group">
			<input type="text" class="form-control" placeholder="Search by Book Title" name="title">
		</div>
		<button type="submit" class="btn btn-default">Search</button>
	</form>
	
    <ul class="nav navbar-nav navbar-right">

    <?php
				session_start();
				if(!isset($_SESSION['username'])){
					echo'<li><a href="./shopping_cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
						 <li><a href="./create_account.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
						 <li><a href="./sign_in.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>';
				}	
				else{
					
					$id = $_SESSION['username'];
					$link = mysqli_connect("localhost", "root", "", "geek_text");
					$sql = "SELECT * FROM cart WHERE user_id ='$id'";
					$result1 = mysqli_query($link, $sql);
					$count1=mysqli_num_rows($result1);
					
					echo'<li><a href="./shopping_cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart - '.$count1.' item(s)</a></li>
					<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="./account.php">'.$_SESSION['username']. '<span class="caret"></span></a>
	        				<ul class="dropdown-menu">
		          				<li><a href="./account.php">Account</a></li>
		         			    <li><a href="logout.php">Sign Out</a></li>
	        				</ul>
     					</li>';
				}
    ?>

     <li style="float:right;">
        <a style="display:block; color:white; text-align:center; padding:15px 25px; text-decoration:none;" href="./shopping_cart.php"></a>
     </li>	
    </ul>
  </div>
</nav>
</body>
</html>
