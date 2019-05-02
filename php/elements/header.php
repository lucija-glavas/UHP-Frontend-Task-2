<div class="wrapper">
  <div class="wrapper_inner">

    <header class="site_header">
      <div class="header_inner">
        <div class="header_holder">
          <?php require_once 'navigation/navbar-right.php'; ?>
        </div>
      </div>
    </header>

    <?php if ($page_title !== 'Home'): ?>
      <div class="page_header" role="banner">
        <div class="title_holder">
          <div class="inner">
            <div class="title">
              <h1><?php print $page_title; ?></h1>
            </div>
          </div>
        </div>
      </div>
    <?php endif; ?>

    <div class="content">
