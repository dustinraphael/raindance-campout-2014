<!DOCTYPE html>
<html>
<? include '_head.php'; ?>

<body>
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>

	<div class="container-fluid">
		<?
			$social = true;
			$title = "HOME";
		?>
		<? include 'header.php'; ?>
		<div id="content">

			<div class="row-fluid">
				<div class="span8" style="margin-bottom: 20px;">
					<section class="content-block">
						<h3>DJ Schedule</h3>
						<img src="../images/set-times.png" width="100%" /><br />
						<br /><br />
						<a class="btn btn-inverse btn-large" href="../images/Raindance_Campout_2014_DJ_Schedule.pdf" download>Download DJ Schedule</a>
					</section>
					<section class="content-block" style="margin-bottom: 20px; margin-top: 20px;">
						<h3>Workshop Schedule</h3>
						<img src="../images/workshop_schedule.png" width="100%" /><br />
						<br /><br />
						<a class="btn btn-inverse btn-large" href="../images/Raindance_Campout_2014_Workshop_Schedule.pdf" download>Download Workshop Schedule</a>
					</section>

					<div class="description content-block" style="margin-top: 20px;">
						<h3>Raindance 10 Year Anniversary Campout Celebration</h3>
						<p>
							This event was born deep within the redwood forest of the Santa Cruz mountains out of a collective passion for dancing wildly through the night, connecting with community, cultivating growth of awareness, radiating new ideas, and raising the bar for artistic expression to new heights; all while keeping our roots firmly planted in the underground bass movement that birthed us.
						</p>
						<p>
							The term "transformational festival" was not even a buzz word when we started. We just knew we were on to something special.  We knew it deserved to be nurtured and cultivated, and yet had no idea that ten years later there would be so many amazing festivals, and that the West Coast would become a trendsetter for conscious gathering evolution.
						</p>
						<p>
							While we strive to continually up the ante by showcasing the most brilliant talent, maintaining a stellar production and creatively approaching every aspect of our event, we are FUNdamentally committed to the unrestrained beauty of our community and an open and welcoming vibe to all who genuinely come to participate.
						</p>
						<p>
							Raindance is thrilled to invite you to our 10th annual campout celebration! We have relocated to Belden Town, an amazing venue on the Feather River in Plumas County and are upgrading the infamous "Raindance pool party" to the riverfront beach!  Bring your sunglasses, join the flotilla; and of course, don't forget to bring a towel!
						</p>
						<p>
							Belden is a well preserved mining town, complete with an authentic old-time saloon, restaurant, hotel, and campground.  Situated on the north fork of the Feather River in the foothills of the Sierra Nevada, we look forward to warm sunny days and cooler evenings with non-stop music all around the clock.
						</p>
					</div>
					<br /><br />
					<img src="../images/raindance2014poster.v7.png" />
					<br /><br />
				</div>
				<div class="span4">
					<div class="soundcloud content-block">
						<h3>LISTEN</h3>
						<iframe width="100%" height="350" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/playlists/29188773&amp;auto_play=false&amp;hide_related=false&amp;visual=true"></iframe>
					</div>
					<div class="youtube content-block">
						<h3>WATCH</h3>
						<iframe width="100%" height="315" src="//www.youtube.com/embed/hDYPT2FvVhw" frameborder="0" allowfullscreen></iframe>
					</div>
					<!-- <div class="facebook-comments content-block">
						<h3>INTERACT</h3>
						<div class="row-fluid">
							<div class="span12">
								<div class="fb-comments" data-href="http://raindancepresents.com" data-numposts="10" data-colorscheme="dark" data-width="300px"></div>
							</div>
						</div>
					</div> -->
				</div>
			</div>
		</div>
	</div>
	<? include '_footer.php'; ?>
</body>

</html>