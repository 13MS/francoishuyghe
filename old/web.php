
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
<script type="text/javascript" src="css/jquery.js"></script> 
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
 
 $('a#webbtn').click(function () {
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
  
$('#web').fadeToggle("Slow");
return false;
});
 
 
 
 
 
</script> 
<script src="AC_RunActiveContent.js" type="text/javascript"></script> 
 
 <?php include('includes/stats.php'); ?>
</head> 
 
<body bgproperties="fixed"> 
<?php include('includes/setup-fb.php'); ?> 

 
<!-- Pieuvre
--> 
 
<div id="web-body">

<div>
<a href="http://www.marionpayen.com" target="_blank"><img src="images/web/marionpayen.png" /></a><br />
<div id="caption">
MarionPayen.com<br />
<a href="http://www.marionpayen.com">Marion Payen</a> & François Huyghe<br />
2012
</div> 
</div>

<div>
<a href="http://www.ataillehumaine.com" target="_blank"><img src="images/web/ataillehumaine.png" /></a><br />
<div id="caption">
A Taille Humaine<br />
<a href="http://www.marionpayen.com">Marion Payen</a> & François Huyghe<br />
2011
</div> 
</div>

<div>
<a href="http://www.francoishuyghe.com" target="_blank"><img src="images/web/portfolio.png" /></a>
<div id="caption">
Portfolio<br />
<a href="http://www.marionpayen.com">Marion Payen</a> & François Huyghe<br />
2011
</div> 
</div>

</div> 
 
<!-- End Pieuvre
--> 

 


<!-- web Pop Up
 -->


<!--<div style="display: none;" id="web"> 
<div id="web_close"><a href="#" id="webcloseButton"><img src="images/closebtn.png"></a> 
</div> 
 
<div><img src="../images/web.png" alt="WEB" /></div><br> 
<br> 
<div id="video_txt"> <br>
I developed websites with the very talented <a href="http://www.marionpayen.com"><b>Marion Payen</b></a>.<br><br>

I usually try to create a different way of browsing internet, creating my websites from scratch.<br><br>


I have worked with a large panel of IT languages :<br>
- HTML 3<br>
- CSS<br>
- MySQL<br>
- JAVA<br>
- ActionScript 3<br>
</div> 
</div> -->

<!-- End of video Pop Up
 -->


<?php include('includes/nav.php'); ?>
<?php include('includes/about.php'); ?>
<?php include('includes/contact.php'); ?> 



</body> 
</html>  


