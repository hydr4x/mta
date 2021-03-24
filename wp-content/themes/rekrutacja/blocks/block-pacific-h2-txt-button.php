<?php
$pacURL = block_value('pachtbbuttonurl');
$pacBtnCaption = block_value('pachtbbuttoncaption');
$pacHighlited = block_value('pachtbhl');
$pacHeading = block_value('pachtbheading');
?>

<section class="container-fluid pac-htb<?php if($pacHighlited == 'yes') echo " pac-htb--hl" ?>">
  <div class="container pac-htb__wrapper">
    <div class="col-sm-12 pac-htb__content">
      <h2 class="pac-htb__content-heading"><?php echo $pacHeading; ?></h2>
      <div class="pac-htb__content-text">
        <?php
          block_field('pachtbtext');
        ?>
      </div>
      <?php
      if($pacURL != null) {
        echo '<div class="pac-htb__content-c2a';
        if($pacAlignment == 'right') echo ' pac-htb__content-c2a--left';
        echo '">
            <a href="'.$pacURL.'" class="pac-htb__content-c2a-btn">'.$pacBtnCaption.'</a>
          </div>';
      }
      ?>
    </div>
  </div>
</section>
