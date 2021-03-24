<?php
$pacHighlited = block_value('pach2hl');
$pacHeading = block_value('pach2heading');
?>

<section class="container-fluid pac-h2<?php if($pacHighlited == 'yes') echo " pac-h2--hl" ?>">
  <div class="container pac-h2__wrapper">
    <div class="col-sm-12 pac-h2__content">
      <h2 class="pac-h2__content-heading"><?php echo $pacHeading; ?></h2>
    </div>
  </div>
</section>
