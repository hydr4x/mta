<?php
$pacHighlited = block_value('pach2shl');
$pacHeading = block_value('pach2sheading');
$pacSubheading = block_value('pach2ssubheading');
?>

<section class="container-fluid pac-h2s<?php if($pacHighlited == 'yes') echo " pac-h2s--hl" ?>">
  <div class="container pac-h2s__wrapper">
    <div class="col-sm-12 pac-h2s__content">
      <h2 class="pac-h2s__content-heading"><?php echo $pacHeading; ?></h2>
      <p class="pac-h2s__content-subheading"><?php echo $pacSubheading; ?></p>
    </div>
  </div>
</section>
