<?php if (isset($data['scripts'])): ?>
  <?php foreach ($data['scripts'] as $value): ?>
    <script src="<?= URL . '/js/' . $value ?>"></script>
  <?php endforeach; ?>
<?php endif; ?>

</body>

</html>