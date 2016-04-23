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
			$social = false;
			$title = "participate";
		?>
		<? include 'header.php'; ?>
		<div class="row-fluid" style="margin-top: 20px;">
			<div class="span4">
				<div class="vending content-block" style="height: 300px;">
					<p>
						<h3>VOLUNTEER</h3>
						<!-- Become a part of the team and volunteer.  <br />
						We'd love to have you. <br />
						Please fill out as much information as possible. -->
						<br /><br />
						<h5>Volunteer applications are closed at this time</h5>
						<!-- <a class="btn btn-inverse" href="/volunteer_information.php">Volunteer Information</a> -->
					</p>
				</div>
			</div>
			<div class="span4">
				<div class="vending content-block" style="height: 300px;">
					<p>
						<h3>VENDING</h3> We are ready for vendor requests, we have a limited # of spaces available, please send requests to <a href="mailto:raindancevending@gmail.com?Subject=Vending" target="_top" style="text-decoration: none; color: white;">
raindancevending(at)gmail.com</a> and he will provide you with the necessary information.
					</p>
				</div>
			</div>
			<div class="span4">
				<div class="vending content-block" style="height: 300px;">
					<h3>WORKSHOPS</h3>
					<br /><br />
					<h5>Workshop applications are closed at this time</h5>
					<p style="text-indent: 0;">
						<!-- <a href="https://docs.google.com/forms/d/14Z2dEE-fuNCMM4_pMVbeQtU3O6X9Vss1-Vq0xcKB0MY/viewform" target="_blank" class="btn btn-inverse">Apply Here</a> -->
					</p>
				</div>
			</div>
		</div>
	</div>
	<? include '_footer.php'; ?>
</body>
</html>