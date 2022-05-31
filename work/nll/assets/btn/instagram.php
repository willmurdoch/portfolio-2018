<?php
header('Content-Type: image/svg+xml');
$myColor = $_GET["color"];
echo '<?xml version="1.0" standalone="no"?>
<!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN"
"http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
<svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18.53 18.45"><defs><style>.cls-1{fill:'.$myColor.';}</style></defs><title>instagram</title><path class="cls-1" d="M265.83,386.78H251.7a2.2,2.2,0,0,0-2.2,2.19V403a2.2,2.2,0,0,0,2.2,2.19h14.12A2.2,2.2,0,0,0,268,403V389A2.2,2.2,0,0,0,265.83,386.78Zm-3,2.88a.58.58,0,0,1,.58-.58h1.74a.58.58,0,0,1,.58.58v1.73a.58.58,0,0,1-.58.58H263.4a.58.58,0,0,1-.58-.58Zm-4,2.82a3.54,3.54,0,1,1-3.56,3.54A3.55,3.55,0,0,1,258.79,392.48Zm7.51,10.44a.58.58,0,0,1-.58.58h-13.9a.58.58,0,0,1-.58-.58v-8.65h2.32a3.51,3.51,0,0,0-.4,1.75,5.64,5.64,0,0,0,11.27,0,2.94,2.94,0,0,0-.45-1.75h2.32Z" transform="translate(-249.5 -386.78)"/></svg>';
?>
