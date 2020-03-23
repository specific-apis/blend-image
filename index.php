<?php header('Content-type: image/svg+xml'); ?>

<svg xmlns="http://www.w3.org/2000/svg" width="800" height="450" viewBox="0 0 800 450">
		<defs>
	    <linearGradient id="Gradient">
	      <stop offset="0" stop-color="black" />
	      <stop offset="1" stop-color="white" />
	    </linearGradient>
	    <mask id="Mask">
	      <rect x="0" y="0" width="800" height="450" fill="url(#Gradient)"  />
	    </mask>
 		</defs>
		<style>
			image {
				width: 800px;
				height: 450px;
				margin: 0;
				padding: 0;
				position: absolute;
				top: 0;
				left: 0;
			}
		</style>
      <?php
        echo '<image preserveAspectRatio="xMidYMid slice" id="left" href="' . $_GET["left"] . '"/>';
        echo '<image preserveAspectRatio="xMidYMid slice" mask="url(#Mask)" id="right" href="' . $_GET["right"] . '"/>';
      ?>
</svg>
