<?php
$array = array(
  array(1, 2, 3, 'A'),
  array(1, 2, 'B', 'C'),
  array(1, 'D', 'E', 'F')
);

?>

<html>
  <head>
  </head>
  <body>
    <table>
      <tr>
        <td>
          <?php
            for ($i = 0; $i < count($array); $i++) {
              for ($j = 0; $j < $i+1; $j++) {
                echo $array[$i][$j] . " ";
              }
              echo "<br>";
            }
          ?>
        </td>
        <td>
          <?php
            $num = 1;
            for ($i = 0; $i < count($array); $i++) {
              for ($j = 0; $j < $i+1; $j++) {
                echo $num . " ";
                $num++;
              }
              echo "<br>";
            }
          ?>
        </td>
        <td>
          <?php
            for ($i = 0; $i < count($array); $i++) {
              for ($j = $i; $j < count($array); $j++) {
                echo $array[$i][$j] . " ";
              }
              echo "<br>";
            }
          ?>
        </td>
      </tr>
    </table>
  </body>
</html>
