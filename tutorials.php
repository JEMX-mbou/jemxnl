<?php include 'includes/helpers.php'; ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title>JEMX | Tutorials</title>
    <?php include 'includes/meta-links.php'; ?>
  </head>
  <body class="">
    <!-- start navbar -->
    <?php include 'includes/menu.php' ?>
    <!-- end navbar -->
      <?php if (!isset($_GET['file'])) : ?>
        <div class="masthead h-25">
          <?=mastheadSnipTutImg('tutorials')?>
          <div class="content bg-c-1">
            <h2 class="txt-dark"><?=(isset($_GET['lang']) ? $_GET['lang'] : 'Tutorials')?></h2>
          </div>
        </div>
      <?php endif; ?>

      <?php if (!isset($_GET['lang'])) : ?>
        <section>
          <div class="container">
            <div class="row lang-buttons">
              <div class="lang col-s-6 col-m-4 col-l-3">
                <div class="card icon link center">
                  <a href="tutorials.php?lang=HTML">
                    <i class="bx bxl-html5" hover="#F06529"></i>
                    <h4 class="mb-2">HTML</h4>
                  </a>
                </div>
              </div>
              <div class="lang col-s-6 col-m-4 col-l-3">
                <div class="card icon link center">
                  <a href="tutorials.php?lang=CSS">
                    <i class="bx bxl-css3" hover="#2965f1"></i>
                    <h4 class="mb-2">CSS</h4>
                  </a>
                </div>
              </div>
              <div class="lang col-s-6 col-m-4 col-l-3">
                <div class="card icon link center">
                  <a href="tutorials.php?lang=JS">
                    <i class="bx bxl-javascript" hover="#f0db4f"></i>
                    <h4 class="mb-2">JavaScript</h4>
                  </a>
                </div>
              </div>
              <div class="lang col-s-6 col-m-4 col-l-3">
                <div class="card icon link center">
                  <a href="tutorials.php?lang=PHP">
                    <i class="bx bxl-php" hover="#8993be"></i>
                    <h4 class="mb-2">PHP</h4>
                  </a>
                </div>
              </div>
              <div class="lang col-s-6 col-m-4 col-l-3">
                <div class="card icon link center">
                  <a href="tutorials.php?lang=Git">
                    <i class="bx bxl-git" hover="#f34f29"></i>
                    <h4 class="mb-2">Git</h4>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </section>
      <?php else : ?>
        <section class="<?=(isset($_GET['file'])?'tutorial':'')?>">
          <div class="container">
            <div class="rows">
              <?php if (!isset($_GET['file'])) : ?>
                <a href="tutorials.php" class="btn c-3">Terug</a>
              <?php endif; ?>
              <?php include 'tutorials/loadTutorials.php'; ?>
            </div>
          </div>
        </section>
      <?php endif; ?>

    <!-- start footer -->
    <?php include 'includes/footer.php' ?>
    <!-- end footer -->
    <!-- start scripts and links -->
    <?php include 'includes/scripts-links.php' ?>
    <!-- end scripts and links -->
  </body>
</html>
