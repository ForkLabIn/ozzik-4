<!DOCTYPE html>
<html lang="en" class="blocked">
<head>
	<meta charset="UTF-8" />
	<base href="<?php echo $_BASE_URL; ?>" />
	<title>Oz Pinhas</title>
	<meta name="description" content="Oz Pinhas - Product designer and front-end developer." />
	<meta name="keywords" content="Oz Pinhas, Product Design, Mobile Design, Web Design, UI Design, UX, Front-end Development, ozzik, עוז פנחס, עוזיק" />
	<meta property="og:title" content="Oz Pinhas" />
	<meta property="og:description" content="Product designer and front-end developer." />
	<meta property="og:image" content="http://ozzik.co/assets/images/og.png" />
	<link rel="icon" type="image/x-icon" href="assets/images/favicon.ico" />
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Bitter:400,700,400italic" />
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Cabin:400,600" />
	<link rel="stylesheet" type="text/css" href="assets/css/web.css" /><?php if ($_CUSTOM_STYLE): ?><link rel="stylesheet" type="text/css" href="assets/css/fixes/<?php echo $_CUSTOM_STYLE; ?>.css" /><?php endif; ?>
	<style id="styleRuntime"></style>
</head>
<body class="blocked">
	<div class="pages transformable-rough-slow" data-page="home">
		<!-- Projects -->
		<a name="projects"></a>
		<div class="page" data-for="home">
			<div class="teaserline teaserline-home bottom link"></div>
			<div class="va-content">
				<div class="wrapper column-4">
					<div class="home-header">
						<ul class="home-navigation titlelike columns wrapper">
							<li class="home-navigation-item column self"><a href="<?php echo $_BASE_URL; ?>" class="home-navigation-link custom" data-for="products" title="Products I've designed and/or developed">Products</a></li>
							<li class="home-navigation-item column self"><a href="concepts" class="home-navigation-link custom" data-for="concepts" title="Ideas I've had for some problems">Concepts</a></li>
							<li class="home-navigation-item column self"><a href="freebies" class="home-navigation-link custom" data-for="freebies" title="Free design resources I've made">Freebies</a></li>
						</ul>
					</div>
					<div class="home-work">
						<div class="strip">
							<div class="navline"></div>
							<div class="strip-button" title="Make some trouble..."><div class="strip-button-content transformable"></div></div>
						</div>
						<div class="showcases-menu">
							<div class="columns">
								<span class="column column-mid meta">Show:</span>
								<ul class="column column-mid">
									<li class="column column-mid filter-item self titlelike active" title="Show every single thing" data-value="">E-V-E-R-Y-T-H-I-N-G</li>
									<li class="column column-mid filter-item self titlelike" title="Show only projects from back when I worked at Brow.si" data-value="browsi">Brow.si Projects</li>
									<li class="column column-mid filter-item self titlelike" title="Show only side-projects" data-value="side">Side Projects</li>
								</ul>
							</div>
						</div>
						<ol class="showcases columns"></ol>
						<div class="strip"></div>
					</div>
					<div class="home-footer columns">
						<div class="column column-1"><h1 class="meta">Oz Pinhas, Product Designer</h1></div>
						<div class="column column-3"><p class="justified crowded">I solve design problems by making people’s day less ordinary, preferably with a smile. Often&nbsp;I&nbsp;also code. Sometimes people use these products. I rinse and repeat this gig.</p></div>
					</div>
				</div>
			</div>
		</div>
		<!-- About -->
		<a name="about"></a>
		<div class="page" data-for="about">
			<div class="teaserline teaserline-home top link">
				<div class="teaserline-tag-wrapper teaserline-tag-about"><span class="teaserline-tag column">this is me</span></div>
			</div>
			<div class="va-content">
				<div class="about-header">
					<div class="about-image column">
						<div class="about-image-ring transformable-n-opacity"></div>
						<img src="assets/images/oz-pinhas.png" width="109" height="109" alt="Oz Pinhas - That's me" />
					</div>
					<h2 class="titlelike about-title"><span class="hidden">About Me</span></h2>
					<p class="metalike about-subtitle">Product Designer & FE Developer</p>
				</div>
				<dl class="about-job lefted">
					<dt class="meta">Currently</dt>
					<dd>Product Designer at <a href="https://billguard.com" title="BillGuard" target="_blank">BillGuard</a></dd>
					<dt class="meta previously">Previously</dt>
					<dd class="previously">Product Designer & FE Dev at <a href="https://brow.si" title="Brow.si" target="_blank">Brow.si</a></dd>
				</dl>
				<p class="about-description justified column-2 wrapper">Hey there! I’m a self-taught designer, specializing in digital products, mostly web and mobile interfaces, which are bluntly designed to put shitload of smiles on people's faces. I have trouble stopping at the mockups phase and usually also front-end develop some of these products. Guilty of 24/7 side-projecting solutions for daily things.</p>
				<ul class="about-contact-items columns column-2 wrapper lefted">
					<li class="contact-item column bubblable"><a href="https://twitter.com/_ozzik" class="contact-link custom contact-link-twitter" title="Read my nonsense on Twitter" target="_blank">Twitter</a></li>
					<li class="contact-item column bubblable"><a href="https://dribbble.com/ozzik" class="contact-link custom contact-link-dribbble" title="Experience 400x300 déjà vu's of this website at Dribbble" target="_blank">Dribbble</a></li>
					<li class="contact-item column bubblable"><a href="mailto:hey@ozzik.co" class="contact-link custom contact-link-email" title="Email me">Email</a></li>
					<li class="contact-item column bubblable"><a href="https://github.com/ozzik" class="contact-link custom contact-link-github" title="See my green blocks count at GitHub" target="_blank">GitHub</a></li>
					<li class="contact-item column bubblable"><a href="https://www.linkedin.com/in/ozpinhas" class="contact-link custom contact-link-linkedin" title="View my LinkedIn profile and remind me to visit there again" target="_blank">LinkedIn</a></li>
				</ul>
			</div>
			<div class="footer">
				<div class="wrapper column-2">
					<p>Lots of unwatched Grey’s Anatomy hours were spent designing and building these projects & site, please don’t be an ass and mess with copyrights, thanks.</p>
					<p>Using beautiful <a href="http://www.google.com/fonts/specimen/Cabin" target="_blank" title="Cabin on Google Fonts">Cabin</a> and <a href="http://www.google.com/fonts/specimen/Bitter" target="_blank" title="Bitter on Google Fonts">Bitter</a> typefaces.</p>
				</div>
			</div>
		</div>
	</div>
	<!-- Project -->
	<div class="project">
		<div class="project-header">
			<div class="ripple"></div>
			<div class="back-button transformable transparent will-change"></div>
			<h1 class="project-title will-change"></h1>
		</div>
		<div class="project-artwork"></div>
		<div class="project-body">
			<div class="project-preface wrapper will-change"></div>
			<div class="project-content will-change"></div>
		</div>
	</div>
	<!-- Overlay's -->
	<div class="overlay overlay-loading va-wrapper active">
		<div class="va-content">
			<p>Sit tight...</p>
		</div>
	</div>
	<div class="tip"></div>
	<?php
		$templates = scandir("templates");

		foreach ($templates as $template) {
			if ($template !== "." && $template !== ".." && $template !== ".DS_Store") {
				$templateName = str_replace(".html", "", $template);
				$templateName = strtolower(preg_replace('/([a-zA-Z])(?=[A-Z])/', '$1-', $templateName));

				echo '<script type="text/template" id="tpl-' . $templateName . '">';
				echo file_get_contents("templates/$template");
				echo '</script>';
			}
		}
	?>
	<!-- Non-markup thingies -->
	<script type="text/javascript">
		var _BASE_URL = "<?php echo $_BASE_URL; ?>",
			_landingData = {
				page: "<?php echo $_page; ?>",
				meta: <?php echo $_meta; ?>,
			},
			_isMe = <?php echo ($isMe) ? "true" : "false"; ?>;
	</script>
	<script type="text/javascript" src="assets/js/web<?php if (!$isLocal): ?>.min<?php endif; ?>.js"></script>
	<?php include("backstage/_analytics.php"); ?>
</body>
</html>