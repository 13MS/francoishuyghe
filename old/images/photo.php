
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

<script type="text/javascript" src="http://use.typekit.com/zcs5bzm.js"></script>
<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
 
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
 
<!-- photos
--> 
 
<div id="photo-body">

<div>
<a href="http://www.flickr.com/photos/francoishuyghe/sets/72157627716015498/" target="_blank"><img src="images/photo/coree.jpg"/></a>
</div>
<div id="caption">
<b>Korea - 2009</b> <br/>
Three days in Korea, <br/>on my way to the International<br/> College Peace Film Festival, <br/>in Chuncheon.
</div> 




<div>
<a href="http://www.flickr.com/photos/francoishuyghe/sets/72157627592005803/" target="_blank"><img src="images/photo/australie.jpg"/></a>
 
</div>
<div id="caption">
<b>Australia - 2011</b><br/>
 During the shooting of<br/> A Taille Humaine,<br/> my web-documentary project,<br/> co-directed with Marion<br/> Payen.
</div>



<div>
<a id="example3" href="images/photo/chine.jpg"><img src="images/photo/chine.jpg"/></a>
 
</div>
<div id="caption">
<b>China - 2011</b><br/>
Two weeks in Beijing,<br/>
on my way back to France.
</div>


<div>
<a href="http://www.flickr.com/photos/francoishuyghe/sets/72157627592014149/" target="_blank"><img src="images/photo/frontiere.jpg"/></a>
 
</div>
<div id="caption">
<b>The Frontier- 2009</b><br/>
Photography project <br/>
made for the Valenciennes<br/>
University.
</div>

</div> 
 
<!-- Photos
--> 

 
 
 
<div style="display: none;" id="video"> 
<div id="video_close"><a href="#" id="videocloseButton"><img src="images/closebtn.png"></a> 
</div> 
 
<div><img src="../images/photo.png" alt="PHOTO" /></div><br>  
<br> 
<div id="video_txt"> <br />
<p>
For ten years, I've carried my camera with me as often as I could. That has made me a true lover of great pictures.
</p>
<p>
I pay a great attention at the quality of my frame and lighting, looking for the perfect picture. 
</p>
<p>
From Australia to Sweden, from Canada to China, my travels has brought me a lot of pictures, a lot of emotions.
</p>
<p>I work with a digital Canon 350D, and its 18-55mm lens, and a film Minolta X700, and its 50 and 28mm lenses. </p>
<p>To be upgraded soon.
</p>
<center>
<a href="http://www.flickr.com/photos/francoishuyghe/" target=_blank><img src="images/flickr-logo.png" width="50" height="20"/></a><br />
</center>
 

</div> 
 
</div> 



<?php include('includes/nav.php'); ?>
<?php include('includes/about.php'); ?>
<?php include('includes/contact.php'); ?> 


</body> 
</html>  


