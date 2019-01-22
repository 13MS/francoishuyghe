<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-26523931-1']);
  _gaq.push(['_setDomainName', 'francoishuyghe.com']);
  _gaq.push(['_setAllowLinker', true]);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>

<script type="text/javascript" src="jquery-fancybox.js"></script>

<script type="text/javascript" src="jquery.easing-1.4.pack.js"></script>

<script type="text/javascript" src="jquery.mousewheel-3.0.4.pack.js"></script>

<link rel="stylesheet" href="fancybox/jquery.fancybox-1.3.4.css" type="text/css" media="screen" />

<script type="text/javascript">

$(document).ready(function() {

	/* This is basic - uses default settings */
	
	$("a#single_image").fancybox({
				'titlePosition'	: 'over'
			});
	
	/* Using custom settings */
	
	$("a#inline").fancybox({
		'hideOnContentClick': true
	});

	/* Apply fancybox to multiple items */
	
	$("a.group").fancybox({
		'transitionIn'	:	'elastic',
		'transitionOut'	:	'elastic',
		'speedIn'		:	600, 
		'speedOut'		:	200, 
		'overlayShow'	:	false,
	});
	
});
</script>
