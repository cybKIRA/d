<div class="atc-confirmation-dialog">
  <div class="text"><?php echo t('Product added to cart'); ?></div>
  <div class="links">
    <a href="<?php echo url('cart'); ?>" class="cart-link"><?php echo t('Go to Cart'); ?></a>
    <a href="<?php echo url('checkout'); ?>" class="checkout-link"><?php echo t('Go to Checkout'); ?></a>
    <a href="#" class="close-link" onclick="jQuery('#atc-confirmation-dialog').dialog('close'); return false;"><?php echo t('Continue shopping'); ?></a>
  </div>
</div>
