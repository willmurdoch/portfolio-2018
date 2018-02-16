<!doctype html>
<html class="no-js" lang="">
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Will Murdoch</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="favicon.ico">
  <link rel="stylesheet" href="css/main.css">
</head>
<body>
  <!--[if lt IE 8]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/?locale=en">upgrade your browser</a> to improve your experience.</p>
  <![endif]-->

  <div id="projects">
    <?php
    $json = file_get_contents('js/projects.json');
    $projects = json_decode($json, true);
    foreach($projects as $project):
      echo '<pre>';
      print_r($project);
      echo '</pre>';
      echo $project['title'];
      //echo $project['title'];
    endforeach;
    ?>
  </div>

  <script src="js/vendor/modernizr-2.8.3.min.js"></script>
  <script src="js/vendor/jquery-1.12.0.min.js"></script>
  <script src="js/main.js"></script>
</body>
</html>
