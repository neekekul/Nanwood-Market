<!DOCTYPE html>
<html lang="en-US">
<head>
	<title>nanwood_market</title>
	<meta charset="UTF-8"/>
	<meta name="description" content="Nanwood Market Website">
	<meta name="author" content="Luke Keen">
	<meta http-equiv="refresh" content="180">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="nanwood_style.css"/>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<![endif]-->
</head>
<body>
	<div id="main">
		<figure>
			<a href="/Nanwood/nanwood.php" target="_self" title="Home"><img id="Logo" src="Logo -03 copy.png" alt="Nanwood Market Logo" /></a>
		</figure>
		<nav>
			<ul>
				<li><a href="">SHOP</a></li>
				<li><a href="">BLOG</a></li>
				<li><a href="">EVENTS</a></li>
				<li><a href="">ABOUT</a></li>
				<li><a href="/Nanwood/nanwood.php" target="_self" title="Home">HOME</a></li>
			</ul>
		</nav>
	</div>
	<div class="w3-content w3-display-container" style="max-width:100%; margin-top: 0vw; margin-left: 0vw">
		<img class="mySlides" src="IMG_shovels.jpg" style="width:100%"/>
	</div>

<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 4000); // Change image every 2 seconds
}
</script>
</body>
</html>