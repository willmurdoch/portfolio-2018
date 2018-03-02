<?php
if(isset($_GET['color'])) $color = $_GET['color'];
else $color = '7ec98b';
header('Content-Type: image/svg+xml');
?>
<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" baseProfile="tiny" x="0px" y="0px" width="480px" height="480px" viewBox="0 0 480 480" xml:space="preserve">
  <g>
  	<path fill="<?php echo $color; ?>" d="M412.069,337.941c2.834,2.998,5.154,2.075,5.154-2.05V137.86c0-4.124-2.57-5.311-5.711-2.623l-100.287,85.358   c-3.15,2.671-3.4,7.312-0.564,10.312L412.069,337.941z"></path>
  	<path fill="<?php echo $color; ?>" d="M398.077,117.112c3.148-2.675,2.334-4.862-1.783-4.862H75.559c-4.116,0-4.914,2.174-1.747,4.814L231.42,249.266   c3.171,2.641,8.327,2.627,11.467-0.043L398.077,117.112z"></path>
  	<path fill="<?php echo $color; ?>" d="M57.222,335.892c0,4.125,2.321,5.048,5.156,2.05L163.38,231.33c2.835-2.999,2.571-7.611-0.595-10.265l-99.812-83.718   c-3.162-2.658-5.751-1.441-5.751,2.684V335.892z"></path>
  	<path fill="<?php echo $color; ?>" d="M250.231,272.517c-3.141,2.675-7.827,6.062-10.416,7.546c0,0,0,0-2.593,0c-2.571,0-2.571,0-2.571,0   c-2.562-1.45-7.24-4.794-10.406-7.451l-32.687-27.423c-3.163-2.653-8.068-2.373-10.907,0.625L77.88,354.298   c-2.835,3.003-1.782,5.453,2.343,5.453h314c4.125,0,5.182-2.45,2.342-5.453L293.506,245.516c-2.836-2.998-7.729-3.266-10.869-0.591   L250.231,272.517z"></path>
  </g>
</svg>