<?php
get_header();
$p = get_page();
$t = $p->post_title;
echo '<h3>'.apply_filters('post_title', $t).'</h3>'; // the title is here wrapped with h3
echo apply_filters('the_content', $p->post_content);
ech0 "TEST";