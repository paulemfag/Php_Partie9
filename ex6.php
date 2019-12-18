<?php
  $page = 'Exercice 6';
  include 'header.php';
  $number = cal_days_in_month(CAL_GREGORIAN, 02, 2016); // 31
?>
<p><?= 'Il y a eu ' .$number. ' jours au mois de Février 2016.'?></p>
<?php include 'footer.php'; ?>
