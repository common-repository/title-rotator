<?php
   /*
   Plugin Name: Title Rotator
   Plugin URI: http://www.arkapravamajumder.com	
   Description: This plugin will rotate your content between title tag.
   Version: 1.0
   Author: Arkaprava Majumder
   Author URI: http://arkapravamajumder.com
   License: GPL
   */
?>
<?php
function titlerotatorbyarka() {
    ?>
	
	<script>
var tit = document.title;
var c = 0;
function writetitle() {
	if (document.all || document.getElementById) {
	document.title = tit.substring(0,c);
		if (c==tit.length) {
		c = 0;
		setTimeout("writetitle()", 400) //
		}
		else {
		c++;
		setTimeout("writetitle()", 200) //
		}

	}

}

writetitle()

</script>
	
	
	<?php
}

add_action( 'wp_enqueue_scripts', 'titlerotatorbyarka' ); 
?>