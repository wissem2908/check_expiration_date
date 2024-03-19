<?php
function check_expiration($date) {
    $today = new DateTimeImmutable();
    $expirationDate = new DateTimeImmutable($date);
    $diff = $today->diff($expirationDate);
    $days = $diff->days;
    
    if ($days <= 45) {
      return false; // not expired
    } else {
      return true; // expired
    }
  }




$date="2023-04-06 01:21:03"
  if (check_expiration($date)) {
        echo "The date has expired  ";
    } else {
        echo "The date has not expired ";
    }

    ?>