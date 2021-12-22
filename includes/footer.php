<?php require_once 'menu-structure.php'; ?>

<!-- start prefooter -->
<div class="prefooter">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <p>Ik vind het altijd wel fijn om wat muziek aan te zetten tijdens de les.<br>
          Dus bij deze de link naar m'n Spotify profiel: <a href="spotify:https://open.spotify.com/user/1175450566?si=83196d1db4f84bd4"><i class="bx bxl-spotify"></i>Jesse Malotaux</a> en alvast een playlist: <a href="spotify:https://open.spotify.com/playlist/2TSt28ml4Ok1QJuQMwHjs1?si=f4256957cde646f5"><i class="bx bxl-spotify"></i>The New Groove</a></p>
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
        <h3>Newsletter</h3>
        <p>Fill in your e-mail address to subscribe to the newsletter.</p>
        <form action="">
          <label for="email">E-mail:</label>
          <input type="text" name="email" id="email" placeholder="example@email.com" required />
          <input type="submit" name="submit" id="submit" value="Submit" class="btn style1" />
        </form>
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
