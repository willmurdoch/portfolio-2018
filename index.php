<?php include ('includes/header.php'); ?>
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
            <div class="clickWrap">
              <div class="shine"></div>
              <div class="device">
                <span class="base"></span>
              </div>
              <?php
              if (isset($project['desktop_video'])){ ?>
                <video poster="<?php echo $project['desktop']; ?>" class="work" playsinline loop muted>
                  <source src="<?php echo $project['desktop_video']; ?>" type="video/mp4">
                </video>
              <?php }
              else{ ?>
                <img class="work" src="<?php echo $project['desktop']; ?>" alt="" />
              <?php } ?>
            </div>
          </div>
        <?php endif; if(isset($project['mobile'])): ?>
          <div class="mobile">
            <div class="clickWrap">
              <div class="shine"></div>
              <div class="device"></div>
              <img class="work" src="<?php echo $project['mobile']; ?>" alt="" />
            </div>
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
<?php include ('includes/footer.php'); ?>
