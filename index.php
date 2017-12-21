<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">

    <title></title>
  </head>
  <body>

    <table>
      <th id="pasta">Number</th>
      <th id="gebaksvork">kwadraad</th>
      <th id="brokjes">macht</th>
<?php
  $values = array();

 for ($x = 0; < 10; $x++) {
   echo "<tr>";
   echo "<td>".pow($x+1,1)."</td>";
   echo "<td>".pow($x+1,2)."</td>";
   echo "<td>".pow($x+1,3)."</td>";
   echo "</tr>";


?>

</table>
  </body>
</html>
