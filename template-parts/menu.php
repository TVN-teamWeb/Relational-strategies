<div id="logo" class="logo">
  <a href="/restyle">
  <img src="<?php echo get_bloginfo('template_url'); ?>/assets/images/logo.png">
  </a>
</div>
<ul>

<?php
  $menu = wp_get_nav_menu_items("MAIN");
  foreach ($menu as $item) {
?>
  <li><a class="link" onclick="closeNav()" href="<?php echo $item->url; ?>"><span><?php echo $item->post_title; ?></span></a></li>
<?php
  }
?>
</ul>
