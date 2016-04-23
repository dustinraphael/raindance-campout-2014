	<style>
	.navbar .nav>li{
		display: inline;
		margin: 20px 0 0 0;
	}
	.navbar .nav>li>a {
		padding: 0;
		margin: 0 10px;
		font-weight: 600;
		text-shadow: none;
		color: #faf2a7;
	}
	.navbar .nav>li>a:hover{
		color: #f68c25;
		background: transparent;
	}
	.navbar-inner{
		background: transparent;
		background-image: none;
		border: none;
		box-shadow: none;
	}
	.navbar .nav,
	.navbar .nav > li {
	  float:none;
	  display:inline-block;
	  *display:inline; /* ie7 fix */
	  *zoom:1; /* hasLayout ie7 trigger */
	  vertical-align: top;
	}

	.navbar-inner {
	  text-align:center;
	}
	</style>

<div id="hero">
	<div class="banner" style="position: relative;">
		<div style="position: absolute; top: 0; background: rgba(90, 138, 165, 0.2); width: 100%; height: 100%;">
			&nbsp;
		</div>
		<img src="../images/banner.png" width="100%" />
	</div>

	<div class="navbar">
	  <div class="navbar-inner">
	    <div class="container">

	      <!-- .btn-navbar is used as the toggle for collapsed navbar content -->
	      <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </a>

	      <!-- Everything you want hidden at 940px or less, place within here -->
	      <div class="nav-collapse collapse">
	        <!-- .nav, .navbar-search, .navbar-form, etc -->

					<ul class="taglines nav">
						<li><a href="/index.php"><h3>HOME</h3></a></li>
						<li><a href="/info.php"><h3>EVENT INFO</h3></a></li>
						<li><a href="/music.php"><h3>MUSIC</h3></a></li>
						<li><a href="/artists.php"><h3>ART</h3></a></li>
						<li><a href="/workshops.php"><h3>WORKSHOPS</h3></a></li>
						<li><a href="/tickets.php"><h3>TICKETS</h3></a></li>
						<li><a href="/be-involved.php"><h3>PARTICIPATE</h3></a></li>
						<!--
						<li>LAUGH &uarr;</li>
						<li>SHARE &uarr;</li>
						<li>SWIM &uarr;</li>
						<li>BREATHE &uarr;</li>
						<li>GROW &uarr;</li>
						<li>REPEAT &uarr;</li> -->
					</ul>
	      </div>
	    </div>
	  </div>
	</div>
</div>  <!-- end of hero -->
<div class="row-fluid" style="margin: 10px 0;">
	<? if($social == true): ?>
		<div class="span4">
			<div class="fb-like-box" data-href="https://www.facebook.com/raindancepresents" data-colorscheme="light" data-show-faces="true" data-header="true" data-stream="false" data-show-border="true" style="width: 100%;"></div>
			<div class="fb-like" data-href="https://www.facebook.com/raindancepresents" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div>
		</div>
	<? else: ?>
		<div class="span4 page-title">
			<h2 style="text-shadow: 2px 2px black;"><?= $title; ?></h2>
		</div>
	<? endif; ?>
	<div class="span6 offset2" style="margin-top: 10px;">
		<? include '_social_links.php' ?>
	</div>
</div>


