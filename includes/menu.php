<?php require_once 'menu-structure.php'; ?>

<nav class="center v-center mob-m">
  <div class="menu-icon">
    <div class="inner"></div>
  </div>
  <div class="container">
    <div class="logo"><?=svg('jemx-light-logo')?></div>
    <div class="menu mob-side mob-full">
      <?=generate_menu()?>
    </div>
  </div>
</nav>
