<?php
  $page = 'Exercice 7';
  include 'header.php';
    $date = new DateTime('18-12-2019');
    $date->add(new DateInterval('P20D'));
?>
<p><?= 'Si on ajoute 20 jours à la date d\'aujourd\'hui nous obtenons : '.  $date->format('d-m-Y') . "\n"; ?></p>
<?php include 'footer.php'; ?>
