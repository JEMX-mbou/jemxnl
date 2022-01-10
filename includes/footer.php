<?php require_once 'menu-structure.php'; ?>

<!-- start prefooter -->
<div class="prefooter">
  <div class="container">
    <div class="row">
      <div class="col-s-6 col-l-4 jc-center center my-4">
        <h4 class="mt-0 mb-2 txt-col-2"><i class="bx bxs-like"></i>Likes</h4>
        <p>Shown: total / next goal</p>
        <div class="tachometer c-2" percent="91%">
          <label><strong>6841</strong>/7500</label>
          <div class="inner"></div>
        </div>
      </div>
      <div class="col-s-6 col-l-4 jc-center center my-4">
        <h4 class="mt-0 mb-2 txt-col-3"><i class="bx bxs-copy"></i>Copies</h4>
        <p>Shown: total / next goal</p>
        <div class="tachometer c-3" percent="76%">
          <label><strong>11478</strong>/1500</label>
          <div class="inner"></div>
        </div>
      </div>
      <div class="col-s-6 col-l-4 jc-center center my-4">
        <h4 class="mt-0 mb-2 txt-col-5"><i class="bx bxs-hand-up"></i>Clicks</h4>
        <p>Shown: total / next goal</p>
        <div class="tachometer c-5" percent="25%">
          <label><strong>6841</strong>/7500</label>
          <div class="inner"></div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end prefooter -->

<!-- start footer -->
<footer>
  <div class="container">
    <div class="row">

      <div class="col-s-12 col-m-4">
        <h3>Sitemap</h3>
        <?=generate_menu()?>
      </div>

      <div class="col-s-12 col-m-4">
        <h3>Spotify</h3>
        <p>Ik vind het altijd wel fijn om wat muziek aan te zetten tijdens de les.<br>
          Dus hier mijn profiel en alvast een goede playlist.</p>
        <p><a href="spotify:https://open.spotify.com/user/1175450566?si=83196d1db4f84bd4"><i class="bx bxl-spotify"></i>Jesse Malotaux</a><br>
          <a href="spotify:https://open.spotify.com/playlist/2TSt28ml4Ok1QJuQMwHjs1?si=f4256957cde646f5"><i class="bx bxl-spotify"></i>The New Groove</a></p>
      </div>

      <div class="col-s-12 col-m-4">
        <h3>Socials</h3>
        <p><a href="https://github.com/JEMX-mbou"><i class="bx bxl-github"></i>JEMX-MBOU</a></p>
        <p><a href=""><i class="bx bxl-instagram-alt"></i>Instagram</a></p>
        <p><a href=""><i class="bx bxl-twitter"></i>Twitter</a></p>
        <p><a href=""><i class="bx bxl-youtube"></i>Youtube</a></p>
      </div>
    </div>
  </div>
</footer>
<!-- end footer -->
