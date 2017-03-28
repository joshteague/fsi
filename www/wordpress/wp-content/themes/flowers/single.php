<?php
$post = $wp_query->post;
if ( in_category('17') ) {
include(TEMPLATEPATH . '/tpod.php');
} else {
include(TEMPLATEPATH . '/index.php');
}
?>