<?php
  $page = 'Exercice 8';
  include 'header.php';
$date = new DateTime('18-12-2019');
$date->sub(new DateInterval('P22D'));
?>
<p><?= 'Si on enlève 22 jours à la date d\'aujourd\'hui nous obtenons : '. $date->format('d-m-Y') . "\n"; ?></p>
<?php include 'footer.php'; ?>
