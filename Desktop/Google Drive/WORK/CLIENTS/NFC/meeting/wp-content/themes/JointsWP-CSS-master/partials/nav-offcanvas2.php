<div class="large-12 columns show-for-small-up">
	<div class="sticky">
	
		<!-- If you want to use the more traditional "fixed" navigation.
		 simply replace "sticky" with "fixed" -->
	
		<nav class="top-bar" data-topbar>
			<ul class="title-area">
				<!-- Title Area -->
				<li class="name">
					<!-- <h1> <a href="<?php echo home_url(); ?>" rel="nofollow"><?php bloginfo('name'); ?></a></h1> -->
					<h1> <a href="<?php echo home_url(); ?>" rel="nofollow"><img src="http://inside.geometrysf.com/wp-admin/images/gg_logo.png"></a></h1>
				</li>
				<li class="toggle-topbar menu-icon">
					<a href="#"><span>GET STARTED</span></a>
				</li>
			</ul>		
			<section class="top-bar-section">
				<?php joints_main_nav(); ?>
			</section>
		</nav>
	</div>
</div>

<div class="large-12 columns show-for-small-only">
	<div class="contain-to-grid">
		<nav class="tab-bar">
			<section class="middle tab-bar-section">
				<h1 class="title"><img src="http://inside.geometrysf.com/wp-admin/images/gg_logo.png"></h1>
			</section>
			<section class="right-small">
				<a class="left-off-canvas-toggle menu-icon" ><span></span></a>
			</section>
		</nav>
	</div>
</div>
						
<aside class="left-off-canvas-menu show-for-small-only">
	<ul class="off-canvas-list">
		<li><label>Navigation</label></li>
			<?php joints_main_nav(); ?>    
	</ul>
</aside>
			
<a class="exit-off-canvas"></a>