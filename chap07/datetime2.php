<?php
$now = new DateTimeImmutable();
print $now->format('Y年m月d日')."</br>";
print $now->format('Y年m月t日')."</br>";

$p1m10d = $now->add(new DateInterval('P1M10D'));
print $p1m10d->format('Y年m月d日')."</br>";
