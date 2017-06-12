<html lang="en">
<head>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<ul style="list-style-type:none; margin:-10; padding:0; overflow:hidden; background-color:black;">
	<li style="float:left;">
		<a style="display:block; color:chartreuse; text-align:center; padding:10px 16px; font-family:courier new; font-size:25; text-decoration:none;" href="./home.php"><big><strong>GeekText</strong></big></a>
	</li>
	
	<li style="float:right;">
		<a style="display:block; color:white; text-align:center; padding:15px 25px; text-decoration:none;" href="./shopping_cart.php">
			<i class="fa fa-cart-plus" style="font-size:25px"></i>
		</a>
	</li>
	
	<?php
		session_start();
		if(!isset($_SESSION['username'])){

			echo'<li style="float:right;">
				<a style="display:block; color:white; text-align:center; padding:18px 16px; text-decoration:none;" href="./create_account.php">Sign Up</a>
			</li>	

			<li style="float:right;">
				<a style="display:block; color:white; text-align:center; padding:18px 16px; text-decoration:none;" href="./sign_in.php">Sign In</a>
			</li>';
		}

		else {
			echo'
			<li style="float:right;">
			<a style="display:block; color:white; text-align:center; padding:18px 16px; text-decoration:none;" href="./logout.php">Log out</a>
			</li>';

			echo'
			<li style="float:right;">
			<a style="display:block; color:white; text-align:center; padding:18px 16px; text-decoration:none;" href="./account.php">'.$_SESSION['username'].'</a>
			</li>';
		}
	?>
	
	<li style="float:left;">
		<a style="display:block; color:white; text-align:center; padding:18px 16px; text-decoration:none;" href="./books.php">Books</a>
	</li>
	
	<li style="float:center;">
		<form style="margin:18px" action="search.php" method="post">
			<input type="text" name="search" placeholder="Search Book...">
			<button type="submit" style="display:inline-block; color:black;"><i class="fa fa-search" style="font-size:14px"></i></button>
		</form> 
    </li>
</ul>

<!-- border-left:1px solid #bbb; -->

</body>
</html>