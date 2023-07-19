<?php
    get_header();
?>
<main>
  <h1><?= get_the_title(); ?></h1>
  <div><?= get_the_content(); ?></div>
</main>
<?php
    get_footer();
?>