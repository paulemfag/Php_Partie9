<?php
  $page = 'Exercice 3';
  include 'header.php';
?>
<p>Nous sommes le : <?= date('l d F y'); ?></p>
<?php setlocale(LC_TIME, 'fr_FR.utf8','fra'); ?>
<p>Soit le : <?= strftime("%A %d %B %G"); ?></p>
<?php include 'footer.php'; ?>
