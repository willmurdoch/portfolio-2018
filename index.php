<?php
function slugify($text){
  $text = preg_replace('~[^\pL\d]+~u', '-', $text);
  $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
  $text = preg_replace('~[^-\w]+~', '', $text);
  $text = trim($text, '-');
  $text = preg_replace('~-+~', '-', $text);
  $text = strtolower($text);
  if(empty($text)){
    return 'n-a';
  }
  return $text;
}

$colors = array('ultraviolet', )
?>
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
<body class="tangerine">
  <!--[if lt IE 8]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/?locale=en">upgrade your browser</a> to improve your experience.</p>
  <![endif]-->
  <div id="wrapper">
    <div class="stripes">
      <div class="stripe"></div>
      <div class="stripe"></div>
      <div class="stripe"></div>
      <div class="stripe"></div>
    </div>
    <header>
      <div class="scaler">
        <h1>Will <br />Murdoch</h1>
        <h3>developer &bull; animator &bull; designer</h3>
      </div>
    </header>
    <section id="projects">
      <?php
      $json = file_get_contents('projects.json');
      $projects = json_decode($json, true);
      $count = 0;
      foreach($projects as $project): ?>
        <article id="<?php echo slugify($project['title']); ?>" class="project">
          <div class="imageWrap">
            <?php if(isset($project['desktop'])): ?>
              <div class="desktop">
                <div class="shine"></div>
                <div class="device">
                  <span class="base"></span>
                </div>
                <img class="work" src="<?php echo $project['desktop']; ?>" alt="<?php echo $project['title'] ?> Desktop Preview" />
              </div>
            <?php endif; if(isset($project['mobile'])): ?>
              <div class="mobile">
                <div class="shine"></div>
                <div class="device"></div>
                <img class="work" src="<?php echo $project['mobile']; ?>" alt="<?php echo $project['title'] ?> Mobile Preview" />
              </div>
            <?php endif; ?>
          </div>
          <div class="textWrap">
            <span class="count"><?php $count++; if($count < 10) echo '0'.$count; else echo $count; ?></span>
            <h3><?php echo $project['title']; ?></h3>
            <p><?php echo $project['description']; ?></p>
            <?php if(isset($project['link'])): ?>
              <a class="cta" href="<?php echo $project['link']; ?>" target="_blank"><p>Visit Site</p><span><p>Visit Site</p></span></a>
            <?php endif; ?>
          </div>
          <span class="circle"></span>
        </article>
      <?php endforeach; ?>
    </section>
    <a href="#" id="btt"><span>&#8679;</span> top</a>
    <footer>
      <p>© 2018 Will Murdoch. Proprietary code is licensed under&nbsp;<a href="http://opensource.org/licenses/mit-license.php" target="_blank">MIT</a>.</p>
    </footer>
  </div>

  <script src="js/vendor/modernizr-2.8.3.min.js"></script>
  <script src="js/vendor/jquery-1.12.0.min.js"></script>
  <script src="js/main.js"></script>
</body>
</html>
