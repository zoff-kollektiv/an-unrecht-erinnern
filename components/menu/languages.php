<?php
$languages = pll_the_languages([
    'hide_current' => true,
    'hide_empty' => false,
    'raw' => true
]); ?>

<?php foreach ($languages as $language): ?>
  <a href="<?php echo $language['url']; ?>" class="language">
    <?php echo $language['name']; ?>
  </a>
<?php endforeach; ?>
