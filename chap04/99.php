<?php
const BEGIN = 1;
const END = 9;

print '<table border=1>';
for($i = BEGIN; $i <= END; $i++) {
  print '<tr>';
  for($j = BEGIN; $j <= END; $j++) {
    print '<td>';
    print $i * $j;
    print '</td>';
  }
  print '</tr>';
}
print '</table>';
