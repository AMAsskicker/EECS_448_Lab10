<?php
for ($row = 0; $row  < 101; $row++) {
  for ($col=1; $col < 101; $col++) {
    if ($row == 0) {
      if ($col == 1) {
        echo "<tr>";
        echo "<td>X</td>";
        echo "<th>$col</th>";
      } elseif ($col == 100) {
        echo "<th>$col</th>";
        echo "</tr>";
      } else {
        echo "<th>$col</th>";
      }
    } else {
      $product = $row * $col;
      if ($col == 1) {
        echo "<tr>";
        echo "<th>$row</th>";
        echo "<td>$product</td>";
      } elseif ($col == 100) {
        echo "<td>$product</td>";
        echo "</tr>";
      } else {
        echo "<td>$product</td>";
      }
    }
  }
}
 ?>
