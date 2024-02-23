<?php
// Global settings Form

$footer_contact_settings = get_field('footer_contact_settings', 'options');
?>

<?php
if ($footer_contact_settings) :
?>
  <?php
  $phone_section = $footer_contact_settings['phone_section'];
  $form_title = $footer_contact_settings['form_title'];
  $form_caption = $footer_contact_settings['form_caption'];
  $form_id = $footer_contact_settings['form_id'];
  ?>
  <section class="contact-footer">
    <div class="contact-footer__phone"><?php echo $phone_section; ?></div>
    <div class="contact-footer__form">
      <div class="container">
        <?php if ($form_title) : ?>
          <div class="contact-footer__form-info">
            <div class="title"><?php echo $form_title; ?></div>
            <div class="caption"><?php echo $form_caption; ?></div>
          </div>
        <?php endif; ?>
        <?php if ($form_id) : ?>
          <div class="contact-footer__form-form">
            <?php initGravityForm($form_id); ?>
          </div>
        <?php endif; ?>
      </div>
    </div>
  </section>
<?php endif; ?>