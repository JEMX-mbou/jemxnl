<?php include 'includes/helpers.php'; ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title>JEMX | tutorials & snippets</title>
    <?php include 'includes/meta-links.php'; ?>
  </head>
  <body class="">
    <!-- start navbar -->
    <?php include 'includes/menu.php' ?>
    <!-- end navbar -->

    <!-- start masthead -->
    <div class="masthead">
      <img src="images/banner.png" alt="Welcome to JEMX.nl">
      <div class="content txt-white bg-transparent">
        <h2 class="txt-shadow txt-grey-3">Tutorials and Snippets</h2>
        <p class="txt-small-shadow">You thought you'd forget. But here they are.</p>
      </div>
    </div>
    <!-- end masthead -->

    <!-- Start introductory section -->
    <section id="introduction">
      <div class="container">
        <div class="row">
          <div class="col-s-12 col-m-9 col-l-6 center">
            <h1 class="my-2">JEMX.nl</h1>
            <hr class="b-col-3 thick">
            <p>Vaak leg ik dezelfde concepten meerdere keren uit aan verschillende studenten. En ik wou een centrale plek hebben waar ik dit soort uitleg en code snippets kon vastleggen. Niet alleen voor studenten, maar ook voor oud studenten en andere die geïnteresseerd zijn in web development.<p>
            <p>Bekijk gauw de verschillende tutorials en snippets</p>
            <p><a class="btn c-1 outline mx-2" href="tutorials.php">Tutorials</a> <a class="btn c-5 outline mx-2" href="snippets.php">Snippets</a></p>
          </div>
        </div>
      </div>
    </section>
    <!-- End introductory section -->

    <!-- start forum section -->
    <section id="forum" class="img-bg bg-dark">
      <img class="left o-20" src="images/bg3.jpg" alt="">
      <div class="container">
        <div class="row">
          <div class="col-s-12 col-l-6 ac-flex-start right txt-dark px-4">
            <h2 class="my-2 txt-col-3">Ga met elkaar in discussie!</h2>
            <p>Van elkaar leren is belangrijk. Ik weet echt niet altijd het antwoord, maar er zijn studenten die het antwoord dan wel hebben.</p>
            <p>Stel je vraag op het forum en hopelijk kan iemand je het antwoord geven!</p>
            <p><a class="btn c-3 outline" href="#">Forum</a></p>
          </div>
          <div class="col-s-12 col-l-6">
            <div class="forum post-list w-100">
              <div class="cat-title">
                <h3>Programmeer hulp</h3>
              </div>
              <div class="cat-posts">
                <div class="post">
                  <h4><strong>PHP:</strong> Hoe moet ik een API aanspreken?</h4>
                  <span class="excerpt">Hoi, ik ben nog betrekkelijk nieuw met PHP en weet...</span>
                </div>
                <div class="post">
                  <h4><strong>JS:</strong> Ik heb een ajax call gedaan ...</h4>
                  <span class="excerpt">Toen ik een AJAX call deed kreeg ik wel een reactie, maar...</span>
                </div>
                <div class="post">
                  <h4><strong>JS:</strong> querySelector werkt alleen voor ...</h4>
                  <span class="excerpt">Hallo. Ik wou een aantal elementen selecteren en toen...</span>
                </div>
                <div class="post">
                  <h4><strong>CSS/SCSS:</strong> z-index lijkt niet te werken</h4>
                  <span class="excerpt">Ik heb z-index toegepast, maar het element verplaatst zich...</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end forum section -->

    <!-- start tutorials section -->
    <section id="tutorials" class="bg-c-1 txt-dark">
      <div class="container">
        <div class="row">
          <div class="col-12 fd-col ai-center">
            <div class="col-m-6">
              <h2 class="txt-white-5 center mt-0">Meest gebruikte tutorials</h2>
              <p class="center">Hieronder zie je de tutorials die het meest worden gebruikt. Dat kan je zien aan de hoeveelheid clicks <i class="bx bxs-hand-up"></i>. Ook zie je de hoeveelheid likes <i class="bx bxs-like"></i> en moeilijkheid <i class="bx bxs-tachometer"></i>.</p>
            </div>
            <div class="tutorials post-list">
              <div class="cat-posts">
                <div class="post">
                  <h4><strong>JS:</strong> Basics: variabelen</h4>
                  <div class="info">
                    <span class="update-date">Last updated: <em>21-11-2021</em></span>
                    <span class="author">Author: <em>Taif Rahim</em></span>
                  </div>
                  <span class="excerpt">In JavaScript heb je net zoals in andere talen variabelen. Alleen in...</span>
                  <div class="ratings">
                    <span class="clicks"><i class="bx bxs-hand-up"></i> 5441</span>
                    <span class="likes"><i class="bx bxs-like"></i> 1245</span>
                    <span class="difficulty"><i class="bx bxs-tachometer"></i> 15%</span>
                  </div>
                </div>
                <div class="post">
                  <h4><strong>PHP:</strong> MySQL database aanspreken met PDO.</h4>
                  <div class="info">
                    <span class="update-date">Last updated: <em>08-07-2021</em></span>
                    <span class="author">Author: <em>Jesse Malotaux</em></span>
                  </div>
                  <span class="excerpt">Leer een connectie op te zetten met PHP Data Objects (PDO).</span>
                  <div class="ratings">
                    <span class="clicks"><i class="bx bxs-hand-up"></i> 3695</span>
                    <span class="likes"><i class="bx bxs-like"></i> 854</span>
                    <span class="difficulty"><i class="bx bxs-tachometer"></i> 39%</span>
                  </div>
                </div>
                <div class="post">
                  <h4><strong>Git:</strong> GitHub Classroom: opzetten en inleveren.</h4>
                  <div class="info">
                    <span class="update-date">Last updated: <em>11-10-2021</em></span>
                    <span class="author">Author: <em>Jesse Malotaux</em></span>
                  </div>
                  <span class="excerpt">GitHub Classroom wordt ingezet om opdrachten in te leveren.</span>
                  <div class="ratings">
                    <span class="clicks"><i class="bx bxs-hand-up"></i> 2655</span>
                    <span class="likes"><i class="bx bxs-like"></i> 558</span>
                    <span class="difficulty"><i class="bx bxs-tachometer"></i> 22%</span>
                  </div>
                </div>
                <div class="post">
                  <h4><strong>SCSS:</strong> Compiler opzetten.</h4>
                  <div class="info">
                    <span class="update-date">Last updated: <em>01-09-2021</em></span>
                    <span class="author">Author: <em>Jesse Malotaux</em></span>
                  </div>
                  <span class="excerpt">Om SASS/SCSS in te kunnen zetten moet het omgezet worden naar...</span>
                  <div class="ratings">
                    <span class="clicks"><i class="bx bxs-hand-up"></i> 1885</span>
                    <span class="likes"><i class="bx bxs-like"></i> 539</span>
                    <span class="difficulty"><i class="bx bxs-tachometer"></i> 20%</span>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end tutorials section -->

    <section>
      <div class="container">
        <div class="row">
          <div class="col-s-12 col-l-6">
            <h3>Most copied</h3>
            <?=snippet('git', 'Multiline-commit-message', 'Multiline commit message', 0, true)?>
            <?=snippet('php', 'Array-and-foreach', 'Array and foreach', 0, true)?>
          </div>
        </div>
      </div>
    </section>

    <!-- start footer -->
    <?php include 'includes/footer.php' ?>
    <!-- end footer -->

    <!-- start scripts and links -->
    <?php include 'includes/scripts-links.php' ?>
    <!-- end scripts and links -->
  </body>
</html>
