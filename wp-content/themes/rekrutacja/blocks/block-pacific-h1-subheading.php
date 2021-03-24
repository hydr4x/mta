<?php
$pacHighlited = block_value('pach1shl');
$pacHeading = block_value('pach1sheading');
$pacSubheading = block_value('pach1ssubheading');
?>

<section class="container-fluid pac-h1s<?php if($pacHighlited == 'yes') echo " pac-h1s--hl" ?>">
  <div class="container pac-h1s__wrapper">
    <div class="col-sm-12 pac-h1s__content">
      <h1 class="pac-h1s__content-heading"><?php echo $pacHeading; ?></h1>
      <p class="pac-h1s__content-subheading"><?php echo $pacSubheading; ?></p>
    </div>
  </div>
</section>
