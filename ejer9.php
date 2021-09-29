<!DOCTYPE html>
<html>

<head>
    <title>Comision</title>
</head>

<body>
    <?php
    class Comision
    {
        private $dinero;
        public function __construct($dinero)
        {
            $this->dinero = (int)$dinero;
            if ($this->dinero != $dinero) {
                throw new InvalidArgumentException("Error, no a numeros");
            }
        }
        public function calcularComision()
        {
            $comision = 0;
            if ($this->dinero < 10000) {
                $comision = ($this->dinero * 5) / 100;
                echo "El 5% de comision de ".$this->dinero." es: ".$comision;
            } elseif ($this->dinero >= 10000 && $this->dinero < 20000) {
                $comision = ($this->dinero * 8) / 100;
                echo "El 8% de comision de ".$this->dinero." es: ".$comision;
            } elseif ($this->dinero >= 20000 && $this->dinero < 40000) {
                $comision = ($this->dinero * 10) / 100;
                echo "El 10% de comision de ".$this->dinero." es: ".$comision;
            } else {
                $comision = ($this->dinero * 13) / 100;
                echo "El 13% de comision de ".$this->dinero." es: ".$comision;
            }
        }
    }
    try {
        $obj = new Comision(40000);
        $obj->calcularComision();
    } catch (InvalidArgumentException $e) {
        echo $e;
    }
    ?>
</body>

</html>