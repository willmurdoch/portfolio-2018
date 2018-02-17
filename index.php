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

  <section id="projects">
    <?php
    $json = file_get_contents('projects.json');
    $projects = json_decode($json, true);
    $count = 0;
    foreach($projects as $project): ?>
      <article class="project">
        <div class="textWrap">
          <span class="count"><?php $count++; if($count < 10) echo '0'.$count; else echo $count; ?></span>
          <h3><?php echo $project['title']; ?></h3>
          <p><?php echo $project['description']; ?></p>
          <?php if(isset($project['link'])): ?>
            <a class="cta" href="<?php echo $project['link']; ?>" target="_blank">Visit Site</a>
          <?php endif; ?>
        </div>
        <div class="imageWrap">
          <?php if(isset($project['desktop'])): ?>
            <div class="desktop">
              <img src="<?php echo $project['desktop']; ?>" alt="<?php echo $project['title'] ?> Desktop Preview" />
            </div>
          <?php endif; if(isset($project['mobile'])): ?>
            <div class="mobile">
              <img src="<?php echo $project['mobile']; ?>" alt="<?php echo $project['title'] ?> Mobile Preview" />
            </div>
          <?php endif; ?>
        </div>
      </article>
    <?php endforeach; ?>
  </section>

  <script src="js/vendor/modernizr-2.8.3.min.js"></script>
  <script src="js/vendor/jquery-1.12.0.min.js"></script>
  <script src="js/main.js"></script>
</body>
</html>
