<?php
header('Content-Type: image/svg+xml');
$myColor = $_GET["color"];
echo '<?xml version="1.0" standalone="no"?>
<!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN"
"http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
<svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18.73 18.98"><defs><style>.cls-1{fill:'.$myColor.';}</style></defs><title>facebook</title><path class="cls-1" d="M268.9,404.45a1,1,0,0,1-1,1h-4.77v-7.35h2.44l.36-2.86h-2.8v-1.83c0-.83.23-1.39,1.4-1.39H266v-2.56a19.76,19.76,0,0,0-2.18-.11,3.43,3.43,0,0,0-3.64,3.79v2.11h-2.44v2.86h2.44v7.35h-9a1,1,0,0,1-1-1V387.56a1,1,0,0,1,1-1h16.67a1,1,0,0,1,1,1Z" transform="translate(-250.17 -386.51)"/></svg>';
?>
