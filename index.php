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
<?php include ('includes/footer.php'); ?>
