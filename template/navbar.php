<nav class="Navbar">
	<a href="/">Home</a> &nbsp;&nbsp;&nbsp;&nbsp; <a href="/pages/blog.php">Blog</a>
	<span class="RightAlign">
<?php 
if (isset($NAVBARLINKS)) { 
	include($BASE_PATH . $NAVBARLINKS);
}
?>
		<a href="./oscarcresume.pdf">Resume</a>
	</span>
</nav>

