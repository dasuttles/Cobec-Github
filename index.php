<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<title>Consortium for Belize Educational Cooperation</title>
		<link href="cobec.css" rel="stylesheet" type="text/css" />
	</head>
	<body>
		<?php include_once("analyticstracking.php") ?>
		<div class="page">
			<div class="header"><a href="http://www.cobec.org"/><img src="images/cobec-header.jpg" width="960" height="180"></a></div>
			<div class="columns">
				<div class="content">
					<div class="rotator">
						<ul>
							<li><img src="images/rotation/belize_beach.jpg" width="543" height="320"  alt="Beach in Belize" /></li>
							<li><img src="images/rotation/belize_ballcourt.jpg" width="543" height="320"  alt="Ball Court, Belopan Plaencia" /></li>
							<li><img src="images/rotation/belize_sunset2.jpg" width="543" height="320"  alt="Belize Sunset 1" /></li>
							<li><img src="images/rotation/belize_sunset.jpg" width="543" height="320"  alt="Belize Sunset 2" /></li>
						</ul>
					</div>
					<h2>The Consortium for Belize Educational Cooperation (COBEC)</h2>
					<h3>Winter Conference 2015</h3>
					<p>Dear COBEC Partners,</p>
					<p>I am certain that you already have or about to make travelling and accommodation plans to attend Winter
					Conference, 2015 in picturesque, Corozal. The theme selected for Winter Conference, 2015 is “Energizing
					Partnerships: expanding connections and opportunities”. Our planning committee is working diligently to
					ensure a successful conference.</p>
					<p>You will note that in previous correspondence we had indicated February 5 - 7, 2015 for the actual
					conference, but after consultation with the co-chairs it has been decided that the conference will be held
					on February 5 - 6, 2015. <a href="http://archives.valdosta.edu/cobec/documents/cobec-agenda_winter2015.pdf"> <b>Please read the attached proposed agenda</b></a>.</p>
					<p>Also <a href="http://archives.valdosta.edu/cobec/documents/cobec_prereg-form_winter2015.pdf"> <b>please fill out the pre-registration form</b></a> so that we can efficiently plan for the conference. We are
					asking a contribution US $5.00 to defray cost for the Mayan reenactment at Santa Rita Maya site, which
					can be paid at the site itself.</p>
					<p>If you have any queries or concerns please don’t hesitate to contact me. We will provide more details of
					the presentations and business meeting in our next correspondence.<p>
					Best regards,<br>
					<b><a href="mailto:rvellos@cjc.edu.bz"> R. Vellos</b></a><br>
					Planning Committee Member</p>
					<hr>
					<p>The Consortium for Belize Educational Cooperation (COBEC) was established in the late 1980s to link post-secondary educational institutions in Belize and other countries for the purpose of strengthening and expanding their capabilities in higher education. In 1992 the consortium was incorporated as a 501 (3) © non-profit corporation.</p>
				</div>
				<div>
					<script>
					(function() {
					var cx = '006196322132561528151:i3rl2avg9-o';
					var gcse = document.createElement('script');
					gcse.type = 'text/javascript';
					gcse.async = true;
					gcse.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') +
					'//www.google.com/cse/cse.js?cx=' + cx;
					var s = document.getElementsByTagName('script')[0];
					s.parentNode.insertBefore(gcse, s);
					})();
					</script>
					<gcse:search></gcse:search>
				</div>
				<div class="left sidebar">
					<?php include("includes/navigation.html"); ?>
				</div>
				<div class="right2 sidebar">
					<?php include("includes/updates.html"); ?>
					<!--<p><strong>Latest Updates</strong></p>
									<P><a href="member.php">Click here to see the updated Member List.</a></P>
					<!--p><strong>Members</strong></p>
					<p><a href="http://cobec.org/cobec_site/login1.html" target="_blank">Log in here for LISTSERV and Informational Documents.</a></p-->
				</div>
				<div class="footer"><?php include("includes/footer.html"); ?></div>
				</div><!-- end of columns-->
				</div><!-- end of page-->
			</body>
			<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
			<!-- By Dylan Wagstaff, http://www.alohatechsupport.net -->
			<script type="text/javascript">
			<!--
			function theRotator() {
				//Set the opacity of all images to 0
				$('div.rotator ul li').css({opacity: 0.0});

				//Get the first image and display it (gets set to full opacity)
				$('div.rotator ul li:first').css({opacity: 1.0});

				//Call the rotator function to run the slideshow, 6000 = change to next image after 6 seconds

				setInterval('rotate()',6000);

			}
				function rotate() {
				//Get the first image
				var current = ($('div.rotator ul li.show')?  $('div.rotator ul li.show') : $('div.rotator ul li:first'));
			if ( current.length == 0 ) current = $('div.rotator ul li:first');
				//Get next image, when it reaches the end, rotate it back to the first image
				var next = ((current.next().length) ? ((current.next().hasClass('show')) ? $('div.rotator ul li:first') :current.next()) : $('div.rotator ul li:first'));

				//Un-comment the 3 lines below to get the images in random order

				//var sibs = current.siblings();
			//var rndNum = Math.floor(Math.random() * sibs.length );
			//var next = $( sibs[ rndNum ] );

				//Set the fade in effect for the next image, the show class has higher z-index
				next.css({opacity: 0.0})
				.addClass('show')
				.animate({opacity: 1.0}, 1000);
				//Hide the current image
				current.animate({opacity: 0.0}, 1000)
				.removeClass('show');

			};
					$(document).ready(function() {
				//Load the slideshow
				theRotator();
				$('div.rotator').fadeIn(1000);
			$('div.rotator ul li').fadeIn(1000); // tweek for IE
			});
			function MM_swapImgRestore() { //v3.0
			var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
					}
					function MM_preloadImages() { //v3.0
					var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
					var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
							if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
							}
							function MM_findObj(n, d) { //v4.01
							var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
							d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
							if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
							for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
							if(!x && d.getElementById) x=d.getElementById(n); return x;
							}
							function MM_swapImage() { //v3.0
							var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
							if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
							}
					//-->
					</script>
				</html>