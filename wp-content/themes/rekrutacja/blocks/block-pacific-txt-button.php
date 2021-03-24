<?php
$pacURL = block_value('pactbbuttonurl');
$pacBtnCaption = block_value('pactbbuttoncaption');
$pacHighlited = block_value('pactbhl');
?>

<section class="container-fluid pac-tb<?php if($pacHighlited == 'yes') echo " pac-tb--hl" ?>">
  <div class="container pac-tb__wrapper">
    <div class="col-sm-12 pac-tb__content">
      <div class="pac-tb__content-text">
        <?php
          block_field('pactbtext');
        ?>
      </div>
      <?php
      if($pacURL != null) {
        echo '<div class="pac-tb__content-c2a';
        if($pacAlignment == 'right') echo ' pac-tb__content-c2a--left';
        echo '">
            <a href="'.$pacURL.'" class="pac-tb__content-c2a-btn">'.$pacBtnCaption.'</a>
          </div>';
      }
      ?>
    </div>
  </div>
</section>
