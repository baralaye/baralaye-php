<div class="page-body resume">
  <header>
  <h1><?php echo $resume['title']; ?></h1>
  <h4><?php echo $resume['docs']; ?></h4>
  </header>
  <div class="page-main">

    <section id="education">
      <h3>Education</h3>
      <ul class="section list outside">
        <?php echo $resume['education']; ?>
      </ul>
    </section>

    <section id="skills">
      <h3>Skills</h3>
      <div class="section">
        <?php echo $resume['skills']; ?>
      </div>
    </section>

    <?php echo $clients; ?>

    <?php echo $affiliations; ?>

    <?php echo $references; ?>

    <?php if($gallery): ?>
      <section id="portfolio">
        <h3>Portfolio</h3>
        <?php echo $gallery; ?>
      </section>
    <?php endif; ?>

    <?php if($resume['social']): ?>
      <section id="social">
        <h3>Social</h3>
        <div class="social-media">
          <?php echo $resume['social']; ?>
        </div>
      </section>
    <?php endif; ?>

  </div>
</div>
