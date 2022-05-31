<?php
header('Content-Type: image/svg+xml');
$myColor = $_GET["color"];
echo '<?xml version="1.0" standalone="no"?>
<!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN"
"http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="26px" height="26px">
<path fill-rule="evenodd" fill="'.$myColor.'" d="M13.006,0.011 C5.823,0.011 -0.001,5.829 -0.001,13.005 C-0.001,20.181 5.823,25.998 13.006,25.998 C20.189,25.998 26.013,20.181 26.013,13.005 C26.013,5.829 20.189,0.011 13.006,0.011 ZM10.703,17.875 L10.703,8.135 L18.017,13.005 L10.703,17.875 Z"/>
</svg>';
?>
