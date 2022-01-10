<?php require_once 'menu-structure.php'; ?>

<nav class="dark center bg-2 mob-m">
  <div class="menu-icon">
    <div class="inner"></div>
  </div>
  <div class="container">
    <div class="logo"><?=svg('jemx-dark-logo')?></div>
    <div class="logo-small"><?=svg('jemx-graphic')?></div>
    <div class="menu mob-top">
      <?=generate_menu()?>
    </div>
  </div>
</nav>
