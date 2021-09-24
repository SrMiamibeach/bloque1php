<!DOCTYPE html>
<html>

<head>

</head>

<body>
    <?php
    class Comunidad
    {
        private $nPuertas, $nPisos;
        private $letras = array("A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "Ñ", "O", "P", "Q", "", "", "", "", "", "", "");
        public function __construct($puertas, $pisos)
        {
            $this->nPuertas = $puertas;
            $this->nPisos = $pisos;
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
        $obj = new Comunidad(4,6);
        $obj -> lista();
    }catch(Exception $e)
    {
        echo $e;
    }

    ?>
</body>

</html>