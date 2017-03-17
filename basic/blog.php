<?php /* Template Name: About Page*/ ?>

<?php get_header(); ?>

  <div id="jumbotron">
    <div id='iframe-container'>
      <img src="<?php bloginfo('stylesheet_directory'); ?>/img/filmcell.png" />
      <iframe width="560" height="315" src="https://www.youtube.com/embed/liqNk78_6wk" frameborder="0" allowfullscreen></iframe>
    </div>
  </div>

<div id="main-container" class="clearfix">
	<main id="content">
	<?php do_action( 'basic_main_content_inner_begin' ); ?>

	<div id="about">
		<h1 class="toon"> What is Toontown? </h1>
		<div class="about-section clearfix">
			<img src="<?php bloginfo('stylesheet_directory'); ?>/img/buddies-square.jpg" class="tilt-left"/>
			<div class="right">
				<h2 class="toon"> Cooperate!</h2>
				<p>
						Play this online with other actual humans! They're playing the game, and so are you! At the same time! And the same (digital) space! Games are fun! Play the game! There are also a lot of minigames to play!
				</p>
			</div>
		</div>
		<div class="about-section clearfix">
			<div class="left">
				<h2 class="toon"> Fight the Cogs!</h2>
				<p>
					Cogs are trying to take over the world of toontown in some plot that I don't remember! Help save the world by thowing pies in their faces and causing them to explode! It's really cool to see!
				</p>
			</div>
			<img src="<?php bloginfo('stylesheet_directory'); ?>/img/co-op-square.jpg" class="tilt-right"/>
		</div>
		<div class="about-section clearfix">
			<img src="<?php bloginfo('stylesheet_directory'); ?>/img/speedchat-square.jpg" class="tilt-left"/>
			<div class="right">
				<h2 class="toon"> Be Safe!</h2>
				<p>
						Our ever-watchful moderation team will always be there to make sure you're safe in the world of Toontown. There are also lots of security things to help make it even more safe!
				</p>
			</div>
		</div>
	</div>


</div>
<?php get_footer(); ?>
