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

	<div class="container-fluid tickets">
		<?
			$social = false;
			$title = "tickets";
		?>
		<? include 'header.php'; ?>
		<div class="row-fluid">
			<div class="span8">
				<div style="width:100%; margin-bottom: 20px;" >
				  <iframe style="width: 100%;" src="http://www.eventbrite.com/tickets-external?eid=10696462407&ref=etckt&v=2" frameborder="0" height="490" width="100%" vspace="0" hspace="0" marginheight="5" marginwidth="5" scrolling="auto" allowtransparency="true"></iframe>
				</div>
				<div class="content-block">
					<h4>You can also purchase tickets at these locations</h4>
					<div class="row-fluid">
						<div class="span6">
							<ul>
								<li>
									New Moon Natural Foods<br />
									11357 Donner Pass Rd<br />
									Truckee, CA 96161<br />
									(530) 587-7426
								</li>
								<li>
									Melting Pot World Emporium<br />
									1049 S Virginia St<br />
									Reno, NV 89502<br />
									(775) 322-9445
								</li>
								<li>
									Briar Patch Co-op<br />
									290 Sierra College Dr, Ste A <br />
									Grass Valley, CA 95945 <br />
									(530) 272-5333
								</li>
							</ul>
						</div>
						<div class="span6">
							<ul>
								<li>
									Streetlight Records <br />
									939 Pacific Ave<br />
									Santa Cruz, CA 95060 <br />
									(831) 421-9200 <br />
								</li>
								<li>
									Ceiba Records<br />
									1364 Haight St<br />
									San Francisco, CA 94117<br />
									(415) 437-9598
								</li>
								<!-- <li>
									South Shore Mad About Music<br />
									3447 Lake Tahoe Blvd. #2<br />
									South Lake Tahoe, CA 96150<br />
									(530) 544-5700
								</li> -->
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="span4">
				<iframe class="" src="http://www.eventbrite.com/countdown-widget?eid=10696462407" frameborder="0" height="592" width="195" marginheight="0" marginwidth="0" scrolling="no" allowtransparency="true"></iframe>
			</div>
		</div>
	</div>
	<? include '_footer.php'; ?>
</body>
</html>