<?php
  $day = intval(date('j'));
  if (($day > 19) || ($day < 26)) {
    echo 'today!';
  } ?>