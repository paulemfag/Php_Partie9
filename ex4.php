<?php
  $page = 'Exercice 4';
  include 'header.php';
?>
<p>Nous sommes le : <?= date('l d F Y, G:i:s'); ?></p>
<p>Nous étions le : <?= date('l d F Y, G:i:s', strtotime("2016-08-02 15:00")); ?></p>
<?php include 'footer.php'; ?>
