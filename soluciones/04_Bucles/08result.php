<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <link href="default.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
  <div id="container">
      <div id="header">
        <h1>
          APRENDE PHP CON EJERCICIOS
        </h1>
                    <h2>
                            SOLUCIONES A LOS EJERCICIOS
                    </h2>
        <h2>
                        <br>4. Bucles
        </h2>
      </div>

      <div id="content">
                <table>
    <?php
                    $n = $_POST['n'];
                    echo "Tabla del $n<br><br>";
                    for ($i = 0; $i < 11; $i++)
                        echo "<tr><td>$n x $i = ".$n*$i."</tr></td>";
    ?>
                </table>
      </div>
      <div id="footer">
        © Luis José Sánchez González
      </div>
  </div>
    </body>
</html>