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
			$title = "MUSIC";
		?>
		<? include 'header.php'; ?>
		<div id="content">
			<div class="row-fluid">
				<div class="span12">
					<div class="media headliner">
					  <div class="image-container pull-left">
					    <img src="/images/music/shpongle.jpg" width="200px"/>
						</div>
					  <div class="media-body">
					    <h3 class="media-heading">
								<img src="../images/Shpongle-Text.png" width="400px"> <small>(Simon Posford DJ Set)</small>
							</h3>
							<p>
									<?= nl2br(htmlentities("Shpongle is a psychedelic downtempo or Psybient music project. The members are Simon Posford (aka Hallucinogen) and Raja Ram (one third of The Infinity Project). Simon takes care of the production, instrumentation and programming, while Raja Ram is the flautist and Cunning Linguist. They DJ separately and together, Simon having just completed 52 shows in the USA touring with a visual extravaganza known as 'The Shpongletron'."));?>
							</p>
							<iframe width="100%" height="280" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/playlists/8351625&amp;auto_play=false&amp;hide_related=true&amp;visual=false&amp;show_user=false"></iframe>
							<ul class="links pull-right">
								<li><a href="https://www.facebook.com/shpongle" target="_blank"><i class="icon-facebook"></i></a></li>
								<li><a href="http://shponglemusic.com/" target="_blank"><i class="icon-globe"></i></a></li>
								<li><a href="https://soundcloud.com/shponglemusic" target="_blank"><i class="icon-cloud"></i></a></li>
							</ul>
					  </div>
					</div>
					<div class="media headliner">
						<div class="image-container pull-left">
							<img src="/images/music/Blue-Tech.jpg" width="200px"/>
						</div>
					  <div class="media-body">
					    <h4 class="media-heading">
								BLUETECH

							</h4>
							<p>
								<?= nl2br(htmlentities("Bluetech's upcoming album 'Illuminated Gates' is about liminal spaces, the spaces in-between known & unknown. Music never stops. There is ALWAYS some loop repeating in his head, something heard or something new that's wanting to find a way out and be planted like a seed & grow into a song tree

								Crawling behind his living room soundsystem listening to classical music with cloud on when he was 4, was when he first fell in love with music. He left his body and traveled through the landscapes of sound. It all began with a piano.")) ?>
							</p>
							<iframe width="100%" height="350" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/playlists/8266757&amp;color=ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_artwork=true"></iframe>
							<ul class="links pull-right">
								<li><a href="https://www.facebook.com/iambluetech" target="_blank"><i class="icon-facebook"></i></a></li>
								<li><a href="http://www.bluetechonline.com/" target="_blank"><i class="icon-globe"></i></a></li>
								<li><a href="https://soundcloud.com/bluetech" target="_blank"><i class="icon-cloud"></i></a></li>
							</ul>
					  </div>
					</div>
					<div class="media headliner">
						<div class="image-container pull-left">
							<img src="/images/music/eprom.jpg" width="200px" />
						</div>
					  <div class="media-body">
					    <h4 class="media-heading">
								EPROM

							</h4>
							<p>
								<?= nl2br(htmlentities("With barely one year since the release of his debut, West coast producer and sound system murderer Eprom is back on Rwina for a second album, Halflife. Such a quick return to the long player format could be seen as an affirmation of the old ‘you have your whole life to write a debut album...’ maxim, though in an age of sound bite music and easily digestible digital releases it’s more testament to Eprom’s creative drive and need to create a sonic space that only he can inhabit.")); ?>
							</p>
							<iframe width="100%" height="166" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/115672970&amp;color=ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_artwork=true"></iframe>
							<ul class="links pull-right">
								<li><a href="https://www.facebook.com/eprombeats" target="_blank"><i class="icon-facebook"></i></a></li>
								<li><a href="http://www.eprommusic.com/" target="_blank"><i class="icon-globe"></i></a></li>
								<li><a href="https://soundcloud.com/eprom" target="_blank"><i class="icon-cloud"></i></a></li>
							</ul>
					  </div>
					</div>
					<div class="media headliner">
						<div class="image-container pull-left">
							<img src="/images/music/russ-liquid.jpeg" width="200px" height="200px"/>
						</div>
					  <div class="media-body">
					    <h4 class="media-heading">
								Russ Liquid
							</h4>
							<p>
								<?= nl2br(htmlentities("Russ Liquid is the future-vintage groove-blasting maestro who has stirred the souls and minds of the electronic music world. Renowned for his ingenious compositional approach, this cosmic virtuoso and imprints a prophetic musical experience on his audiences. He detonates explosive beatscapes, seamlessly adding flourishes of instrumental color and emotion; while drawing from an endlessly diverse sonic palette.")) ?>
							</p>
							<iframe width="100%" height="450" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/playlists/19271886&amp;color=ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_artwork=true"></iframe>
							<ul class="links pull-right">
								<li><a href="https://www.facebook.com/russliquid" target="_blank"><i class="icon-facebook"></i></a></li>
								<li><a href="http://russliquid.com/" target="_blank"><i class="icon-globe"></i></a></li>
								<li><a href="https://soundcloud.com/russliquid" target="_blank"><i class="icon-cloud"></i></a></li>
							</ul>
					  </div>
					</div>
					<div class="media headliner">
						<div class="image-container pull-left">
							<img src="/images/music/MartyParty.jpg" width="200px" />
						</div>
					  <div class="media-body">
					    <h4 class="media-heading">
								Marty Party
							</h4>
							<p>
								<?= nl2br(htmlentities("Martin Folb aka MartyParty is an electronic music producer and performer. (EDM, HipHop) Born and raised in South Africa and currently residing in Miami, his music runs the gambit from sexy hip hop to intense dance to dirty club and festival music. Whatever the genre the music is always emotional and often experimental in nature. MartyParty has released 6 original albums and toured for 7 years playing his original sets - he is also half of the super group PANTyRAiD together with his friend Ooah of The Glitch Mob. MartyParty started producing his own flavor of music in 2005 with the mission to change the monotony of electronic music by creating an entirely different electronic sound: more musical, more story telling, and more diversity in the beats. The result is a growing anthology of MartyParty music crossing over most popular genres into a rich sound he calls PURPLE MUSIC.")); ?>
							</p>
							<iframe width="100%" height="166" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/151548867&amp;color=ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_artwork=true"></iframe>
							<ul class="links pull-right">
								<li><a href="https://www.facebook.com/martyparty" target="_blank"><i class="icon-facebook"></i></a></li>
								<li><a href="http://martyparty.com" target="_blank"><i class="icon-globe"></i></a></li>
								<li><a href="https://soundcloud.com/martypartymusic" target="_blank"><i class="icon-cloud"></i></a></li>
							</ul>
					  </div>
					</div>
					<div class="media headliner">
						<div class="image-container pull-left">
							<img src="/images/music/kalya-scintilla.jpg" width="200px" />
						</div>
					  <div class="media-body">
					    <h4 class="media-heading">
								Kalya Scintilla
							</h4>
							<p>
								<?= nl2br(htmlentities("Traversing the cosmos, gliding across dimensions beyond time and space, Kalya Scintilla brings universal shamanic journeys through his music to planet earth straight from his heart. His music paints sacred soundscapes with world fusion beats from ancient futures hidden amongst our forgotten memories to bring forth lush healing vibrations to activate the dormant codes within us. Infusing his love for nature, tribal healing, sacred geometry, and Hathor wisdom; Kalya is able to birth heart opening crescendos that open doorways into our personal and collective awakening. Audiences across the world have successfully received his musical transmissions enabling his ability to travel and play at festivals across continents. His vision for the future holds his devotional intention to plant more seeds of galactic sound alchemy to be felt and experienced by all.")); ?>
							</p>
							<iframe width="100%" height="350" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/playlists/5932930&amp;color=ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_artwork=true"></iframe>
							<ul class="links pull-right">
								<li><a href="https://www.facebook.com/kalyascintilla" target="_blank"><i class="icon-facebook"></i></a></li>
								<li><a href="http://kalyascintilla.bandcamp.com/" target="_blank"><i class="icon-globe"></i></a></li>
								<li><a href="http://soundcloud.com/kalyascintilla" target="_blank"><i class="icon-cloud"></i></a></li>
							</ul>
					  </div>
					</div>
					<div class="media headliner">
						<div class="image-container pull-left">
							<img src="/images/music/JPhlip.gif" width="200px" />
						</div>
					  <div class="media-body">
					    <h4 class="media-heading">
								J.Phlip
							</h4>
							<p>
								<?= nl2br(htmlentities("Jessica's skills on the decks and in the studio have secured her highly desirable spot as an official member of the Dirtybird crew, after signing her first record to them in 2008. She is currently Claude VonStroke's favorite support DJ and has already played at amazing high profile gigs like Fabric, Space Ibiza, Back to Basics, and Watergate. She was also chosen for URB Magazine's Next 100 of 2009 and is currently residing in Berlin (but is often back and forth between there and her previous home of San Francisco). Look out for her upcoming productions on dirtybird, Pets, and Krush Groove. She WILL be making asses shake on the dancefloor and she's just as excited about it as the day she got her belt drives!")); ?>
							</p>
							<ul class="links pull-right">
								<li><a href="https://www.facebook.com/jphlip" target="_blank"><i class="icon-facebook"></i></a></li>
								<li><a href="http://www.residentadvisor.net/dj/j.phlip" target="_blank"><i class="icon-globe"></i></a></li>
								<li><a href="http://soundcloud.com/jphlip" target="_blank"><i class="icon-cloud"></i></a></li>
							</ul>
					  </div>
					</div>
					<div class="media headliner">
						<div class="image-container pull-left">
							<img src="/images/music/Andreilien.jpg" width="200px" />
						</div>
					  <div class="media-body">
					    <h4 class="media-heading">
								Andreilien
							</h4>
							<p>
								<?= nl2br(htmlentities("Far far away in deep auditory space, Heyoka has been abducted, cosmically mind probed, upgraded and reconfigured in an extra terestrial lab on a planet known as Marklar. Fortunately he has returned almost entirely unharmed, and now shall be known as the artist currently know as Andreilien….

	Andrei Olenev first emerged as HEYOKA on the San Francisco underground glitch/bass scene in 2006. By 2009 he was touring extensively and quickly became a staple sound in the rapidly growing bass music scene of North America. With a constantly evolving, original style, he stood out amongst bass music producers as one who keeps the vibe going strong while venturing to explore new realms of sonic experience. Playing always live sets of his own original tracks, his music has been described as a journey through fractal soundscapes and alternate realms while riding the waves of fat glitch beats and earth rumbling sub bass.")); ?>
							</p>
							<!-- <iframe width="100%" height="166" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/116605956&amp;color=ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_artwork=true"></iframe> -->
							<ul class="links pull-right">
								<li><a href="https://www.facebook.com/andrei.heyoka" target="_blank"><i class="icon-facebook"></i></a></li>
								<li><a href="http://andreilien.com/" target="_blank"><i class="icon-globe"></i></a></li>
								<li><a href="https://soundcloud.com/andreilien" target="_blank"><i class="icon-cloud"></i></a></li>
							</ul>
					  </div>
					</div>
					<div class="media headliner">
						<div class="image-container pull-left">
							<img src="/images/music/gladkill.jpg" width="200px" />
						</div>
					  <div class="media-body">
					    <h4 class="media-heading">
								Gladkill
							</h4>
							<p>
								<?= nl2br(htmlentities("Refusing to stick to the comfort of making one style of music, Boris Gladkill has rewarded audiences through the sheer diversity of his songs, as he deftly moves between dominating dance floors with his sexy, crunked-out club bangers, as well as captivating home stereo speakers with more downtempo and melodic material.
	With a heavier emphasis on songwriting and song structure, Gladkill is aiming to make music that will stand the test of time. When you listen to Gladkill’s songs or see him perform, you’ll discover an artist set apart between the sheets of cool bass lines and ethereal melodies. In an era where disposable dance music is big business, Gladkill makes anything but.")); ?>
							</p>
							<!-- <iframe width="100%" height="166" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/150605591&amp;color=ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_artwork=true"></iframe> -->
							<ul class="links pull-right">
								<li><a href="https://www.facebook.com/gladkill" target="_blank"><i class="icon-facebook"></i></a></li>
								<li><a href="https://www.gladkill.com" target="_blank"><i class="icon-globe"></i></a></li>
								<li><a href="https://soundcloud.com/gladkill" target="_blank"><i class="icon-cloud"></i></a></li>
							</ul>
					  </div>
					</div>
					<div class="media headliner">
						<div class="image-container pull-left">
							<img src="/images/music/vibesquad.jpg" width="200px" />
						</div>
					  <div class="media-body">
					    <h4 class="media-heading">
								Vibesquad
							</h4>
							<p>
								<?= nl2br(htmlentities("From coast to coast and beyond, the electronic music spectrum has shifted radically to the low end, generating ribcage-rattling blasts from the underground on up. Tucked away in the heart of the Rocky Mountains, the Boulder-Denver-Ft.Collins triangle is the epicenter of this low-frequency onslaught, producing some of the biggest names in the game. At the top of the heap is Aaron Holstein, a.k.a. VibeSquaD, a musical juggernaut and fearless vanguard in a flourishing scene. Circling the globe with his wholly original brand of bass exploration, VibeSquaD is reaching wider and wider audiences with his studio tracks and out-of-control live shows.")); ?>
							</p>
							<ul class="links pull-right">
								<li><a href="https://www.facebook.com/therealVIBESQUAD" target="_blank"><i class="icon-facebook"></i></a></li>
								<li><a href="http://www.vibesquad.com/" target="_blank"><i class="icon-globe"></i></a></li>
								<li><a href="https://soundcloud.com/vibesquad" target="_blank"><i class="icon-cloudcloud"></i></a></li>
							</ul>
					  </div>
					</div>
					<div class="media headliner">
						<div class="image-container pull-left">
							<img src="/images/music/freQNasty.png" width="200px" />
						</div>
					  <div class="media-body">
					    <h4 class="media-heading">
								FreQ Nasty
							</h4>
							<p>
								<?= nl2br(htmlentities("Born in Fiji, raised in New Zealand and forged in the dance music revolution of London in late 90's London, FreQ Nasty started his career in 1998 on the seminal UK label Botchit & Scarper where he helped pioneer the global ‘Nu School Breaks’ movement. After becoming one of a select few artists to appear on the front cover of UK dj bible ‘DJ Magazine’ he moved to the legendary SKINT Records in 2003 he went on to release a slew of cutting-edge records, collaborating with and remixing a diverse range of artists including Fatboy Slim, Kelis, KRS One, Roots Manuva, Rodney P, Bassnectar, and Reggae legend Junior Delgado. In ‘04 and ‘05 FreQ toured the world with his ‘Video Nasty Experience’, an eye-melting DJ/VJ/ live MC fusion, with animation perpetrated by a hit squad of crack artists including the ‘Brother’s Mogg’ (Lord of the Rings animators), and ‘Gorrillaz’ artist Jamie Hewlett’s company Zombie Flesh Eaters.")); ?>
							</p>
							<!-- <iframe width="100%" height="166" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/129083792&amp;color=ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_artwork=true"></iframe> -->
							<ul class="links pull-right">
								<li><a href="https://www.facebook.com/DjFreQNasty" target="_blank"><i class="icon-facebook"></i></a></li>
								<li><a href="http://freqnasty.com/" target="_blank"><i class="icon-globe"></i></a></li>
								<li><a href="https://soundcloud.com/freqnasty" target="_blank"><i class="icon-cloud"></i></a></li>
							</ul>
					  </div>
					</div>

					<div class="media headliner">
						<div class="image-container pull-left">
							<img src="/images/music/illesha.jpg" width="200px" />
						</div>
					  <div class="media-body">
					    <h4 class="media-heading">
								Ill-Esha
							</h4>
							<p>
								<?= nl2br(htmlentities("the delicate honey drip of soul through the ones and zeroes, tension and release, a caged bird set free soaring above the shifting tectonic plates of rhythm and bass.

								For over a decade, ill-esha has been an integral part of the North American electronic scene. Beginning as a vocalist, she soon added MCing and DJing to her repertoire, creating a dynamic and unique live show which has headlined alongside artists such as Andy C, Klute, Dieselboy, Vibesquad, LTJ Bukem, Tipper, T-Power & De La Soul. She has performed across North America, Europe and Asia; in clubs, at festivals, and even on TV shows on MTV Canada and the CBC.")); ?>
							</p>
							<!-- <iframe width="100%" height="166" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/124650757&amp;color=ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_artwork=true"></iframe> -->
							<ul class="links pull-right">
								<li><a href="https://www.facebook.com/ill.esha.music" target="_blank"><i class="icon-facebook"></i></a></li>
								<li><a href="http://ill-esha.com/" target="_blank"><i class="icon-globe"></i></a></li>
								<li><a href="http://soundcloud.com/ill-esha" target="_blank"><i class="icon-cloud"></i></a></li>
							</ul>
					  </div>
					</div>
					<div class="media headliner">
						<div class="image-container pull-left">
							<img src="/images/music/antennae.jpg" width="200px" />
						</div>
					  <div class="media-body">
					    <h4 class="media-heading">
								An-ten-nae

							</h4>
							<p>
								<?= nl2br(htmlentities("An*Ten*Nae is one of San Francisco’s most sought after electronic live performers. He has taken the art of live remixing to new heights with his own customized setup, that bends genres in ways seldom heard. His sound is called Acid Crunk, and there are no rules, no restraints, just dance music at the bleeding edge.

	An*Ten*Nae is a low frequency emitter transmitting and remixing music on the fly, giving him the ability to transcend above the constraints of music rigidity and transmit bass heavy, crunked out beats of the highest order. HisGenre bending, “Acid Crunk compilations” have set the standard and has defined an era with over 1,000,000 downloads to date.  Acid Crunk Vol. 2 maintained the # 1 seller in Dubstep, Electronica and Chillout genres simultaneously while also having all 14 tracks in their respective genre top 10. His recent debut Album Raindrops on Roses has set a new bar for An-Ten-Nae giving him a top 10 Album in the electronica section on Itunes, and numerous top 10s on various sites acrooss the globe.")); ?>
							</p>
							<ul class="links pull-right">
								<li><a href="https://www.facebook.com/antennaepresents" target="_blank"><i class="icon-facebook"></i></a></li>
								<li><a href="http://www.antennaemusic.com/‎" target="_blank"><i class="icon-globe"></i></a></li>
								<li><a href="https://soundcloud.com/an-ten-nae" target="_blank"><i class="icon-cloud"></i></a></li>
							</ul>
					  </div>
					</div>
					<div class="media headliner">
						<div class="image-container pull-left">
							<img src="/images/music/dimond_saints_live.jpg" width="200px" />
						</div>
					  <div class="media-body">
					    <h4 class="media-heading">
								Dimond Saints

							</h4>
							<p>
								<?= nl2br(htmlentities("Deep in the heart of the Dimond District in the land of oaks, out of the ashes and the bleakness comes a new sound tearing and bursting the bubble of mediocrity. The music of drips of passion, deep pulsing beats that make you sweat. We are the Dimond Saints.")); ?>
							</p>
							<!-- <iframe width="100%" height="410" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/playlists/22963390&amp;color=ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_artwork=true"></iframe> -->
							<ul class="links pull-right">
								<li><a href="https://www.facebook.com/dimondsaints" target="_blank"><i class="icon-facebook"></i></a></li>
								<li><a href="http://www.dimondsaints.com/" target="_blank"><i class="icon-globe"></i></a></li>
								<li><a href="https://soundcloud.com/dimondsaints" target="_blank"><i class="icon-cloud"></i></a></li>
							</ul>
					  </div>
					</div>
					<div class="media headliner">
						<div class="image-container pull-left">
							<img src="/images/music/fortknox5.jpg" width="200px" />
						</div>
					  <div class="media-body">
					    <h4 class="media-heading">
								Fort Knox 5

							</h4>
							<p>
								<?= nl2br(htmlentities("The FORT KNOX FIVE have spent the last decade as a leading force in the international funk and breaks scene. Having released an arsenal of floor rocking original music and remixes, the FORT KNOX FIVE has the midas touch for producing heavy hitting records.

	The FORT KNOX FIVE consists of Steve Raskin, Rob Myers, Jon Horvath, and Sid Barcelona. They established Fort Knox Recordings in 2003 to release party-rocking music that crosses tempos and defies genres. Their world renowned ‘Fort Knox Sound’ has overtaken dance-floors with its distinct interweaving of live instrumentation with funky electronic breakbeats. ")); ?>
							</p>
							<ul class="links pull-right">
								<li><a href="https://www.facebook.com/FortKnoxFive" target="_blank"><i class="icon-facebook"></i></a></li>
								<li><a href="http://www.fortknoxfive.com/" target="_blank"><i class="icon-globe"></i></a></li>
								<li><a href="http://soundcloud.com/fortknoxfive" target="_blank"><i class="icon-cloud"></i></a></li>
							</ul>
					  </div>
					</div>
					<div class="media headliner">
						<div class="image-container pull-left">
							<img src="/images/music/pumpkin.jpg" width="200px" />
						</div>
					  <div class="media-body">
					    <h4 class="media-heading">
								Pumpkin

							</h4>
							<p>
								<?= nl2br(htmlentities("Nicholas “Pumpkin” Alvarado is your new favorite music producer/DJ. His spot-on song selections, special remixes and original productions have made for unforgettable live sets that seamlessly span every genre and eschew the latest trends in favor of timeless melodies that will leave a ginormous smile plastered across your face.

	Whether starting the party or closing it down, Pumpkin’s inspired mixes are always lovingly sequenced and aim to set the perfect mood. He’s played alongside fellow acclaimed house music mainstays like Lee Burridge, Justin Martin, Nick Warren and KCRW’s Jeremy Sole as well as progressive electronic music pioneers like Bluetech, Blockhead, EOTO and The Glitch Mob. Pumpkin has become an in-demand, fan-favorite at major music festivals like Coachella, Lightning in a Bottle and Sea of Dreams, where he closed the event after his musical hero, Trentemoller. Pumpkin’s acclaimed debut EP, “Love Letters,” featured collaborations with singer Katie Mowgli of the breakout band, The Mowglis and lyricist, EVeryman along with his sought after remixes from the likes of Florence + The Machine and Lila Rose.")); ?>
							</p>
							<!-- <iframe width="100%" height="450" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/playlists/2656175&amp;color=ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_artwork=true"></iframe> -->
							<ul class="links pull-right">
								<li><a href="https://www.facebook.com/PumpkinSounds" target="_blank"><i class="icon-facebook"></i></a></li>
								<li><a href="http://www.pumpkinsounds.com" target="_blank"><i class="icon-globe"></i></a></li>
								<li><a href="http://www.instagram.com/pumpkinsounds" target="_blank"><i class="icon-instagram"></i></a></li>
								<li><a href="https://soundcloud.com/pumpkin" target="_blank"><i class="icon-cloud"></i></a></li>
							</ul>
					  </div>
					</div>
					<div class="media headliner">
						<div class="image-container pull-left">
							<img src="/images/music/liberationmovement.jpg" width="200px" />
						</div>
					  <div class="media-body">
					    <h4 class="media-heading">
								Liberation Movement

							</h4>
							<p>
								<?= nl2br(htmlentities("Led by Resurrector of Heavyweight Dub Champion (HDC), Sasha Rose, Noah King and supported by members of the Shipibo Tribe, Liberation Movement (LM) is a new collaborative music project that pushes the boundaries of human experience. Each LM performance is a communal ritual that opens portals to the realm of spirits and invokes new levels of consciousness and healing.

	Infused with recordings of 20 Shipibo Shamans made by Resurrector over the course of 30 traditional ceremonies in the Peruvian Amazon, Liberation Movement channels the healing power of the plant spirits’ Ikaros (medicine songs) with the intention of removing the veils that separate us from the vibratory pulse of the Earth.")); ?>
							</p>
							<ul class="links pull-right">
								<li><a href="https://www.facebook.com/liberationmovement333" target="_blank"><i class="icon-facebook"></i></a></li>
								<li><a href="http://www.liberation-movement.com" target="_blank"><i class="icon-globe"></i></a></li>
								<li><a href="https://soundcloud.com/liberation-movement" target="_blank"><i class="icon-cloud"></i></a></li>
							</ul>
					  </div>
					</div>
					<div class="media headliner">
						<div class="image-container pull-left">
							<img src="/images/music/filastine.jpg" width="200px" />
						</div>
					  <div class="media-body">
					    <h4 class="media-heading">
								Filastine

							</h4>
							<p>
								<?= nl2br(htmlentities("Grey Filastine is an audio-visual artist born in Los Angeles, based in Barcelona, but most often nomadic.

He composes a dense transnational bass music that collides the low frequenciy pressure of dubstep with high-level beat science, acoustic strings and voices. His work is described as “the prototype of globalized urban sound” -Prefix Mag, and “awesome and delicate...hybrids so fluent they defy classification” -Pitchfork")); ?>
							</p>
							<ul class="links pull-right">
								<li><a href="https://www.facebook.com/pages/Filastine/168810016505071" target="_blank"><i class="icon-facebook"></i></a></li>
								<li><a href="http://filastine.com/" target="_blank"><i class="icon-globe"></i></a></li>
								<li><a href="https://soundcloud.com/filastine" target="_blank"><i class="icon-cloud"></i></a></li>
							</ul>
					  </div>
					</div>
					<div class="media headliner">
						<div class="image-container pull-left">
							<img src="/images/music/gjones.jpg" width="200px" />
						</div>
					  <div class="media-body">
					    <h4 class="media-heading">
								G Jones

							</h4>
							<p>
								<?= nl2br(htmlentities("Weaving bubbling beats and spay beats and melodies seamlessly into layers of ass-shaking low end, Santa Cruz producer Greg Jones aka G Jones is rapidly rising through the ranks of the electronic music world. G Jones has taken audiences from all over the west coast on a ride with him through his fresh, genre-bending take on bass music.

Drawing heavy influence from hip hop and West Coast Bass music, the budding young producer recently released his debut EP “Mirage” on Germany’s Saturatel Records, gaining widespread support from the electronic music community and leaving listeners craving more. The future is bright for G Jones, with several new releases planned, and plenty of new dancefloors and festivals to crush in 2014")); ?>
							</p>
							<!-- <iframe width="100%" height="166" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/138898965&amp;color=ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_artwork=true"></iframe> -->
							<ul class="links pull-right">
								<li><a href="https://www.facebook.com/gjonesbass" target="_blank"><i class="icon-facebook"></i></a></li>
								<li><a href="www.last.fm/music/g+jones" target="_blank"><i class="icon-globe"></i></a></li>
								<li><a href="http://soundcloud.com/gjonesbass" target="_blank"><i class="icon-cloud"></i></a></li>
							</ul>
					  </div>
					</div>
					<div class="media headliner">
						<div class="image-container pull-left">
							<img src="/images/music/jpod-the-beat-chef-featured.jpg" width="200px" />
						</div>
					  <div class="media-body">
					    <h4 class="media-heading">
								J Pod the beat chef
							</h4>
							<p>
								<?= nl2br(htmlentities("JPOD is known for a unique blend of bouncy beats with full flavor. All at once he manages to pay respect to vintage sounds of the past while forging into unexplored soundscapes of the future. In the studio he crafts bootlegs, remix albums and original material which he brings to the stage to consistently push the limits of smiles per minute. Have a listen and let the music speak for itself.")); ?>
							</p>
							<ul class="links pull-right">
								<li><a href="https://www.facebook.com/jpodtbc" target="_blank"><i class="icon-facebook"></i></a></li>
								<li><a href="http://jpodtbc.com/" target="_blank"><i class="icon-globe"></i></a></li>
								<li><a href="https://soundcloud.com/jpodtbc" target="_blank"><i class="icon-cloud"></i></a></li>
							</ul>
					  </div>
					</div>
					<div class="media headliner">
						<div class="image-container pull-left">
							<img src="/images/music/christian-martin.jpg" width="200px" />
						</div>
					  <div class="media-body">
					    <h4 class="media-heading">
								Christian Martin
							</h4>
							<p>
								<?= nl2br(htmlentities("Christian Martin's love affair with electronic music began in 1995, as an early attendee at Southern California's legendary Moontribe full moon desert parties. After absorbing late 90's club life in New York, London, and Los Angeles, Christian settled in San Francisco in the spring of 2000. He started playing records in 2002 under the tutelage of his brother, Justin Martin, armed with a stack of Justin's old vinyl and used Technics 1200's from Sammy D.
In 2003, inspired by the massive desert soundsystems of old, Christian founded the dirtybird soundsystem. Along with co-founders Justin Martin..")); ?>
							</p>
							<!-- <iframe width="100%" height="166" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/142618323&amp;color=ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_artwork=true"></iframe> -->
							<ul class="links pull-right">
								<li><a href="https://www.facebook.com/christianmartin47" target="_blank"><i class="icon-facebook"></i></a></li>
								<li><a href="http://www.residentadvisor.net/dj/christianmartin" target="_blank"><i class="icon-globe"></i></a></li>
								<li><a href="https://soundcloud.com/christianmartin" target="_blank"><i class="icon-cloud"></i></a></li>
							</ul>
					  </div>
					</div>
					<div class="media headliner">
						<div class="image-container pull-left">
							<img src="/images/music/worthy.jpg" width="200px" />
						</div>
					  <div class="media-body">
					    <h4 class="media-heading">
								Worthy
							</h4>
							<p>
								<?= nl2br(htmlentities("When it comes down to all the press and hype, his name says it all. He is Worthy. With an in-depth knowledge of production, mixing, and performance, Worthy has the insight to play for his audience, cultivating intense positive energy on the dance floor that can only be portrayed as superhuman. His sound can be described as organic breakbeats with a mix of future house, 80’s, booty bass, and techno. As Carl Cox said, “The Worthy sound has always been powerful, rocking, funky, bass-driven music at its best, and for me this is the new wave in house music.” Worthy has received the recognition of major producers who have played his tracks including Sven Vath, Diplo, and Richie Hawtin, among many.")); ?>
							</p>
							<ul class="links pull-right">
								<li><a href="https://www.facebook.com/WorthySF" target="_blank"><i class="icon-facebook"></i></a></li>
								<li><a href="http://www.dirtybirdrecords.com/worthy-irs-te-2/" target="_blank"><i class="icon-globe"></i></a></li>
								<li><a href="https://soundcloud.com/worthy" target="_blank"><i class="icon-cloud"></i></a></li>
							</ul>
					  </div>
					</div>
					<div class="media headliner">
						<div class="image-container pull-left">
							<img src="/images/music/mrrogers.jpg" width="200px" />
						</div>
					  <div class="media-body">
					    <h4 class="media-heading">
								Mr. Rogers
							</h4>
							<p>
								<?= nl2br(htmlentities("Mr. Rogers' sounds have long captivated the West Coast underground arts community, but now the secret is out and this pioneering producer is poised to conquer the far reaches of the dance floor with his twisted, psychedelic take on bass-heavy midtempo, and glitch-ridden breaks.

Mr. Rogers first emerged in the San Francisco underground in 2006, and caught the attention of many with his sets of 100% originally produced material. His completely unique syle has bounced crowds at numerous major music festivals world-wide, including Rainbow Serpent and Earth Frequency in Australia, Satya and Lau Lau in Israel, Shambhala, Entheos, and Astral Harvest in Canada, and up and down the U.S. west coast, including Symbiosis Gathering, Esthetic Evolution, The Bounce, Raindance, Alchemeyez, Burningman, and many more. ")); ?>
							</p>
							<ul class="links pull-right">
								<li><a href="https://www.facebook.com/mrrogersmusic" target="_blank"><i class="icon-facebook"></i></a></li>
								<li><a href="http://innerflight.com/mr-rogers" target="_blank"><i class="icon-globe"></i></a></li>
								<li><a href="https://soundcloud.com/mr-rogers" target="_blank"><i class="icon-cloud"></i></a></li>
							</ul>
					  </div>
					</div>
					<div class="media headliner">
						<div class="image-container pull-left">
							<img src="/images/music/seied.jpg" width="200px" />
						</div>
					  <div class="media-body">
					    <h4 class="media-heading">
								SEIED
							</h4>
							<p>
								<?= nl2br(htmlentities('Seied is no stranger to the bass music scene. He has been remixed by the likes of Bassnectar, appearing on Lorin’s legendary albums “Mesmerizing the Ultra” and “Diverse Systems of Throb” as far back as 2004, he has been inspiring and shaping the bass music culture for almost a decade. He has also done remixes of Si Begg’s "Tyranny of Pesto" and Dicrylium’s "Hippy Britches" -Digital Distortions-, and many collaborations with artists of note like Jantsen. His completely unique production style, and intelligent mutating futuristic basslines make Seied’s music the stuff of instant future classics.

He has been playing many major shows this year alongside some of the the most sought after bass music performers, as word is spreading about his sound. And his gig book is quickly filling up for the rest of the year. Seied’s tracks have been in constant rotation by the DJs at Glitch.Fm. And he has received strong support from many of the top producers and performers in the field.')); ?>
							</p>
							<!-- <iframe width="100%" height="320" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/playlists/1103133&amp;color=ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_artwork=true"></iframe> -->
							<ul class="links pull-right">
								<li><a href="https://www.facebook.com/Seied" target="_blank"><i class="icon-facebook"></i></a></li>
								<li><a href="http://myspace.com/seied" target="_blank"><i class="icon-globe"></i></a></li>
								<li><a href="https://soundcloud.com/seied" target="_blank"><i class="icon-cloud"></i></a></li>
							</ul>
					  </div>
					</div>
					<div class="media headliner">
						<div class="image-container pull-left">
							<img src="/images/music/Plantrae.jpg" width="200px" />
						</div>
					  <div class="media-body">
					    <h4 class="media-heading">
								Plantrae
							</h4>
							<p>
								<?= nl2br(htmlentities('Plantrae is an intricate, energetic and biotic sound experience originating deep in the rainforests of cascadia. It is composed of a bass rooted, stretchy midtempo foundation and live viola improvisation that embodies the spirited essence of classical, swing and folk. Seeking to unite organic melody and intricate electronics, Plantrae also encourages the listener to delve deep into the humyn ethos, back to a time when we lived as one with the earth. Moving percussion blends seamlessly with glistening string melodies and vibrant synth lines, bringing folk and earth-inspired psalms into the bass driven universe of midtempo and broken beat glitchhop.')); ?>
							</p>
							<ul class="links pull-right">
								<li><a href="https://www.facebook.com/plantraemusic" target="_blank"><i class="icon-facebook"></i></a></li>
								<li><a href="http://plantrae.bandcamp.com/" target="_blank"><i class="icon-globe"></i></a></li>
								<li><a href="http://soundcloud.com/plantrae" target="_blank"><i class="icon-cloud"></i></a></li>
							</ul>
					  </div>
					</div>
					<div class="media headliner">
						<div class="image-container pull-left">
							<img src="/images/music/kmln.jpg" width="200px" />
						</div>
					  <div class="media-body">
					    <h4 class="media-heading">
								KMLN (Live)
							</h4>
							<p>
								<?= nl2br(htmlentities('Whoever tours with KMLN lives the music – dancing, singing and performing – bringing a whole new level of integrated entertainment to the DJ scene. Among the instruments played you might hear violin, bass, guitar & trumpet but most of all live drummers. Every color stands for a feeling and represents the many sides of their music, which ranges from deeper house elements, techno, downtempo, minimal abstract and rock influenced modern electronica, with a very organic swing throughout all productions. KMLN is more than just a collective, with guest performers and musicians, it\'s a vision created to promote human beings as "chameleons", that can easily adapt to their surroundings, share and gain colors the more they interact with each other through Love.')); ?>
							</p>
							<!-- <iframe width="100%" height="166" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/81883434&amp;color=ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_artwork=true"></iframe> -->
							<ul class="links pull-right">
								<li><a href="https://www.facebook.com/KMLNofficial" target="_blank"><i class="icon-facebook"></i></a></li>
								<li><a href="http://www.residentadvisor.net/dj/kmln" target="_blank"><i class="icon-globe"></i></a></li>
								<li><a href="https://soundcloud.com/kmln-berlin" target="_blank"><i class="icon-cloud"></i></a></li>
							</ul>
					  </div>
					</div>
					<div class="media headliner">
						<div class="image-container pull-left">
							<img src="/images/music/nico-luminous.jpg" width="200px" />
						</div>
					  <div class="media-body">
					    <h4 class="media-heading">
								Nico Luminous
							</h4>
							<p>
								<?= nl2br(htmlentities('Bass Music and HipHop artist Nico Luminous has created a voice all his own in the West Coast EDM scene and beyond as a ground breaking music producer, DJ and vocalist. His intelligently sampled melodies and thumpy bass lines capture dance floors in a sensual pulse that is simultaneously high energy and laid back. ')); ?>
							</p>
							<ul class="links pull-right">
								<li><a href="https://www.facebook.com/nico.luminizzle" target="_blank"><i class="icon-facebook"></i></a></li>
								<li><a href="http://nicoluminous.com" target="_blank"><i class="icon-globe"></i></a></li>
								<li><a href="https://soundcloud.com/nicoluminous" target="_blank"><i class="icon-cloud"></i></a></li>
							</ul>
					  </div>
					</div>
					<div class="media headliner">
						<div class="image-container pull-left">
							<img src="/images/music/djgamma.jpg" width="200px" />
						</div>
					  <div class="media-body">
					    <h4 class="media-heading">
								G.A.M.M.A.
							</h4>
							<p>
								<?= nl2br(htmlentities('Born and raised in Northern California, G.A.M.M.A. AKA The Predator burst onto the techno scene in 1997. Listening to many different styles of underground techno at a young age has made G.A.M.M.A.’s own musical style diverse, hypnotizing, and addictive. Spinning a continuous and flawless mix of acid techno, breaks and house, has brought G.A.M.M.A. worldwide notoriety.')); ?>
							</p>
							<ul class="links pull-right">
								<li><a href="https://www.facebook.com/pages/DJ-GAMMA/118406901512068" target="_blank"><i class="icon-facebook"></i></a></li>
								<li><a href="http://www.djgamma.com/" target="_blank"><i class="icon-globe"></i></a></li>
								<li><a href="https://soundcloud.com/djgamma" target="_blank"><i class="icon-cloud"></i></a></li>
							</ul>
					  </div>
					</div>
					<div class="media headliner">
						<div class="image-container pull-left">
							<img src="/images/music/dov.jpg" width="200px" />
						</div>
					  <div class="media-body">
					    <h4 class="media-heading">
								Dov
							</h4>
							<p>
								<?= nl2br(htmlentities('Dov is the person behind Muti Music, a selector at heart, compulsively picking tunes for record labels and for your dancing - listening pleasure. He produces various bassline centric music,  downtempo, midtempo and uptempo Dubstep, Drumstep, Glitch Hop, Breaks and whatever catches his fancy in the future, also receiving accolades for collaborations with ill.Gates, An-ten-nae and Funk Monsta. His sound when performing represents that of a whole movement of young producers coming out on his Muti Music imprint and adds directions that you know are going to emerge more in the future.')); ?>
							</p>
							<!-- <iframe width="100%" height="450" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/playlists/2628473&amp;color=ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_artwork=true"></iframe> -->
							<ul class="links pull-right">
								<li><a href="https://www.facebook.com/DovTunes" target="_blank"><i class="icon-facebook"></i></a></li>
								<li><a href="http://www.mutimusic.com/index.php/artist/dov" target="_blank"><i class="icon-globe"></i></a></li>
								<li><a href="https://soundcloud.com/dov" target="_blank"><i class="icon-cloud"></i></a></li>
							</ul>
					  </div>
					</div>
					<div class="media headliner">
						<div class="image-container pull-left">
							<img src="/images/music/Mihkal.jpg" width="200px" />
						</div>
					  <div class="media-body">
					    <h4 class="media-heading">
								MIHKAL
							</h4>
							<p>
								<?= nl2br(htmlentities("Music i Have Known And Loved")); ?>
							</p>
							<!-- <iframe width="100%" height="166" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/109809534&amp;color=ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_artwork=true"></iframe> -->
							<ul class="links pull-right">
								<li><a href="https://www.facebook.com/MusiciHaveKnownAndLoved" target="_blank"><i class="icon-facebook"></i></a></li>
								<li><a href="https://soundcloud.com/mihkal" target="_blank"><i class="icon-cloud"></i></a></li>
							</ul>
					  </div>
					</div>
					<div class="media headliner">
						<div class="image-container pull-left">
							<img src="/images/music/vndmg.jpg" width="200px" />
						</div>
					  <div class="media-body">
					    <h4 class="media-heading">
								VNDMG
							</h4>
							<p>
								<?= nl2br(htmlentities("With over a decade of experience DJing and Producing, VNDMG is making moves in the electronic music scene. Anthony VanVranken, A.K.A. VNDMG (pronounced Van-Damage), brings a more progressive and psychedelic flare to the world of 808 bass music; finely crafting a sound that is both high energy and eclectic. With a healthy mixture of originals, collaborations, and remixes, a VNDMG set is always unique.")); ?>
							</p>
							<!-- <iframe width="100%" height="166" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/147106000&amp;color=ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_artwork=true"></iframe> -->
							<ul class="links pull-right">
								<li><a href="https://www.facebook.com/VNDMG" target="_blank"><i class="icon-facebook"></i></a></li>
								<li><a href="https://soundcloud.com/vndmg" target="_blank"><i class="icon-cloud"></i></a></li>
							</ul>
					  </div>
					</div>
					<div class="media headliner">
						<div class="image-container pull-left">
							<img src="/images/music/Smasheltooth.jpg" width="200px" />
						</div>
					  <div class="media-body">
					    <h4 class="media-heading">
								Smasheltooth
							</h4>
							<p>
								<?= nl2br(htmlentities("With over a decade of experience DJing and Producing, VNDMG is making moves in the electronic music scene. Anthony VanVranken, A.K.A. VNDMG (pronounced Van-Damage), brings a more progressive and psychedelic flare to the world of 808 bass music; finely crafting a sound that is both high energy and eclectic. With a healthy mixture of originals, collaborations, and remixes, a VNDMG set is always unique.")); ?>
							</p>
							<ul class="links pull-right">
								<li><a href="https://www.facebook.com/smasheltooth" target="_blank"><i class="icon-facebook"></i></a></li>
								<li><a href="https://soundcloud.com/smasheltooth" target="_blank"><i class="icon-cloud"></i></a></li>
								<li><a href="http://smasheltooth.com/" target="_blank"><i class="icon-globe"></i></a></li>
							</ul>
					  </div>
					</div>

					<div class="media headliner">
						<div class="image-container pull-left">
							<img src="/images/music/el-papa-chango.jpg" width="200px" />
						</div>
					  <div class="media-body">
					    <h4 class="media-heading">
								El Papa Chango
							</h4>
							<p>
								<?= nl2br(htmlentities('El Papachango from Argentina moved to the states as a young adult and brought with him a love of music from South America that he blended with West Coast underground beats to create a groove that is unique and infectious to dance floors everywhere. Sexy, soulful and funky sounds come out of him even when he’s fast asleep.

El Papachango is also one of the core creators of the legendary El Circo, one of San Francisco’s most prominent avant-garde performance groups that has been delivering music with a grip of very talented artists on massive systems across the planet, like Bassnectar, The Glitch Mob, Freq Nasty, Dj Laura, Antennae and many others. His latin fusion and hip hop influence leaves audiences stunned – with a sense of the mystical rooted in a very tangible dance floor experience.')); ?>
							</p>
							<!-- <iframe width="100%" height="166" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/64319230&amp;color=ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_artwork=true"></iframe> -->
							<ul class="links pull-right">
								<li><a href="https://www.facebook.com/elpapachangomusic" target="_blank"><i class="icon-facebook"></i></a></li>
								<li><a href="http://thedjlist.com/djs/EL_PAPACHANGO/" target="_blank"><i class="icon-globe"></i></a></li>
								<li><a href="https://soundcloud.com/elpapachangomusic" target="_blank"><i class="icon-cloud"></i></a></li>
							</ul>
					  </div>
					</div>
					<div class="media headliner">
						<div class="image-container pull-left">
							<img src="/images/music/shawna.jpg" width="200px" />
						</div>
					  <div class="media-body">
					    <h4 class="media-heading">
								Shawna
							</h4>
							<p>
								<?= nl2br(htmlentities("Shawna's passion for music began in early childhood while attending the Winnipeg music folk festival in Manitoba, Canada, where she grew up. There, she was exposed to musical genius from all over the planet, which greatly refined her ear for the subtleties and origins of all types of music. It wasn't until the age of 18 that she took an interest in electronic music, and began pursuing Music of just about every genre, crafting the art of spinning it all together in a smooth hot mess of the dance journey, while simultaneously always searching for that same quality of depth, fun and life in the electronic realm. She's been dj-ing \"out\" since 1999. Played next to many a known name such as: Bassnectar, Mimosa, Glitch Mob, Beats Antique, Marty Party, Miguel Migs, Moderat, Heyokah, Mochipet, Freak Nasty, Tipper, Antennae, Lowriderz, etc. The list goes on and on and on. Member of El Circo, and has a musical project with Zoe Jakes - of Beat Antique - called Pussymonster.
She plays for the dancers!!!")); ?>
							</p>
							<ul class="links pull-right">
								<li><a href="https://www.facebook.com/ShawnaOfficial" target="_blank"><i class="icon-facebook"></i></a></li>
								<li><a href="http://pussymonster.bandcamp.com/" target="_blank"><i class="icon-globe"></i></a></li>
								<li><a href="https://soundcloud.com/dj-shawna" target="_blank"><i class="icon-cloud"></i></a></li>
							</ul>
					  </div>
					</div>
					<div class="media headliner">
						<div class="image-container pull-left">
							<img src="/images/music/Little-John.jpg" width="200px" />
						</div>
					  <div class="media-body">
					    <h4 class="media-heading">
								Little John
							</h4>
							<p>
								<?= nl2br(htmlentities("As an ubiquitous fixture of Northern California's music scene Little John is more than a DJ and an icon; he is a force of nature.

An extraordinary DJ, producer, remixer, and music historian, Little John's musical artistry transcends genres with an intensity, knowledge and savviness possessed by few. Whether he's playing Tech-House, Mid-tempo, Future Bass, or Booty Slap, this innovator continually unites factions and taps new levels of creativity simply for the heart of it. With an acutely discerning ear and an open mind and heart, his ability to read a crowd and mix the perfect vibe truly sets him apart. His is a genuinely unique approach that will move body, mind, and soul.")); ?>
							</p>
							<ul class="links pull-right">
								<li><a href="https://www.facebook.com/Littlejohnthedj" target="_blank"><i class="icon-facebook"></i></a></li>
								<li><a href="https://soundcloud.com/djlittlejohn" target="_blank"><i class="icon-cloud"></i></a></li>
							</ul>
					  </div>
					</div>

					<div class="media headliner">
						<div class="image-container pull-left">
							<img src="/images/music/mozaic.jpg" width="200px" />
						</div>
					  <div class="media-body">
					    <h4 class="media-heading">
								Mozaic
							</h4>
							<p>
								<?= nl2br(htmlentities("DJ, vocalist & producer hailing from San Francisco. On any given weekend, if he's not behind the decks you'll likely find him on a dancefloor somewhere, which is what makes the 10-year-plus veteran a true dancer's DJ. Mozaic has built a reputation on solid mixing and fearless genre-hopping: \"lowrider techno\", hallucinogenic house, dubby disco, and deep garage all find their way into his arsenal- often within one set.")); ?>
							</p>
							<ul class="links pull-right">
								<li><a href="https://www.facebook.com/robertmozaic" target="_blank"><i class="icon-facebook"></i></a></li>
								<li><a href="https://soundcloud.com/mozaic" target="_blank"><i class="icon-cloud"></i></a></li>
								<li><a href="http://www.residentadvisor.net/dj/mozaic" target="_blank"><i class="icon-globe"></i></a></li>
							</ul>
					  </div>
					</div>
					<div class="media headliner">
						<div class="image-container pull-left">
							<img src="/images/music/stridah.jpg" width="200px" />
						</div>
					  <div class="media-body">
					    <h4 class="media-heading">
								Stridah
							</h4>
							<p>
								<?= nl2br(htmlentities("Hailing from the fogs of Santa Cruz, Ca, Stridah has been very busy the past few years. As the resident DJ and a booking agent of the Bay Area production group NEXUS, as well as soundtech/engineer of the now legendary NEXUS Funktion-1 soundsystem, he has witnessed many changes come and go to the landscape of Electronic Music. Producing music secretly out of the not so known collective studio as ACKlabs, and performing live hardware Acid house/teshno in the group Antacid with colleague Mark Pauley, Stridah is inspired by the greater worlds of the plant communities of the redwood forests and the technological stupidity that is occurring on our planet, to relay the emissions of the datacloud to which we owe our standards of existence. Begin transmission……")); ?>
							</p>
							<ul class="links pull-right">
								<li><a href="https://www.facebook.com/pages/Stridah/201570579880817" target="_blank"><i class="icon-facebook"></i></a></li>
								<li><a href="http://soundcloud.com/stridah" target="_blank"><i class="icon-cloud"></i></a></li>
							</ul>
					  </div>
					</div>
					<div class="media headliner">
						<div class="image-container pull-left">
							<img src="/images/music/digital-honey.jpg" width="200px" />
						</div>
					  <div class="media-body">
					    <h4 class="media-heading">
								Digital Honey
							</h4>
							<p>
								<?= nl2br(htmlentities("Digital Honey is the new super group dynamic duo, that everyone has been talking about. It consists of Alia Wolfe and Ginger Vaughn, both highly accomplished DJ's on their own, but put them together and a honeycomb of possibilities becomes a reality.

Playing a mix of breakbeat, tech-house, booty tech, and deep techno, with bits of hip hop tossed in like bacon on a chef's salad to set it off just right, these girls know how to keep a dance floor moving and will do just that for as long as you let them. ")); ?>
							</p>
							<ul class="links pull-right">
								<li><a href="https://www.facebook.com/pages/Digital-Honey/140522232627381" target="_blank"><i class="icon-facebook"></i></a></li>
								<li><a href="https://soundcloud.com/digital-honey" target="_blank"><i class="icon-cloud"></i></a></li>
								<li><a href="http://www.digitalhoneymusic.com/" target="_blank"><i class="icon-globe"></i></a></li>
							</ul>
					  </div>
					</div>

					<div class="media headliner">
						<div class="image-container pull-left">
							<img src="/images/music/timonkey.jpg" width="200px" />
						</div>
					  <div class="media-body">
					    <h4 class="media-heading">
								Timonkey
							</h4>
							<p>
								<?= nl2br(htmlentities("Ten tears ago Timonkey climbed a massive redwood tree that towered above a renegade party in the Santa Cruz mountains. As the sun rose, he received the inspiration for what has been his mission ever since: to make the very best sunrise music ever. Delivering a proper morning set is a delicate art: the dancers need strong energy to keep going, but they are also craving something different by this point in the experience. Timonkey is one of the few DJ/Producers who specialize in the \"something different\" that can give a long night of rave and revelry the closing ritual it deserves.
")); ?>
							</p>
							<ul class="links pull-right">
								<li><a href="https://www.facebook.com/TimonkeyMusic" target="_blank"><i class="icon-facebook"></i></a></li>
								<li><a href="https://soundcloud.com/timonkey" target="_blank"><i class="icon-cloud"></i></a></li>
							</ul>
					  </div>
					</div>
					<div class="media headliner">
						<div class="image-container pull-left">
							<img src="/images/music/antacid.jpg" width="200px" />
						</div>
					  <div class="media-body">
					    <h4 class="media-heading">
								The Antacid Crew
							</h4>
							<p>
								<?= nl2br(htmlentities("AntAcid is the brainchild of two distinctly talented musicians and DJ's Mark Pauley and Kyle Griffin from Santa Cruz, California. Armed with a MIDI clock, an arsenal of analog and digital electronic instruments and a taste for the warehouse emanations of yore, AntAcid brings a fresh take on the essence of Detroit and Chicago Acid with their 100% live sets.
")); ?>
							</p>
							<!-- <iframe width="100%" height="166" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/145103330&amp;color=ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_artwork=true"></iframe> -->
							<ul class="links pull-right">
								<li><a href="https://www.facebook.com/pages/Antacid-Official/473460506020132‎" target="_blank"><i class="icon-facebook"></i></a></li>
								<li><a href="https://soundcloud.com/antacid" target="_blank"><i class="icon-cloud"></i></a></li>
							</ul>
					  </div>
					</div>
					<div class="media headliner">
						<div class="image-container pull-left">
							<img src="/images/music/wala.jpg" width="200px" />
						</div>
					  <div class="media-body">
					    <h4 class="media-heading">
								Wala
							</h4>

							<p>
								<?= nl2br(htmlentities("Hailing from the bass factory of San Francisco, WALA blends a sexy, worldly quality into the scintillating sounds of Glitch-Hop and Dubstep. She takes dancefloors on a kinetic journey from massive crunk to cultured bhangra--and every planetary highway in-between--while staying true to bass culture’s grimy foundations. This has propelled the tiny purple haired producer to esteemed status and has sent her to festivals and clubs all over the country.
")); ?>
							</p>
							<!-- <iframe width="100%" height="166" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/138913319&amp;color=ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_artwork=true"></iframe> -->
							<ul class="links pull-right">
								<li><a href="https://www.facebook.com/WALAmusic" target="_blank"><i class="icon-facebook"></i></a></li>
								<li><a href="https://soundcloud.com/wala" target="_blank"><i class="icon-cloud"></i></a></li>
								<li><a href="http://www.walamusic.com/" target="_blank"><i class="icon-globe"></i></a></li>
							</ul>
					  </div>
					</div>
					<div class="media headliner">
						<div class="image-container pull-left">
							<img src="/images/music/kitty-d.jpg" width="200px" />
						</div>
					  <div class="media-body">
					    <h4 class="media-heading">
								Kitty-D
							</h4>
							<p>
								<?= nl2br(htmlentities("Kitty-D works with an audio arsenal library of manipulated sampled recordings, analog, digital and self created sounds to initialize a universe of sonic fiction. Collaborations include tracks with Random Rab, Ooah, Mimosa , and many other audio entities. His original compositions, mash-ups, & remixes have been bringing big warm bass sounds with hypnotic layering, melodies, catchy hooks & a hip hop flavor to the underground west coast glitch/ breaks/ & dubstep music scenes since 2004.")); ?>
							</p>
							<ul class="links pull-right">
								<li><a href="https://www.facebook.com/KittyDizzlez" target="_blank"><i class="icon-facebook"></i></a></li>
								<li><a href="https://soundcloud.com/kitty-d" target="_blank"><i class="icon-cloud"></i></a></li>
							</ul>
					  </div>
					</div>
					<div class="media headliner">
						<div class="image-container pull-left">
							<img src="/images/music/indaskyes.jpg" width="200px" />
						</div>
					  <div class="media-body">
					    <h4 class="media-heading">
								Indaskyes
							</h4>
							<p>
								<?= nl2br(htmlentities("Encounter Jared Lindo before dark and he's an unassuming suburban computer geek, but once night falls he takes to the DJ booth and transforms into a high-energy bass music producer named indaskyes. Equally at home throwing down urban ghetto beats for hippies in the desert or getting a VIP bottle service crowd bobbing their heads to a psychedelic dubstep tune, indaskyes is a musical chameleon with a singular focus - make them DANCE.")); ?>
							</p>
							<ul class="links pull-right">
								<li><a href="https://www.facebook.com/indaskyesmusic" target="_blank"><i class="icon-facebook"></i></a></li>
								<li><a href="https://soundcloud.com/indaskyes" target="_blank"><i class="icon-cloud"></i></a></li>
							</ul>
					  </div>
					</div>
					<div class="media headliner">
						<div class="image-container pull-left">
							<img src="/images/music/djbalance.jpg" width="200px" />
						</div>
					  <div class="media-body">
					    <h4 class="media-heading">
								dj Balance
							</h4>
							<p>
								<?= nl2br(htmlentities("Balance can be described as a master vibe setter. One could even call her a beat-barista, pressing hand crafted shots of rhythm and bass that bring listeners into movement. Her career began many years ago when a strong passion for hip hop and electronic music and a dangerous curiosity toward the art of ass shaking fused together, illuminating a clear path for her to DJ-dom.")); ?>
							</p>
							<ul class="links pull-right">
								<li><a href="https://www.facebook.com/balancedj" target="_blank"><i class="icon-facebook"></i></a></li>
								<li><a href="www.soundcloud.com/msdjbalance" target="_blank"><i class="icon-cloud"></i></a></li>
								<li><a href="http://www.msdjbalance.com" target="_blank"><i class="icon-globe"></i></a></li>
							</ul>
					  </div>
					</div>
					<div class="row-fluid">
						<div class="span12">
							<div class="media headliner" style="margin-top: 20px;">
								<div class="image-container pull-left">
									<img src="/images/music/brother.jpg" width="200px" />
								</div>
							  <div class="media-body">
							    <h4 class="media-heading">
										Brother
									</h4>
									<p>
										<?= nl2br(htmlentities("He is your Brother and he's coming home for Raindance.")); ?>
									</p>
									<ul class="links pull-right">
										<li><a href="https://www.facebook.com/stephen.goodenough.56?fref=ts" target="_blank"><i class="icon-facebook"></i></a></li>
									</ul>
							  </div>
							</div>
						</div>
					</div>
					<div class="row-fluid">
						<div class="span12">
							<div class="media headliner" style="margin-top: 20px;">
								<div class="image-container pull-left">
									<img src="/images/music/rob-monroy.jpg" width="200px" />
								</div>
							  <div class="media-body">
							    <h4 class="media-heading">
										Rob Monroy
									</h4>
									<p>
										<?= nl2br(htmlentities("Rob embodies the true spirit of a House DJ. His mixes are long, on point and before you know what happened you'll be dancing in a sea of smiles.  Last Night Rob Monroy saved my life.")); ?>
									</p>
									<!-- <iframe width="100%" height="166" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/128743731&amp;color=ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_artwork=true"></iframe> -->
									<ul class="links pull-right">
										<li><a href="https://www.facebook.com/robmonroy" target="_blank"><i class="icon-facebook"></i></a></li>
										<li><a href="https://soundcloud.com/robmonroy" target="_blank"><i class="icon-cloud"></i></a></li>
									</ul>
							  </div>
							</div>
						</div>
					</div>
					<div class="row-fluid">
						<div class="span12">
							<div class="media headliner" style="margin-top: 20px;">
								<div class="image-container pull-left">
									<img src="/images/music/trevor-kelly.jpg" width="200px" />
								</div>
							  <div class="media-body">
							    <h4 class="media-heading">
										Trevor Kelly
									</h4>
									<p>
										<?= nl2br(htmlentities("Ritual SF")); ?>
									</p>
									<ul class="links pull-right">
										<li><a href="https://www.facebook.com/TrevorKellyTunes" target="_blank"><i class="icon-facebook"></i></a></li>
										<li><a href="https://soundcloud.com/Trevorkellyproductions" target="_blank"><i class="icon-cloud"></i></a></li>
									</ul>
							  </div>
							</div>
						</div>
					</div>
					<div class="row-fluid">
						<div class="span12">
							<div class="media headliner" style="margin-top: 20px;">
								<div class="image-container pull-left">
									<img src="/images/music/andrew-the-pirate.jpg" width="200px" />
								</div>
							  <div class="media-body">
							    <h4 class="media-heading">
										the Pirate
									</h4>
									<p>
										<?= nl2br(htmlentities("irie booty git down sounds")); ?>
									</p>
									<!-- <iframe width="100%" height="166" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/142374231&amp;color=ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_artwork=true"></iframe> -->
									<ul class="links pull-right">
										<li><a href="https://www.facebook.com/andrewthepirate" target="_blank"><i class="icon-facebook"></i></a></li>
										<li><a href="https://soundcloud.com/pirateslaps" target="_blank"><i class="icon-cloud"></i></a></li>
									</ul>
							  </div>
							</div>
						</div>
					</div>
					<div class="row-fluid" style="margin-top: 20px;">
						<div class="span12">
							<div class="media headliner">
								<div class="image-container pull-left">
									<img src="/images/music/le-portal.jpg" width="200px" />
								</div>
							  <div class="media-body">
							    <h4 class="media-heading">
										le portal
									</h4>
									<p>
										<?= nl2br(htmlentities("i like beets")); ?>
									</p>
									<ul class="links pull-right">
										<li><a href="https://www.facebook.com/LePortalPresents" target="_blank"><i class="icon-facebook"></i></a></li>
										<li><a href="https://soundcloud.com/le-portal" target="_blank"><i class="icon-cloud"></i></a></li>
									</ul>
							  </div>
							</div>
						</div>
					</div>
					<div class="row-fluid" style="margin-top: 20px;">
						<div class="span12">
							<div class="media headliner">
								<div class="image-container pull-left">
									<img src="/images/music/alabaster-kane.jpg" width="200px" />
								</div>
							  <div class="media-body">
							    <h4 class="media-heading">
										Alabaster Kane
									</h4>
									<p>
										<?= nl2br(htmlentities("Likes music.")); ?>
									</p>
									<ul class="links pull-right">
										<li><a href="https://www.facebook.com/AlabasterKane" target="_blank"><i class="icon-facebook"></i></a></li>
										<li><a href="https://soundcloud.com/alabasterkane" target="_blank"><i class="icon-cloud"></i></a></li>
									</ul>
							  </div>
							</div>
						</div>
					</div>
					<div class="row-fluid" style="margin-top: 20px;">
						<div class="span12">
							<div class="media headliner" style="margin-top: 20px;">
								<div class="image-container pull-left">
									<img src="/images/music/buckner.jpg" width="200px" />
								</div>
							  <div class="media-body">
							    <h4 class="media-heading">
										Buckner
									</h4>
									<p>
										<?= nl2br(htmlentities("Buckner's musical sound covers several flavors of house and techno, mixed in thickly-layered sound, and always sauteed with a twist of funk. ")); ?>
									</p>
									<ul class="links pull-right">
										<li><a href="https://www.facebook.com/buckner.williams?fref=ts" target="_blank"><i class="icon-facebook"></i></a></li>
										<li><a href="http://www.soundcloud.com/buckner" target="_blank"><i class="icon-cloud"></i></a></li>
									</ul>
							  </div>
							</div>
						</div>
					</div>
					<div class="row-fluid">
						<div class="span12">
							<div class="media headliner" style="margin-top: 20px;">
								<div class="image-container pull-left">
									<img src="/images/music/dax-lee.jpg" width="200px" />
								</div>
							  <div class="media-body">
							    <h4 class="media-heading">
										Dax Lee
									</h4>
									<p>
										<?= nl2br(htmlentities("San Francisco based DJ and Promoter.")); ?>
									</p>
									<ul class="links pull-right">
										<li><a href="https://www.facebook.com/djdaxlee" target="_blank"><i class="icon-facebook"></i></a></li>
										<li><a href="https://soundcloud.com/daxlee" target="_blank"><i class="icon-cloud"></i></a></li>
									</ul>
							  </div>
							</div>
						</div>
					</div>
					<div class="row-fluid" style="margin-top: 20px;">
						<div class="span12">
							<div class="media headliner" style="margin-top: 20px;">
								<div class="image-container pull-left">
									<img src="/images/music/dabis.jpg" width="200px" />
								</div>
							  <div class="media-body">
							    <h4 class="media-heading">
										Dabis
									</h4>
									<p>
										<?= nl2br(htmlentities("Sometimes less is more. The evolution of the experience of sound changes as we age. One could say the same thing about Dabis.")); ?>
									</p>
									<ul class="links pull-right">
										<li><a href="https://www.facebook.com/dabis" target="_blank"><i class="icon-facebook"></i></a></li>
										<li><a href="https://soundcloud.com/djdabis" target="_blank"><i class="icon-cloud"></i></a></li>
									</ul>
							  </div>
							</div>
						</div>
					</div>
					<div class="row-fluid" style="margin-top: 20px;">
						<div class="span12">
							<div class="media headliner" >
								<div class="image-container pull-left">
									<img src="/images/music/cumulus.jpg" width="200px" />
								</div>
							  <div class="media-body">
							    <h4 class="media-heading">
										Cumulus
									</h4>
									<p>
										<?= nl2br(htmlentities("Cumulus' music is science friction, futuristic fringe music with a pulse.")); ?>
									</p>
									<ul class="links pull-right">
										<li><a href="https://www.facebook.com/sfairweather" target="_blank"><i class="icon-facebook"></i></a></li>
										<li><a href="https://soundcloud.com/samulus" target="_blank"><i class="icon-cloud"></i></a></li>
									</ul>
							  </div>
							</div>
						</div>
					</div>
					<div class="row-fluid">
						<div class="content-block" style="margin-top: 20px;">
							<div class="span4">
								<ul class="artist-list">
									<li>
										<h4>
											<a href="https://www.facebook.com/djmicahj" target="_blank">
												Micah J
											</a>
										</h4>
									</li>
									<li>
										<h4>
											<a href="https://soundcloud.com/tony-inorbit" target="_blank">
												Tony In Orbit
											</a>
										</h4>
									</li>
									<li>
										<h4>
											<a href="http://www.soundcloud.com/leafygreen" target="_blank">
												LeafyGreen
											</a>
										</h4>
									</li>
									<li>
										<h4>
											<a href="https://soundcloud.com/stay-deep" target="_blank">
												Stay Deep
											</a>
										</h4>
									</li>
									<li>
										<h4>
											<a href="http://soundcloud.com/all-the-time" target="_blank">
												Harry Callahan
											</a>
										</h4>
									</li>
									<li>
										<h4>Shmonday Allstarz</h4>
									</li>
									<li>
										<h4>Gudada</h4>
									</li>
								</ul>
							</div>
							<div class="span4">
								<ul class="artist-list">
									<li>
										<h4>
											<a href="https://soundcloud.com/lowghos" target="_blank">
												LowGhos
											</a>
										</h4>
									</li>
									<li>
										<h4>
											<a href="https://www.facebook.com/ConstantCreationz" target="_blank">
												5th Density Sound
											</a>
										</h4>
									</li>
									<li>
										<h4>
											<a href="https://soundcloud.com/zaggasaurus" target="_blank">
												Zaggasaurus
											</a>
										</h4>
									</li>
									<li>
										<h4>
											<a href="https://www.facebook.com/pages/D-Majik/224380937741462" target="_blank">
												D Majick
											</a>
										</h4>
									</li>
									<li>
										<h4>
											<a href="https://soundcloud.com/mycho" target="_blank">
												Pan Cocoa
											</a>
										</h4>
									</li>
									<li>
										<h4>
											<a href="https://soundcloud.com/intellitard" target="_blank">
												Intellitard
											</a>
										</h4>
									</li>
									<li>
										<h4>
											<a href="https://soundcloud.com/subsonic-drops" target="_blank">
												Subsonic Drops
											</a>
										</h4>
									</li>
								</ul>
							</div>
							<div class="span4">
								<ul class="artist-list">
									<li>
										<h4>
											<a href="https://soundcloud.com/jlabs" target="_blank">
												J Labs
											</a>
										</h4>
									</li>
									<li>
										<h4>
											<a href="https://soundcloud.com/everyman_music" target="_blank">
												Everyman
											</a>
										</h4>
									</li>
									<li>
										<h4>
											<a href="https://soundcloud.com/everyman_music" target="_blank">
												Everyman
											</a>
										</h4>
									</li>
									<li>
										<h4>
											<a href="https://soundcloud.com/christafari" target="_blank">
												Christafari
											</a>
										</h4>
									</li>
									<li>
										<h4>
											<a href="http://www.sub.fm/lb-konfusion/" target="_blank">
												LB & Konfusion
											</a>
										</h4>
									</li>
									<li>
										<h4>
											Perkulator
										</h4>
									</li>
									<li>
										<h4>Question</h4>
									</li>
									<li>
										<h4>Zack Rawlinson</h4>
									</li>
								</ul>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<? include '_footer.php'; ?>
</body>
</html>