
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml"> 
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /> 
<title>François HUYGHE - Portfolio</title> 
<meta name="description" content="Francois HUYGHE - director"> 
<meta name="keywords" content="francois huyghe, video, photo, director, réalisateur, audiovisuel"> 
<meta name="robots" content="ALL"> 
<meta name="revisit-after" content="15 Days"> 
<meta name="expires" content="Never"> 
<meta name="MSSmartTagsPreventParsing" content="TRUE"> 
<meta name="Identifier-URL" content="www.francoishuyghe.com"> 
<meta name="Home_URL" content="http://www.francoishuyghe.com"> 
<meta http-equiv="Content-Language" content="en-gb"> 
<meta name="Coverage" content="Worldwide"> 
<meta name="distribution" content="Global"> 
<link href="css/global.css" rel="stylesheet" type="text/css" media="screen, projection"> 
<link rel="shortcut icon" href="fav.ico"> 
<!--<script type="text/javascript" src="css/jquery.js"></script>-->
<script type="text/javascript" src="js/jquery-1.6.2.min.js"></script>
<script type="text/javascript" src="js/scrollingcarousel.2.0.min.js"></script> 
<style type="text/css"> 
</style> 

 
<script type="text/javascript"> 
$(document).ready(function(){
 
$('#scroll').hide();
$('#about').hide();
$('#collection').hide();
$('#contact').hide();
 
 
jQuery.fn.fadeToggle = function(speed, easing, callback) { 
   return this.animate({opacity: 'toggle'}, speed, easing, callback); 
}; 
 
$('a#aboutbtn').click(function () {
$('#video').fadeOut();
$('#contact').fadeOut();
$('#photo').fadeOut();
$('#web').fadeOut();
$('#about').fadeToggle("slow");
return false;
}); 
 
$('a#videobtn').click(function(){
$('#about').fadeOut();
$('#contact').fadeOut();
$('#photo').fadeOut();
$('#web').fadeOut();
$('#video').fadeToggle("Slow");
return false;
});
 
$('a#contactbtn').click(function () {
$('#video').fadeOut();
$('#about').fadeOut();
$('#photo').fadeOut();
$('#web').fadeOut();
$('#contact').fadeToggle("slow");
return false;
});
 
 $('a#webtbtn').click(function () {
$('#video').fadeOut();
$('#about').fadeOut();
$('#photo').fadeOut();
$('#contact').fadeOut();
$('#web').fadeToggle("slow");
return false;
});

$('a#photobtn').click(function () {
$('#video').fadeOut();
$('#about').fadeOut();
$('#web').fadeOut();
$('#contact').fadeOut();
$('#photo').fadeToggle("slow");
return false;
});

$('a#aboutcloseButton').click(function(){
$('#about').fadeOut();
return false;
});
 
$('a#photocloseButton').click(function(){
$('#photo').fadeOut();
return false;
});

$('a#videocloseButton').click(function(){
$('#video').fadeOut();
return false;
});

$('a#webcloseButton').click(function(){
$('#web').fadeOut();
return false;
});
 
$('a#contactcloseButton').click(function(){
$('#contact').fadeOut();
return false;
});
  
$('#video').fadeToggle("Slow");
return false;
});
 
 
 
 
 
</script> 
<script src="AC_RunActiveContent.js" type="text/javascript"></script> 
 
 <?php include('includes/stats.php'); ?>
</head> 
 
<body bgproperties="fixed"> 

<script type="text/javascript">
	$(document).ready(function() {
		$('#carousel-demo1').scrollingCarousel();
		
		$('#carousel-demo2').scrollingCarousel( {
			scrollerAlignment : 'vertical',
			autoScroll: true
		});
	});
</script>
 
<!-- photos
--> 
 
<!--<div id="photo-body">-->
<iframe src="test-carousel.html" width="100%" height="700px" style="border:none; margin-top:50px"></iframe>

<!--</div> -->
 
<!-- Photos
--> 

 
 
 
<!--<div style="display: none;" id="video"> 
<div id="video_close"><a href="#" id="videocloseButton"><img src="images/closebtn.png"></a> 
</div> 
 
<div><img src="../images/photo.png" alt="PHOTO" /></div><br>  
<br> 
<div id="video_txt"> <br />
<p>For ten years, I've carried my camera with me as often as I could.</p>

<p>I used to work with a digital <b>Canon 350D</b>, and its <br/>18-55mm lens.<br/>
I currently use a film <b>Minolta XG-1</b> camera, and its 85, 50 and 28mm lenses. </p>

<p>More photos on my <a href="http://www.flickr.com/photos/francoishuyghe/" target=_blank><b>Flickr account</b></a>.</p>
 

</div> 
 
</div> 
-->


<?php include('includes/nav.php'); ?>
<?php include('includes/about.php'); ?>
<?php include('includes/contact.php'); ?> 


</body> 
</html>  


