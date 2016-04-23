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
			$title = "artists";
		?>
		<? include 'header.php'; ?>
		<div id="art" class="row-fluid">
			<div id="workshops" class="span12">
				<section class="media headliner">
					<div class="image-container pull-left">
						<img src="/images/artists/audiopixel.jpg" width="300px" />
					</div>
				  <div class="media-body">
				    <h4 class="media-heading">
							AudioPixel <small>Lighting Artist</small>
						</h4>
						<ul class="links">
							<li>
							<li><a href="http://audiopixel.com/" target="_blank"><i class="icon-globe"></i></a></li>
						</ul>
						<p>
							<?= nl2br(htmlentities("AudioPixel develops custom lighting technology and sound-reactive visual programming.

							Initially started as a software project in 2008, AudioPixel has grown into a specialized production team, designing immersive projects around the world. We are a group of creative professionals, experienced from various fields related to lighting, software development, and interactive media.

							AudioPixel's software techniques are the solution for the problems that traditional lighting gave up on. New methods of control and audio-reactivity create audiovisual experiences that are revolutionary compared to the limitations of standard lighting programs and consoles.")); ?>
						</p>
				  </div>
				</section>
				<section class="media headliner">
					<div class="image-container pull-left">
						<img src="/images/artists/idea.png" width="300px" />
					</div>
				  <div class="media-body">
				    <h4 class="media-heading">
							Erin Banwell, Dave Seied, Idea Fabrication Labs <br />
							<small style="margin-left: 0;">Installations and Stage Design</small>
						</h4>
						<ul class="links">
							<li><a href="https://www.facebook.com/ideafablabs?fref=nf" target="_blank"><i class="icon-facebook"></i></a></li>
							<li><a href="http://ideafablabs.com/" target="_blank"><i class="icon-globe"></i></a></li>
						</ul>
						<p>
							<?= nl2br(htmlentities("The Idea Fabrication Laboratory is a Digital Fabrication Facility located in Chico, CA. The Idea Fab Labs facility is a 6,900 sq. ft. building, four blocks from CSU, Chico with a loading dock, multiple workspace, access to standard and high-tech tools, a large gallery, indoor and outdoor areas for group activities, and an active community of makers, designers, artists, programmers and more.")); ?>
						</p>
				  </div>
				</section>
				<section class="media headliner">
					<div class="image-container pull-left">
						<img src="/images/artists/SubliminalTwin.png" width="300px" />
					</div>
				  <div class="media-body">
				    <h4 class="media-heading">
							Subliminal Twin <small>Visuals</small>
						</h4>
						<p>
							<?= nl2br(htmlentities("Subliminal Twin is a live visual projection artist seeking to unveil and explore the intricate nuances hidden in the subconscious thresholds of the imagination. Through real-time manipulation of visionary art remixes and a potent psychedelic blend of sampled and original video content, she animates a dynamic alchemical synthesis of immersive illuminations. ")); ?>
						</p>
						<h5>
							Hana Fiona
						</h5>
						<ul class="links">
							<li><a href="https://www.facebook.com/VJ.Subliminal.Twin" target="_blank"><i class="icon-facebook"></i></a></li>
							<li><a href="http://www.subliminaltwin.com" target="_blank"><i class="icon-globe"></i></a></li>
						</ul>
						<p>
							<?= nl2br(htmlentities("Subliminal Twin is the ever-evolving artistic identity of Hana Fiona, psychedelic visualist and live projection artist from the Bay Area.")); ?>
						</p>
				  </div>
				</section>
				<section class="media headliner">
					<div class="image-container pull-left">
						<img src="/images/artists/electromagi.jpg" width="300px" />
					</div>
				  <div class="media-body">
				    <h4 class="media-heading">
							Electromagi <small>Visuals</small>
						</h4>

						<p>
							<?= nl2br(htmlentities("Electromagi is a studio providing interactive installations, stage/club design, projection mapping, motion capture enabled performance projections.
							")); ?>
						</p>
						<h5>
							VJ Musashi
						</h5>
						<ul class="links">
							<li><a href="https://www.facebook.com/em.visuals" target="_blank"><i class="icon-facebook"></i></a></li>
						</ul>
						<p>
							<?= nl2br(htmlentities("Vj Musashii is a Video Artist/Code Samurai who specializes in projection mapping, generative coding, realtime audioreactive visuals, and motion capture.")); ?>
						</p>
				  </div>
				</section>
				<section class="media headliner">
					<div class="image-container pull-left">
						<img src="/images/artists/dgraph.tritex.jpg" width="300px" />
					</div>
				  <div class="media-body">
				    <h4 class="media-heading">
							:|dgr&#916;ph|: <small>Visuals</small>
						</h4>
						<p>
							<?= nl2br(htmlentities(":|dgraph|: is a Digital Media Artist whose focus as a VJ is to create complexity from simple geomtries, movement and color.  Syncing, articulating and performing in conjunction with the audio to create a heighten immersive experience for the audience.")); ?>
						</p>
						<h5>
							Dustin Raphael
						</h5>
						<ul class="links">
							<li><a href="hhttps://www.facebook.com/dgraphael" target="_blank"><i class="icon-facebook"></i></a></li>
						</ul>
						<p>
							<?= nl2br(htmlentities("He has a MFA in Digital Art and New Media. He has VJ'd at many west coast festivals and sf clubs alongside  Tipper, E40, Seth Troxler, Jaime Jones, Art Department and many many others. As well as showing interactive artworks as GAFFTA (SF), Maker Faire, Zero One and the SC Museum of art and history.")); ?>
						</p>
				  </div>
				</section>
				<section id="visual-artists" class="content-block" style="margin-top: 20px;">
					<h2>Visual Artists/Live Painting</h2>
					<ul>
						<li>
							<h4>
							<a href="http://dreamstreamart.com/" target="_blank">
								Jessica Perlstien
							</a>
							</h4>
						</li>
						<li>
							<h4><a href="https://www.facebook.com/DarrenMinkeArt/photos_albums" target="_blank">
								Darren Minke
							</a></h4>
							<!-- <a href="https://www.facebook.com/VisionaryArtBooks" target="_blank">https://www.facebook.com/VisionaryArtBooks</a> -->
						</li>
						<li>
							<h4><a href="http://www.icaruszaure.com/" target="_blank">
								Icarus Zaure
							</a></h4>
						</li>
						<li>
							<h4><a href="http://sparkuhl.tumblr.com/about" target="_blank">
								Adriana Sparkuhl
							</a></h4>
						</li>
						<li>
							<h4><a href="https://www.facebook.com/mark.yett" target="_blank">Mark Yeti</a></h4>
						</li>
						<li>
							<h4>Shelby Kirsh</h4>
						</li>
						<li>
							<h4><a href="http://www.paintedladder.com/" target="_blank">Elijah Pfotenhauer</a></h4>
						</li>
					</ul>
				</section>
			</div>
		</div>
	</div>
	<? include '_footer.php'; ?>
</body>
</html>