<!DOCTYPE html>
<html>

<head>
    <title>Comunidad</title>
</head>

<body>
    <form method="POST">
        <label>Introduce El numero de pisos y de puertas</label>
        <p>Numero de pisos: <input type="text" name="pisos"/></p>
        <p>Numero de puertas: <input type="text" name="puertas"/></p>
        <input type="submit" value="Enviar"/>
    </form>
    <?php
    class Comunidad
    {
        
        
        private $nPuertas, $nPisos;
        private $letras = array("A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "Ñ", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z");
        public function __construct($puertas,$pisos)
        {
            $this->nPuertas = (int)$puertas;
            $this->nPisos = (int)$pisos;
            if ($this->nPuertas != $puertas || $this->nPisos != $pisos) {
                throw new InvalidArgumentException();
            }
        }

        public function lista()
        {
            $str = "<table border=1><tr><td>Pisos</td><td>puertas</td></tr>";
            for ($i = 0; $i < $this->nPisos; $i++) {
                for ($j = 0; $j < $this->nPuertas; $j++) {
                    $str.="<tr><td>".$i."</td><td>".$this->letras[$j]."</td></tr>";
                }
            }
            $str.="</table>";
            return $str;
        }
    }
    if(isset($_POST["puertas"])){


    try {
        $puertas = $_POST["puertas"];
        $pisos = $_POST["pisos"];
        $obj = new Comunidad($puertas,$pisos);
        echo $obj->lista();
    } catch (InvalidArgumentException $e) {
        echo $e;
    }

    }
    ?>
    <!--<pre>
        <?php
        print_r($_POST);
        ?>
    </pre>-->
</body>

</html>