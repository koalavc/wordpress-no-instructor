<!-- displays sidebar info -->


<aside class="sidebar" role="complementary">

	<div class="container">
		<button class="btn search-submit" type="submit" role="button"><?php echo "<a href=\"javascript:history.go(-1)\">GO BACK</a>"; ?></button>
	</div>
	<?php get_template_part('searchform'); ?>

	<div class="sidebar-widget">
		<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-1')) ?>
	</div>

	<div class="sidebar-widget">
	</div>

</aside>
<!-- /sidebar -->
