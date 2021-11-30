<?php
// error reporting
error_reporting(E_ALL);
ini_set("display_errors", 1);

$user = $_POST["user"];
$u_pass = $_POST["password"];
$item_1 = $_POST["item1"];
$item_2 = $_POST["item2"];
$item_3 = $_POST["item3"];
$item_4 = $_POST["item4"];
$item_5 = $_POST["item5"];
$ship = $_POST["shipping"];
$total;
$item1_total = $item_1 * 7.99;
$item2_total = $item_2 * 7.89;
$item3_total = $item_3 * 6.99;
$item4_total = $item_4 * 8.99;
$item5_total = $item_5 * 5.99;
$subtotal = $item1_total + $item2_total + $item3_total + $item4_total + $item5_total;
$tax_total = $subtotal * 1.08;
if ($ship == "overnight") {
  $total = $tax_total + 50;
} elseif ($ship == "three") {
  $total = $tax_total + 5;
} else {
  $total = $tax_total;
}

echo "<html>";
echo "<head>";
echo '<link rel="stylesheet" href="../css/master.css">';
echo '<link rel="stylesheet" href="../css/storeFront.css">';
echo "</head>";
echo '<body id="multi_body">';

echo '<span id="user_pass">User Name: ' . $user . '</span><br>';
echo '<span id="user_pass">Password: ' . $u_pass . '</span><br><br>';

echo '<span id="recipt">    Recipt     </span><br>';
echo '<span id="recipt">----------</span><br>';
echo '<span id="recipt">Red Spatula x '.$item_1.' =  '.$item1_total.'</span><br>';
echo '<span id="recipt">Blue Spatula x '.$item_2.' =  '.$item2_total.'</span><br>';
echo '<span id="recipt">Purple Spatula x '.$item_3.' =  '.$item3_total.'</span><br>';
echo '<span id="recipt">White Spatula x '.$item_4.' =  '.$item4_total.'</span><br>';
echo '<span id="recipt">Black Spatula x '.$item_5.' =  '.$item5_total.'</span><br>';
echo '<span id="recipt">----------</span><br>';
echo '<span id="recipt">SUBTOTOAL: $'.round($subtotal,2).'</span><br>';
echo '<span id="recipt">----------</span><br>';
echo '<span id="recipt">Tax: $'.round($subtotal).' x 8% = $'.round($subtotal * 0.08, 2).'</span><br>';
echo '<span id="recipt">SUBTOTOAL: $'.round($tax_total,2).'</span><br>';
echo '<span id="recipt">----------</span><br>';
if ($ship == "overnight") {
  echo '<span id="recipt">Overnight Shipping = $50</span><br>';
} elseif ($ship == "three") {
  echo '<span id="recipt">Three Day Shipping = $5</span><br>';
} else {
  echo '<span id="Recipt">Free 7 Day Shipping = $0</span><br>';
}
echo '<span id="recipt">----------</span><br>';

echo '<span id="recipt">TOTAL: $'.round($total,2).'</span><br><br><br>';

echo '<span id="footer">THANK YOU FOR YOUR PURCHASE!!</span><br>';
echo "</body>";
echo "</html>";
 ?>
