<?php
header('Content-Type: image/svg+xml');
$myColor = $_GET["color"];
echo '<?xml version="1.0" standalone="no"?>
<!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN"
"http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="23px" height="25px">
<path fill-rule="evenodd" stroke="'.$myColor.'" stroke-width="1px" stroke-linecap="butt" stroke-linejoin="miter" fill="'.$myColor.'" d="M16.005,1.500 L1.500,1.500 L1.500,23.500 L20.500,23.500 L20.500,6.753 L16.005,1.500 ZM16.398,4.194 L18.194,6.294 L16.398,6.294 L16.398,4.194 ZM19.063,22.025 L2.937,22.025 L2.937,2.975 L14.961,2.975 L14.961,7.768 L19.063,7.768 L19.063,22.025 ZM13.275,6.294 L5.645,6.294 L5.645,7.768 L13.275,7.768 L13.275,6.294 ZM5.645,18.672 L16.354,18.672 L16.354,17.197 L5.645,17.197 L5.645,18.672 ZM5.645,13.220 L16.354,13.220 L16.354,11.745 L5.645,11.745 L5.645,13.220 Z"/>
</svg>';
?>
