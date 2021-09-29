<!DOCTYPE html>
<html>

<head>
    <title>Potencia</title>
</head>

<body>
    <?php
    class Potencia
    {
        private $potencia, $cantidad;
        public function __construct($potencia, $cantidad)
        {
            $this->potencia = $potencia;
            $this->cantidad = $cantidad;
        }
        public function resultado()
        {
            $cont = 1;
            $num = 1;
            $exit = false;
            while (pow($cont, $this->potencia) < $this->cantidad) {
                $num = pow($cont, $this->potencia);
                echo $num . "<br>";
                $cont++;
            }
        }
    }
    $obj = new Potencia(3, 200);
    $obj->resultado();
    ?>
</body>

</html>