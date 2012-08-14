	<div class="container">
		<div id="header" class="sixteen columns">
			<h1 class="remove-bottom" style="margin-top: 40px"><a href="<?php print $front_page;?>"><?php print $site_name;?></a></h1>
			<h5><?php print $site_slogan; ?></h5>
			<hr />
			
			<?php if ($main_menu): ?>
				<?php print theme('links', $main_menu); ?>
			<?php endif; ?>
		</div>
		
		<?php if (drupal_is_front_page()): ?>
			<div id="headliner">
				<div id="slider" class="two-thirds column">
					<?php print render($page['headliner_slider']); ?>
				</div>
				<div id="blurb" class="one-third column">
					<?php print render($page['headliner_blurb']); ?>
				</div>
			</div><!-- headliner -->
		<?php endif; ?>
		
		<div id="main">
			<div id="content" class="two-thirds column">
				<?php if ($title): ?><h3><?php print $title; ?></h3><?php endif; ?>
				<?php print render($page['content']); ?>
			</div>
			
			<div id="sidebar" class="one-third column">
				<?php print render($page['sidebar_first']); ?>
			</div>
		</div><!-- main -->
		
		<div id="footer">
			
			<?php if ($page['footer_firstcolumn'] || $page['footer_secondcolumn'] || $page['footer_thirdcolumn'] || $page['footer_fourthcolumn']): ?>
				<div id="footer_box1" class="four columns omega">
					<?php print render($page['footer_firstcolumn']); ?>
				</div>
				<div id="footer_box2" class="four columns omega">	
					<?php print render($page['footer_secondcolumn']); ?>
				</div>
				<div id="footer_box3" class="four columns omega">
					<?php print render($page['footer_thirdcolumn']); ?>
				</div>
				<div id="footer_box4" class="four columns omega">
					<?php print render($page['footer_fourthcolumn']); ?>
				</div>
			<?php endif; ?>
			
			<?php if ($page['footer']): ?>    
				<?php print render($page['footer']); ?>
			<?php endif; ?>
		</div><!-- footer -->

	</div><!-- container -->

