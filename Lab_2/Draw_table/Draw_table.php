<html>
  <head>
  </head>
  <body>
    <table>
      <tr>
        <td>
          <?php
            for ($i = 1; $i <= 3; $i++) {
              for ($j = 1; $j <= $i; $j++) {
                echo "* ";
              }
            }
          ?>
        </td>
        <td>
          <?php
            $num = 1;
            for ($i = 1; $i <= 3; $i++) {
              for ($j = 1; $j <= $i; $j++) {
                echo $num . " ";
                $num++;
              }
            }
          ?>
        </td>
        <td>
          <?php
            $char = 'A';
            for ($i = 1; $i <= 3; $i++) {
              for ($j = 1; $j <= $i; $j++) {
                echo $char . " ";
                $char++;
              }
            }
          ?>
        </td>
      </tr>
    </table>
  </body>
</html>
