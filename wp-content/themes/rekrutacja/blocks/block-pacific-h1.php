<?php
$pacHighlited = block_value('pach1hl');
$pacHeading = block_value('pach1heading');
?>

<section class="container-fluid pac-h1<?php if($pacHighlited == 'yes') echo " pac-h1--hl" ?>">
  <div class="container pac-h1__wrapper">
    <div class="col-sm-12 pac-h1__content">
      <h1 class="pac-h1__content-heading"><?php echo $pacHeading; ?></h1>
    </div>
  </div>
</section>
