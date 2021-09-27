<!DOCTYPE html>
<html>

<head>

</head>

<body>
    <?php
    class Comunidad
    {
        private $nPuertas, $nPisos;
        private $letras = array("A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "Ñ", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X","Y","Z");
        public function __construct($puertas, $pisos)
        {
            $this->nPuertas = (int)$puertas;
            $this->nPisos = (int)$pisos;
            if($this->nPuertas != $puertas || $this->nPisos != $pisos){
                throw new InvalidArgumentException();
            }
        }

        public function lista()
        {
            for ($i = 0; $i < $this->nPisos; $i++) 
            {
                echo "En el piso ".$i+1 . " hay estas puertas: ";
                for ($j = 0; $j < $this->nPuertas; $j++) 
                {
                    echo $this->letras[$j]."\t";
                }
                echo "<br>";
            }
        }
    }
    try
    {
        $obj = new Comunidad(3,6);
        $obj -> lista();
    }catch(InvalidArgumentException $e)
    {
        echo $e;
    }

    ?>
</body>

</html>