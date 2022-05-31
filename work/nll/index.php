<!doctype html>
<html class="no-js" lang="">
    <head>
      <title>Home | NLL</title>
      <?php include 'includes/head.php'; ?>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        <?php include 'includes/nav.php'; ?>

        <div class="content">
          <section class="bigHero bottomBorder" style="background-image:url(assets/hero/rivalry/rivalry_test.jpg);">
            <div class="headline rivalry">
              <div class="title">
                <img src="assets/hero/rivalry/rivalry_header.png" />
              </div>
              <div class="leftDets">
                <h3>Buffalo <span>vs</span><br> TORONTO
              </div>
              <div class="rightDets">
                <p class="date">Saturday, December 3 <br><span>at</span> 8:00PM</span>
                <a class="cta reminder" href="#">Set a Reminder <button><span class="icon alarm"></span></button></a>
                <p class="sponsor"><span>Presented by</span> <a href="#" target="_blank"><img src="assets/logos/heineken.png" /></a></p>
              </div>
            </div>
            <div class="mover"></div>
          </section>
          <div class="nllWrap">
            <?php include 'components/schedule-slider.php'; ?>
            <div class="story-and-feed-container">
              <div class="thumbnail-left-container">
                <?php include 'components/video-tile.php' ?>
                <?php include 'components/video-tile.php' ?>
                <?php include 'components/video-tile.php' ?>
                <?php include 'components/video-tile.php' ?>
                <?php include 'components/video-tile.php' ?>
                <?php include 'components/video-tile.php' ?>
                <?php include 'components/video-tile.php' ?>
                <?php include 'components/video-tile.php' ?>
                <?php include 'components/video-tile.php' ?>
                <?php include 'components/video-tile.php' ?>
                <?php include 'components/video-tile.php' ?>
                <?php include 'components/video-tile.php' ?>
                <br><a class="loadMore ng-scope" href="news">More News <span>❯</span></a>
              </div>
            </div>
          </div>

          <?php include 'includes/footer.php'; ?>
        </div>
        <?php include 'includes/scripts.php'; ?>
    </body>
</html>
