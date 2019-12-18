<?php
  $page = 'Exercice 5';
  include 'header.php';
function dateDiffInDays()  {
    $date1 = "16-05-2016";
    $date2 = '18-12-2019'; 
    // Calulating the difference in timestamps 
    $diff = strtotime($date2) - strtotime($date1); 
    // 1 day = 24 hours 
    // 24 * 60 * 60 = 86400 seconds 
    return abs(round($diff / 86400)); 
} ?>
<p><?= dateDiffInDays(). ' jours ce sont écoulés entre le 16 Mai 2016 et aujourd\'hui.' ; ?></p>
<?php include 'footer.php'; ?>
