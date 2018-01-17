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
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
	<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<div class="main">
		<figure>
			<a href="nanwood.php" target="_self" title="Home"><img id="Logo" src="Logo -03 copy.png" alt="Nanwood Market Logo" /></a>
		</figure>
		<nav>
			<ul>
				<li><a href="">SHOP</a></li>
				<li><a href="">BLOG</a></li>
				<li><a href="">EVENTS</a></li>
				<li><a href="">ABOUT</a></li>
				<li><a href="nanwood.php" target="_self" title="Home">HOME</a></li>
			</ul>
		</nav>
	</div>
	<div class="w3-content w3-display-container" style="max-width:100%; margin-top: 0vw; margin-left: 0vw">
		<img class="mySlides" src="IMG_shovels.jpg" style="width:100%"/>
		<div id="overImage" class="w3-display-middle w3-container w3-padding-16">
            <h1>Nanwood Market</h1>
		    <form action="nanwood.php" method="GET">
                <button id="bestbutton">CHECK US OUT</button>
            </form>
		</div>
		
	</div>
	<div id="social">
	    <figure id="socialmedia">
	        <a href="https://www.instagram.com/nanwoodmarket" target="_blank" class="fa fa-instagram"></a>
	        <!--<a href= target="_blank" class="fa fa-snapchat-ghost"></a>-->
	        <!--<a href="https://www.facebook.com/nanwoodmarket" target="_blank" class="fa fa-facebook"></a>
	        <a href="#" class="fa fa-twitter"></a>-->
	    </figure>
	</div>
	<div class="col-lg-12">
	    <?php
            $access_token="3116410299.1677ed0.60a4f9046cc24495a34e3fb13ae3f967";
            $photo_count=6;
     
            $json_link="https://api.instagram.com/v1/users/self/media/recent/?";
            $json_link.="access_token={$access_token}&count={$photo_count}";
        
            $json = file_get_contents($json_link);
            $obj = json_decode($json, true, 512, JSON_BIGINT_AS_STRING);
        
            foreach ($obj['data'] as $post) {
     
            $pic_text=$post['caption']['text'];
            $pic_link=$post['link'];
            $pic_like_count=$post['likes']['count'];
            $pic_comment_count=$post['comments']['count'];
            $pic_src=str_replace("http://", "https://", $post['images']['standard_resolution']['url']);
            $pic_created_time=date("F j, Y", $post['caption']['created_time']);
            $pic_created_time=date("F j, Y", strtotime($pic_created_time . " +1 days"));
     
            echo "<div class='col-md-4 col-sm-6 col-xs-12 item_box'>";        
                echo "<a href='{$pic_link}' target='_blank'>";
                    echo "<img class='img-responsive photo-thumb' src='{$pic_src}' alt='{$pic_text}'>";
                echo "</a>";
                echo "<p>";
                    echo "<p>";
                        echo "<div style='color:#262626;'>";
                            echo "<a href='{$pic_link}' target='_blank'>{$pic_created_time}</a>";
                        echo "</div>";
                    echo "</p>";
                    echo "<p class='comment'>{$pic_text}</p>";
                echo "</p>";
            echo "</div>";
            }
        ?>
	</div>
	<div id="info">
	    <p>well well well</p>
	</div>
	<div id="copyright">
        <p>Copyright © 2018 Nanwood Market</p>

    </div>

<script>
$('.main').addClass('original').clone().insertAfter('.main').addClass('cloned').css('position','fixed').css('top','0').css('margin-top','-1.1vw').css('height','8.49vw').css('z-index','500').removeClass('original').hide();

scrollIntervalID = setInterval(stickIt, 10);


function stickIt() {

  var orgElementPos = $('.original').offset();
  orgElementTop = orgElementPos.top;               

  if ($(window).scrollTop() >= (orgElementTop)) {
    // scrolled past the original position; now only show the cloned, sticky element.

    // Cloned element should always have same left position and width as original element.     
    orgElement = $('.original');
    coordsOrgElement = orgElement.offset();
    leftOrgElement = coordsOrgElement.left;  
    widthOrgElement = orgElement.css('width');
    $('.cloned').css('left',leftOrgElement+'px').css('top',0).css('width',widthOrgElement).show();
    $('.original').css('visibility','hidden');
  } else {
    // not scrolled past the menu; only show the original menu.
    $('.cloned').hide();
    $('.original').css('visibility','visible');
  }
}
</script>
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