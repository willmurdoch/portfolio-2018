<!doctype html>
<html class="no-js" lang="">
    <head>
      <title>News | NLL</title>
      <?php include 'includes/head.php'; ?>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        <?php include 'includes/nav.php'; ?>

        <div class="content">
          <div class="news feed">

            <div class="article-thumbnail-container">
              <?php include 'components/video-tile.php'; ?>
              <?php include 'components/video-tile.php'; ?>
              <?php include 'components/video-tile.php'; ?>
              <?php include 'components/video-tile.php'; ?>
            </div>
            <div class="header-text-container">
              <div class="header-text">
                <h1>News</h1>
              </div>
            </div>
            <?php include 'components/news-filters.php'; ?>
            <div class="thumbnail-left-container">
              <?php include 'components/news-preview.php'; ?>
              <?php include 'components/news-preview.php'; ?>
              <?php include 'components/news-preview.php'; ?>
              <?php include 'components/news-preview.php'; ?>
              <?php include 'components/news-preview.php'; ?>
            </div>
          </div>
          <?php include 'includes/footer.php'; ?>
        </div>
        <?php include 'includes/scripts.php'; ?>
    </body>
</html>
