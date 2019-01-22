
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml"> 
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /> 
<title>François HUYGHE</title> 
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

<script type="text/javascript" src="http://use.typekit.com/zcs5bzm.js"></script>
<script type="text/javascript">try{Typekit.load();}catch(e){}</script>

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
$('#news').fadeOut();
$('#contact').fadeOut();
$('#photo').fadeOut();
$('#web').fadeOut();
$('#about').fadeToggle("slow");
return false;
}); 
 
$('a#videobtn').click(function(){
$('#about').fadeOut();
$('#contact').fadeOut();
$('#news').fadeOut();
$('#photo').fadeOut();
$('#web').fadeOut();
$('#video').fadeToggle("Slow");
return false;
});
 
$('a#contactbtn').click(function () {
$('#video').fadeOut();
$('#about').fadeOut();
$('#photo').fadeOut();
$('#news').fadeOut();
$('#web').fadeOut();
$('#contact').fadeToggle("slow");
return false;
});
 
 $('a#webtbtn').click(function () {
$('#video').fadeOut();
$('#about').fadeOut();
$('#photo').fadeOut();
$('#news').fadeOut();
$('#contact').fadeOut();
$('#web').fadeToggle("slow");
return false;
});

$('a#photobtn').click(function () {
$('#video').fadeOut();
$('#about').fadeOut();
$('#web').fadeOut();
$('#news').fadeOut();
$('#contact').fadeOut();
$('#photo').fadeToggle("slow");
return false;
});

$('a#aboutcloseButton').click(function(){
$('#about').fadeOut();
return false;
});
 
$('a#photoclosebtn').click(function(){
$('#photo').fadeOut();
return false;
});

$('a#newscloseButton').click(function(){
$('#news').fadeOut();
return false;
});

$('a#videoclosebtn').click(function(){
$('#video').fadeOut();
return false;
});

$('a#webclosebtn').click(function(){
$('#web').fadeOut();
return false;
});
 
$('a#contactcloseButton').click(function(){
$('#contact').fadeOut();
return false;
});
  
$('#scroll').delay(1000).fadeIn("slow").delay(1000).fadeOut("slow").delay(1000).fadeIn("slow").delay(1000).fadeOut("slow");
$('#news').fadeToggle("Slow");
});
 
 
 
 
 
</script> 
<script src="AC_RunActiveContent.js" type="text/javascript"></script> 
 
</head> 
 
<body > 
 
<!-- Pieuvre
--> 
 
<div id="Pieuvre">
<img src="images/pieuvre.png" width="600" height="612"/>
</div>
 
<!-- End Pieuvre
--> 

 
<!-- Navigation
--> 
 
<?php include('includes/nav.php'); ?>
 
<!-- End Navigation
--> 
 
 <!-- News Pop Up
--> 
 
<div style="display: none;" id="news"> 
<div id="news_close"><a href="#" id="newscloseButton"><img src="images/closebtn.png"></a> 
</div> 
<div id="boites_titre">News</div>
 
<br> 
<div id="news_txt"> <br>
<p><b>15-10-2011</b></p>
<p>
My new website is finally online ! You'll find a large panel of my work on photo, video and web. Feel free to contact me via the contact section. Enjoy !</p><br />

</div> 
 
</div> 
<!-- End of news Pop Up
 -->

<?php include('includes/about.php'); ?>
 
<?php include('includes/contact.php'); ?>
 
</div> 
</body> 
</html> 