<?php
//kpr(get_defined_vars());
//kpr($theme_hook_suggestions);
//template naming
//page--[CONTENT TYPE].tpl.php
?>
<?php if( theme_get_setting('mothership_poorthemers_helper') ){ ?>
<!-- page.tpl.php-->
<?php } ?>

<?php print $mothership_poorthemers_helper; ?>

<header role="banner">
  <?php if($page['header']): ?>
    <div class="header-region">
      <button class="navbar-toggle">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>
    <div class="navbar-collapse">
      <?php print render($page['header']); ?>
    </div>
  <?php endif; ?>
</header>

<div class="page-front">
  <div role="main" id="main-content-front">
    <?php print render($title_prefix); ?>
    <?php if ($title): ?>
      <?php if (!$is_front): ?>
        <h1><?php print $title; ?></h1>
      <?php endif; ?>
    <?php endif; ?>
    <?php print render($title_suffix); ?>

    <?php if ($action_links): ?>
      <ul class="action-links"><?php print render($action_links); ?></ul>
    <?php endif; ?>

    <?php if (isset($tabs['#primary'][0]) || isset($tabs['#secondary'][0])): ?>
      <nav class="tabs"><?php print render($tabs); ?></nav>
    <?php endif; ?>

    <?php if($page['highlighted'] OR $messages){ ?>
      <div class="drupal-messages">
      <?php print render($page['highlighted']); ?>
      <?php print $messages; ?>
      </div>
    <?php } ?>

    <?php print render($page['content_pre']); ?>
    <?php print render($page['content']); ?>
    <?php print render($page['content_post']); ?>

    <?php print render($page['front_bottom_left']); ?>
  </div><!-- /main-->

  <?php if ($page['sidebar_first']): ?>
    <div class="sidebar-first">
    <?php print render($page['sidebar_first']); ?>
    </div>
  <?php endif; ?>

  <?php if ($page['sidebar_second']): ?>
    <div class="sidebar-second">
      <?php print render($page['sidebar_second']); ?>
    </div>
  <?php endif; ?>
</div><!-- /page-->

<footer role="contentinfo">
  <div class="footer-top">
    <div class="footer-container">
      <div class="footer-col-first">
        <?php print render($page['footer_first']); ?>
      </div>

      <div class="footer-col col-second">
        <?php print render($page['footer_second']); ?>
      </div>

      <div class="footer-col col-third">
        <?php print render($page['footer_third']); ?>
      </div>
    </div>
  </div>

  <div class="footer-bottom">
    <?php print render($page['footer']); ?>
  </div>
</footer>