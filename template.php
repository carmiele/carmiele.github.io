<!DOCTYPE html>
<html>
<head>
<title>Carmen Tan | <?php echo $title; ?></title>
<meta charset="utf-8">
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" 
"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<meta name="viewport" content="initial-scale = 1.0,maximum-scale = 1.0" />
<link type="text/css" href="css/template.css" rel="stylesheet" />

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script type="text/javascript" src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/fancybox/1.3.4/jquery.fancybox-1.3.4.pack.min.js"></script>
<script src="js/jquery.lazyload.min.js" type="text/javascript"></script>
</head>


<body>

    <header>
    <a href="portfolio.php"><img class="logo" src="images/logo.png" /></a>
        <nav>
       	  	<ul>
            	<li><a href="portfolio.php" >Portfolio</a></li>
                <li><a href="resume.php" >Resume</a></li>
                <li><a href="contact.php" >Contact</a></li>
            </ul>
            <span>Web Developer and Designer</span>
            <p>I am a full-stack web developer and graphics designer whose work involves data collection and organizing it in a way that is not only legible and presentable to the user/viewer, but also visually stimulating. 
        </p>
        <p>(323) 828 - 4576
        	<br/>carmieletan@gmail.com
        </p>
        </nav>
    </header>
        
	<section id="main_content">
    	<?php
			echo $data;
		?>
    </section>
    
</body>
</html>

<script>
$( document ).ready(function() {
	var width = $(window).width();
	var height = $(window).height();
	ReSize(width, height);
		$(window).resize(function(){
			var nw = $(window).width();
			var nh = $(window).height();
			ReSize(nw, nh);
		});
	$("body").css("visibility", "visible");
});

function ReSize(width, height) {
	if(width < 550) {
		$("header").css("width", "100%");
		$("header").css("height", "inherit");
		$(".logo").css("height", 100);
		$("#main_content").css("width","100%");
		$("#main_content").css("height","inherit");
		$("#main_content").css("clear", "both");
		$("#main_content").css("overflow", "none");
		$("#main_content").css("margin",0);
	}
	else {
		$(".logo").css("height","15%");
		$("header").css("height", height +"px");
		$("header").css("width", "30%");
		var headerW = $("header").width();
		var remainder = width - headerW;
		var mainW = remainder - 30%remainder - 20;
		$("#main_content").css("width", mainW);
		$("#main_content").css("height", height - 20);
		$("#main_content").css("margin-top",0);
		$("#main_content").css("margin-left","10px");
		$("#main_content").css("clear", "none");
	}
	
		if(height < 300) {
			$("nav ul li").css("font-size", 10);
			$("nav").css("font-size", 10);
			$("nav span").css("font-size", 14);
		}
		else {
			$("nav ul li").css("font-size", 18);
			$("nav").css("font-size", 14);
			$("nav span").css("font-size", 24);
		}
}
</script>

<script type="text/javascript">
    $(function($){
        var addToAll = false;
        var gallery = true;
        var titlePosition = 'inside';
        $(addToAll ? 'img' : 'img.fancybox').each(function(){
            var $this = $(this);
            var title = $this.attr('title');
            var src = $this.attr('data-big') || $this.attr('src');
            var a = $('<a href="#" class="fancybox"></a>').attr('href', src).attr('title', title);
            $this.wrap(a);
        });
        if (gallery)
            $('a.fancybox').attr('rel', 'fancyboxgallery');
        $('a.fancybox').fancybox({
            titlePosition: titlePosition
        });
    });
    //$.noConflict();
</script>

<link rel="stylesheet" type="text/css" media="screen" href="http://cdnjs.cloudflare.com/ajax/libs/fancybox/1.3.4/jquery.fancybox-1.3.4.css" />
<link rel="stylesheet" type="text/css" media="screen" href="http://cdnjs.cloudflare.com/ajax/libs/fancybox/1.3.4/jquery.fancybox-1.3.4.css" />