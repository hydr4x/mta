<?php
$pacAttachmentId = block_value('pacihtbimage');
$pacAttachmentUrl = wp_get_attachment_url($pacAttachmentId);
$pacAttachmentAlt = block_value('pacihtbalt');
$pacAlignment = block_value('pacihtbalignment');
$pacURL = block_value('pacihtbbuttonurl');
$pacBtnCaption = block_value('pacihtbbuttoncaption');
$pacHighlited = block_value('pacihtbhl');
$pacHeading = block_value('pacihtbheading');
?>

<section class="container-fluid pac-ihtb<?php if($pacHighlited == 'yes') echo " pac-ihtb--hl" ?>">
  <div class="container pac-ihtb__wrapper">
    <?php
      $pacImageContent = '
      <div class="col-sm-4 pac-ihtb__image">
        <img src="'.$pacAttachmentUrl.'" alt="'.$pacAttachmentAlt.'" class="pac-ihtb__image-item">
      </div>
      ';
    ?>

    <?php
    if($pacAlignment == 'left') echo $pacImageContent;
    ?>
    <div class="col-sm-8 pac-ihtb__content">
      <h2 class="pac-ihtb__content-heading"><?php echo $pacHeading; ?></h2>
      <div class="pac-ihtb__content-text">
        <?php
          block_field('pacihtbtext');
        ?>
      </div>
      <?php
      if($pacURL != null) {
        echo '<div class="pac-ihtb__content-c2a';
        if($pacAlignment == 'right') echo ' pac-ihtb__content-c2a--left';
        echo '">
            <a href="'.$pacURL.'" class="pac-ihtb__content-c2a-btn">'.$pacBtnCaption.'</a>
          </div>';
      }
      ?>
    </div>
    <?php
    if($pacAlignment == 'right') echo $pacImageContent;
    ?>
  </div>
</section>
